<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/query/MarketQueryMod.php');

class EyemarketMod extends MarketQueryMod {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {


    parent::__construct();
        $member = @$this->session->userdata("member");
        $this->id_member = $member["id"];
        $this->username = $member["username"];
        $this->name = $member["name"];
        date_default_timezone_set('Asia/Jakarta');
    }
 
    function __market(){
 
        $data['prodlist'] = $this->get_all_product('5');
        $html = $this->load->view($this->__theme().'eyemarket/ajax/prodlist',$data,true);
        $data = array('xClass'=> 'reqmarket','xHtml' => $html);
        $this->tools->__flashMessage($data);
      

    }

    function __market_home()
    {
        $cat = $this->get_all_cat();

        $prod = array();
        foreach ($cat as $ct)
        {
            $prod[$ct->nama] = $this->get_product_cat('40',$ct->nama);
        }
        $data['prod'] = $prod;
        // print_r($data['prod']);exit();

        // $data['kaos'] = $this->get_product_cat('40','kaos');
        // $data['jersey'] = $this->get_product_cat('40','jersey');
        // $data['topi'] = $this->get_product_cat('40','topi');
        // $data['jaket'] = $this->get_product_cat('40','jaket');
        // $data['sepatu'] = $this->get_product_cat('40','sepatu');
        // $data['mug'] = $this->get_product_cat('40','mug');
        // $data['keychain'] = $this->get_product_cat('40','keychain');
        // $data['tas'] = $this->get_product_cat('40','tas');
        // $data['bola'] = $this->get_product_cat('40','bola');
        // $data['ss'] = $this->get_product_cat('40','sleeveless');

        $html = $this->load->view($this->__theme().'eyemarket/ajax/market_home',$data,true);
        $data = array('xClass'=> 'reqmarket','xHtml' => $html);
        $this->tools->__flashMessage($data);

    }

    function __market_detail()
    {
        $data['slug'] = $this->input->post('slug');
        
        $id_product = $this->get_id_product($data["slug"]);
        $data['product'] = $this->get_product($id_product->id_product);
        $data['ex_product'] = $this->get_product_lain($id_product->id_product);
        $data['username'] = $this->username;
        $data['id_member'] = $this->id_member;

        $html = $this->load->view($this->__theme().'eyemarket/ajax/market_detail',$data,true);
        $data = array('xClass'=> 'reqdetail','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __set_cart()
    {
        $id_member = $this->id_member;
        $id_membernya = $this->get_id_md($id_member);

        $id_product = $this->input->post('id_product');
        $jumlah = $this->input->post('jumlah');
        $catatan = $this->input->post('catatan');

        $this->db->select('harga,berat');
        $produk = $this->db->get_where('eyemarket_product', array('id_product' => $id_product))->row();
        
        $total  = $produk->harga * $jumlah;
        $berat  = $produk->berat * $jumlah;

        $data       = array(
            'id_product'    => $id_product,
            'id_member'     => $id_membernya->id_member,
            'jumlah'        => $jumlah,
            'total'         => $total,
            'berat'         => $berat,
            'catatan'       => $catatan,
            'created_date'  => date("Y-m-d H:i:s"),
        );

        $insert     = $this->add_keranjang($data);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Keranjang berhasil ditambah','xDirect'=> base_url().'eyemarket/keranjang/'.$id_member);
        $this->tools->__flashMessage($data);

    }

    function __view_cart()
    {
        $data['username'] = $this->username;
        $data['id_member'] = $this->id_member;

        $data['model']      = $this->get_keranjang($data['id_member']);
        $data['total_all']  = $this->get_total_harga($data['id_member']);
        $data['jumlah']     = $this->get_count_keranjang($data['id_member']);

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_cart',$data,true);
        $data = array('xClass'=> 'reqcart','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __delete_cart()
    {
        $id_member = $this->id_member;

        $id_product = $this->input->post('id');
        $query     = $this->delete_keranjang($id_product);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Produk berhasil dihilangkan dari keranjang','xDirect'=> base_url().'eyemarket/keranjang/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __edit_cart()
    {
        $id_member = $this->id_member;
        $id_keranjang = $this->input->post('idcart');
        $jumlah = $this->input->post('jumlah');

        $harga_satuan   = $this->get_harga_satuan($id_keranjang);
        $berat_satuan   = $this->get_berat($id_keranjang);

        $total          = $jumlah * $harga_satuan->harga;
        $berat          = $jumlah * $berat_satuan->berat;

        $data = array(
                'jumlah' => $jumlah,
                'total' => $total,
                'berat' => $berat,
        );

        $update                 = $this->edit_keranjang($data,$id_keranjang);
        $total_all_update       = $this->get_total_harga($id_member);

        $total_all_updatenya    = $total_all_update->total_all;

        $total_sub = "Rp. ".number_format($total,0,',','.');
        $total_cart = "Rp. ".number_format($total_all_updatenya,0,',','.');

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $total_sub, $this->input->post('dest_total') => $total_cart));
        $this->tools->__flashMessage($data);
    }

    function __edit_catatan()
    {
        $id_member = $this->id_member;
        $new_note = $this->input->post('catatan');
        $id_keranjang = $this->input->post('id_keranjang');
        $tag = "text-catatan-".$id_keranjang;
        
        $data = array(
                'catatan'   => $new_note,
        );

        $update     = $this->edit_catatan($data,$id_keranjang);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Catatan berhasil diubah','xDirect'=> base_url().'eyemarket/keranjang/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __view_address()
    {
        $data['id_member']  = $this->id_member;
        $data['member']     = $this->get_member($data['id_member']);
        $data['address']    = $this->get_address($data['id_member']);
        $data['provinsi']   = $this->get_all_provinsi();
        $data['jumlah']     = count($data['address']);

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_address',$data,true);
        $data = array('xClass'=> 'reqaddress','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __get_kota()
    { 
        $data["kota"]   = $this->get_kota($this->input->post('provinsi'));

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_kota',$data,true);

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $html));
        $this->tools->__flashMessage($data);
    }

    function __get_kecamatan()
    { 
        $data["kecamatan"]   = $this->get_kecamatan($this->input->post('kota'));

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_kecamatan',$data,true);

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $html));
        $this->tools->__flashMessage($data);
    }

    function __set_address()
    { 
        $id_member = $this->input->post('id_member');
        $id_membernya = $this->get_id_md($id_member);

        $nama_alamat = $this->input->post('nama_alamat');
        $penerima = $this->input->post('penerima');
        $hp = $this->input->post('hp');
        $alamat = $this->input->post('alamat');
        $kodepos = $this->input->post('kodepos');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kecamatan');

        $kode_jne   = $this->get_kode_jne($kota,$kecamatan);

        $input = array(
            'id_member'     => $id_membernya->id_member,
            'nama'          => $nama_alamat,
            'penerima'      => $penerima,
            'hp'            => $hp,
            'alamat'        => $alamat,
            'kodepos'       => $kodepos,
            'provinsi'      => $provinsi,
            'kota'          => $kota,
            'kecamatan'     => $kecamatan,
            'kode'          => $kode_jne->kode,
            'created_date'  => date("Y-m-d H:i:s"),
        );

        $insert = $this->tambah_address($input);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Alamat baru berhasil ditambah','xDirect'=> base_url().'eyemarket/set_alamat/'.$id_member);
        $this->tools->__flashMessage($data);

    }

    function __order_address()
    {
        $id_member = $this->input->post('id_member');
        $id_alamat = $this->input->post('pilih_alamat');

        $input = array(
            'id_alamat'     => $id_alamat,
        );

        $update_cart = $this->update_cart_address($id_member,$input);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Alamat pengiriman berhasil diatur','xDirect'=> base_url().'eyemarket/set_kurir/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __view_delivery()
    {
        $data['id_member'] = $this->id_member;
        $data['member'] = $this->get_member($data['id_member']);

        $data['berat'] = $this->get_total_berat($data['id_member']);
        $berat = $data['berat']->berat_all;

        $model = $this->get_keranjang($data['id_member']);
        $kode_tujuan = $model[0]['kode'];
        $data['alamat'] = $model[0]['alamat'];
        $data['kecamatan'] = $model[0]['kecamatan'];
        $data['kota'] = $model[0]['kota'];
        $data['provinsi'] = $model[0]['provinsi'];

        $this->load->helper('my');

        $get_ongkir = getOngkir($kode_tujuan,$berat);
        $jmlh_service = count($get_ongkir->price);
        $data['ctc'] = '';
        $data['reg'] = '';
        $data['yes'] = '';
        $data['ctcyes'] = '';

        for ($i = 0; $i < $jmlh_service ; $i++)
        {
            if ($get_ongkir->price[$i]->service_display == "CTC")
            {
                $data['ctc'] = $get_ongkir->price[$i]->price;
            }
            else
            if ($get_ongkir->price[$i]->service_display == "REG")
            {
                $data['reg'] = $get_ongkir->price[$i]->price;
            }
            else
            if ($get_ongkir->price[$i]->service_display == "YES")
            {
                $data['yes'] = $get_ongkir->price[$i]->price;
            }
            else
            if ($get_ongkir->price[$i]->service_display == "CTCYES")
            {
                $data['ctcyes'] = $get_ongkir->price[$i]->price;
            }
        }

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_delivery',$data,true);
        $data = array('xClass'=> 'reqkurir','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __order_delivery()
    {
        $id_member = $this->id_member;
        $id_kurir = $this->input->post('delivery');
        $ongkir = $this->input->post('ongkir'.$id_kurir);

        // $data['harga']      = $this->get_total_harga($id_member);

        $data1 = array(
            'id_kurir'  => $id_kurir,
            'ongkir'    => $ongkir,
        );

        $update_cart = $this->update_cart_delivery($id_member,$data1);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Metode pengiriman berhasil diatur','xDirect'=> base_url().'eyemarket/set_payment/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __view_payment()
    {
        $data['id_member'] = $this->id_member;
        $data['model'] = $this->get_keranjang($data['id_member']);
        $data['bank'] = $this->get_all_bank();

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_payment',$data,true);
        $data = array('xClass'=> 'reqpayment','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __order_payment()
    {
        $id_member = $this->id_member;

        $object     = array(
            'id_tipe_bayar'     => $this->input->post('payment'),
        );
        
        $update = $this->update_cart_payment($id_member,$object);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Metode pembayaran berhasil diatur','xDirect'=> base_url().'eyemarket/review_pesanan/'.$id_member);
        $this->tools->__flashMessage($data);
    }

    function __view_order_review()
    {
        $data['id_member'] = $this->id_member;
        $data['model'] = $this->get_keranjang($data['id_member']);
        $data['address'] = $this->get_address($data['id_member']);
        $data['jumlah'] = count($data['address']);
        $data['total_all'] = $this->get_total_harga($data['id_member']);
        $data['beratnya'] = $this->get_total_berat($data['id_member']);

        $data['kurir']          = "";
        $data['ongkir']         = "";
        $data['penerima']       = "";
        $data['alamat']         = "";
        $data['provinsi']       = "";
        $data['kota']           = "";
        $data['kecamatan']      = "";
        $data['hp']             = "";
        $data['berat_all']      = $data['beratnya']->berat_all;

        foreach ($data['model'] as $val)
        {
            $data['kurir']          = $val['kurir'];
            $data['ongkir']         = $val['ongkir'];
            $data['penerima']       = $val['nama_penerima'];
            $data['alamat']         = $val['alamat'];
            $data['provinsi']       = $val['provinsi'];
            $data['kota']           = $val['kota'];
            $data['kecamatan']      = $val['kecamatan'];
            $data['hp']             = $val['hp'];
            $data['berat']          = $val['berat'];
        }

        $data['total_finish'] = $data['total_all']->total_all + $data['ongkir'];

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_order_review',$data,true);
        $data = array('xClass'=> 'reqreview','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __set_order()
    {
        $tahun = date("Y");
        $bulan = date("m");

        $data['id_member'] = $this->id_member;
        $id_membernya = $this->get_id_md($data['id_member']);

        $data['keranjang'] = $this->get_keranjang($data['id_member']);

        $data['total_all']  = $this->get_total_harga($data['id_member']);
        $data['berat_all']  = $this->get_total_berat($data['id_member']);

        $harga      = $data['total_all']->total_all;
        $total_all  = $data['keranjang'][0]['ongkir'] + $harga;

        //=====set nomor urut
        $no_urut_last = $this->get_max_nourut($id_membernya->id_member);
        $no_urut_now = (int)$no_urut_last->max_urut;
        $no_urut_now++;
        $new_no_urut = sprintf("%03s", $no_urut_now);

        //=====set nomor order
        $no_order = "$tahun$bulan$id_membernya->id_member$new_no_urut";
        $data['no_order'] = $no_order;

        //=====set nomor invoice
        $no_invoice             = "INV-MBCI/EMK/".$tahun."/".$bulan."/".$id_membernya->id_member."/".$new_no_urut;
        $data['no_invoice']     = $no_invoice;

        $data['expired']    = date('Y-m-d H:i:s',strtotime("+4 hours"));

        


        
        $objek = array(
                    'id_member' => $id_membernya->id_member,
                    'id_alamat' => $data['keranjang'][0]['id_alamat'],
                    'id_kurir' => $data['keranjang'][0]['id_kurir'],
                    'id_tipe_bayar' => $data['keranjang'][0]['id_tipe_bayar'],
                    'no_urut' => $new_no_urut,
                    'no_order' => $no_order,
                    'no_invoice' => $no_invoice,
                    'harga' => $harga,
                    'berat_all' => $data['berat_all']->berat_all,
                    'ongkir' => $data['keranjang'][0]['ongkir'],
                    'harga_all' => $total_all,
                    'order_date' => date("Y-m-d H:i:s"),
                    'expired_date' => $data['expired'],
                    'status' => 1,
        );
        $id_order      = $this->set_order($objek);

        //===== update keranjang
        $cart = array(
            'id_order' => $id_order,
            'status' => 1,
        );

        $update_cart = $this->db->update('eyemarket_keranjang', $cart, array('id_member' => $id_membernya->id_member, 'status' => 0));

        //for email
        $data['model'] = $this->get_invoice($no_order);
        $data["profile"] = $this->get_member($data['id_member']);
        foreach ($data["profile"] as $value)
        {
            $data['username'] = $value['name'];
            $data['nama_lengkap'] = $value['fullname'];
            $data['email'] = $value['email'];
        }

        $message = $this->load->view($this->__theme().'eyemarket/mail_order',$data,TRUE);
        $to = $data["email"];
        $subject = 'Menunggu Pembayaran untuk Pemesanan '.$no_invoice;

        $query = array('to'=> $to, 'subject'=> $subject, 'message'=> $message);
        $this->excurl->remoteCall($this->__xurl().'mailer', $this->__xkey(), $query);
        // $send_mail  = send_mail($to,$subject,$msg);

        $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => '<strong>Order anda berhasil</strong><br />Silahkan cek email anda untuk langkah selanjutnya','xDirect'=> base_url().'eyemarket/pesanan/'.$data['id_member']);
        $this->tools->__flashMessage($data);
    }

    function __profile()
    {
        $data["id_member"]  = $this->id_member;
        $data["profile"]    = $this->get_member($data["id_member"]);

        foreach ($data["profile"] as $value)
        {
            $data['username']       = $value['name'];
            $data['nama_lengkap']   = $value['fullname'];
            $data['email']          = $value['email'];
            $data['hp']             = $value['phone'];
            $data['alamat']         = $value['address'];
        }

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_user',$data,true);
        $data = array('xClass'=> 'reqprofile','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __view_orders()
    {
        $data["id_member"]  = $this->id_member;
        $data["profile"]    = $this->get_member($data["id_member"]);

        foreach ($data["profile"] as $value)
        {
            $data['username']       = $value['name'];
            $data['nama_lengkap']   = $value['fullname'];
            $data['email']          = $value['email'];
            $data['hp']             = $value['phone'];
            $data['alamat']         = $value['address'];
        }

        $data["model"]      = $this->get_pesanan($data["id_member"]);

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_orders',$data,true);
        $data = array('xClass'=> 'reqorders','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __view_confirm()
    {
        $no_order = $this->input->post('no_order');
        $data["id_member"]  = $this->id_member;
        $data["profile"]    = $this->get_member($data["id_member"]);

        foreach ($data["profile"] as $value)
        {
            $data['username']       = $value['name'];
            $data['nama_lengkap']   = $value['fullname'];
            $data['email']          = $value['email'];
            $data['hp']             = $value['phone'];
            $data['alamat']         = $value['address'];
        }

        $data["model"]      = $this->get_invoice($no_order);

        $html = $this->load->view($this->__theme().'eyemarket/ajax/view_confirm',$data,true);
        $data = array('xClass'=> 'reqconfirm','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __set_confirm()
    { 
        $id_member = $this->id_member;
        $no_order = $this->input->post('no_order');
        $id_order = $this->input->post('id_order');
        $nominal = $this->input->post('nominal');
        $file_name = $_FILES['bukti']['name'];
  
        $this->load->library('upload');
        
        //===== atur upload bukti
        $config['upload_path'] = ($_SERVER['SERVER_NAME'] == 'localhost') ? './img/eyemarket/bukti/' : MARKETFOLDER.'/produk';
        $config['allowed_types'] = '*';
        $config['max_size']  = '10000';
        $config['max_width']  = '0';
        $config['max_height']  = '0';

        $this->upload->initialize($config);


        if (!$this->upload->do_upload('bukti'))
        {
            $error = $this->upload->display_errors();
            var_dump($error);exit();
            // redirect($_SERVER['HTTP_REFERER']);
            $data = array('xAlert' => true,'xCss' => 'boxfailed','xMsg' => 'Maaf telah terjadi kesalahan, mohon tunggu beberapa saat dan hubungi Admin EyeMarket jika masih terdapat error ','xDirect'=> base_url().'eyemarket/pesanan/'.$id_member);
            $this->tools->__flashMessage($data);
        }
        else
        {
            //===== insert ke table eyemarket_konfirmasi
            $objek = array(
                            'id_order'      => $id_order,
                            'nominal'       => $nominal,
                            'bukti'         => $file_name,
                            'created_date'  => date("Y-m-d H:i:s"),
                        );

            $insert =   $this->set_konfirmasi($objek);

            $objek2 = array(
                            'status' => 2,
            );

            $this->db->update('eyemarket_order', $objek2, array('id' => $id_order));

            $data['no_order'] = $no_order;
            $data['nominal'] = $nominal;
            $data['file_name'] = $file_name;
            $data['name'] = $this->name;

            $message = $this->load->view($this->__theme().'eyemarket/mail_bukti',$data,TRUE);
            $to = "info@eyesoccer.id";
            $subject = 'Ada konfirmasi pembayaran untuk nomor order '.$no_order;

            $query = array('to'=> $to, 'subject'=> $subject, 'message'=> $message);
            $this->excurl->remoteCall($this->__xurl().'mailer', $this->__xkey(), $query);

            $data = array('xAlert' => true,'xCss' => 'boxsuccess','xMsg' => 'Konfirmasi Pembayaran berhasil diunggah, <br> Mohon tunggu konfirmasi admin EyeMarket','xDirect'=> base_url().'eyemarket/pesanan/'.$id_member);
            $this->tools->__flashMessage($data);
        }
    }

}


