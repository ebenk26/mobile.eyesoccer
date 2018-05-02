<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarketQueryMod extends CI_Model {

    function get_id_md($id_md)
    {
        $query = $this->db->query(" SELECT
                                        A.id_member
                                    FROM
                                        tbl_member A
                                    WHERE
                                        md5(A.id_member) = '$id_md'
                                        ")->row();
        return $query;
    }

    public function get_all_product($limit)
    {
        $query = $this->db->query(" SELECT
                                        A.id_product,
                                        A.id_kategori,
                                        A.id_toko,
                                        A.nama,
                                        A.title_slug,
                                        A.harga_sebelum,
                                        A.harga,
                                        A.diskon,
                                        A.status_publish,
                                        A.created_date,
                                        B. nama as toko,
                                        C. nama as kategori,
                                        E.id as id_image,
                                        E.image1,
                                        F.nama as nama_region
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN 
                                        eyemarket_toko B on A.id_toko = B.id
                                    LEFT JOIN
                                        eyemarket_category C on A.id_kategori = C.id
                                    LEFT JOIN
                                        eyemarket_images E on A.id_product =  E.id_product
                                    LEFT JOIN
                                        eyemarket_parent_cat F on A.id_kategori = F.id
                                    WHERE
                                        A.status_publish = 1
                                    ORDER BY 
                                        A.id_product DESC
                                    LIMIT $limit
                                        ")->result_array();
            return $query; 
    }

    function get_product_cat($limit,$cat)
    {
        $this->db->select(' A.id_product,
                            A.id_kategori,
                            A.id_toko,
                            A.nama,
                            A.title_slug,
                            A.harga_sebelum,
                            A.harga,
                            A.diskon,
                            A.status_publish,
                            A.created_date,
                            B.nama as toko,
                            C.nama as kategori,
                            E.id as id_image,
                            E.image1,
                            F.nama as nama_region
                            ');

        $this->db->from('eyemarket_product AS A');

        $this->db->join('eyemarket_toko AS B', 'A.id_toko = B.id', 'LEFT');
        $this->db->join('eyemarket_category AS C', 'A.id_kategori = C.id', 'LEFT');
        $this->db->join('eyemarket_images AS E', 'A.id_product =  E.id_product', 'LEFT');
        $this->db->join('eyemarket_parent_cat AS F', 'A.id_kategori = F.id', 'LEFT');

        $this->db->where('A.status_publish = 1');
        
        if ($cat != null)
        {
            $this->db->like('C.nama', $cat);
        }

        $this->db->order_by('A.nama', 'asc');

        $query = $this->db->get()->result();

        return $query;
    }

    function get_all_cat()
    {
        $query = $this->db->get('eyemarket_category')->result();

        return $query;
    }

    public function get_id_product($title_slug)
    {
        $this->db->select('id_product');
        $query = $this->db->get_where('eyemarket_product', array('title_slug' => $title_slug))->row();
        return $query; 
    }

    public function get_product($id_product)
    {
        $query = $this->db->query(" SELECT
                                        A.id_product,
                                        A.id_kategori,
                                        A.id_toko,
                                        A.nama,
                                        A.title_slug,
                                        A.harga_sebelum,
                                        A.harga,
                                        A.diskon,
                                        A.stok,
                                        A.berat,
                                        A.keterangan,
                                        A.ongkir,
                                        A.status_publish,
                                        A.created_date,
                                        B. nama as toko,
                                        C. nama as kategori,
                                        D.id,
                                        D.S,
                                        D.M,
                                        D.L,
                                        D.XL,
                                        D.XXL,
                                        D.XXXL,
                                        D.custom,
                                        E.id as id_image,
                                        E.image1,
                                        E.image2,
                                        E.image3,
                                        E.image4,
                                        E.image5
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN 
                                        eyemarket_toko B        on A.id_toko = B.id
                                    INNER JOIN
                                        eyemarket_category C    on A.id_kategori = C.id
                                    LEFT JOIN
                                        eyemarket_size D        on A.id_product = D.id_product
                                    LEFT JOIN
                                        eyemarket_images E      on A.id_product =  E.id_product
                                    WHERE
                                        A.id_product = '$id_product'
                                        AND
                                        status_publish != 2
                                    ORDER BY 
                                        A.id_product DESC
                                        ")->result_array();
            return $query; 
    }

    public function get_product_lain($id_product)
    {
        $query = $this->db->query(" SELECT
                                        A.*,
                                        B.image1,
                                        C.nama as toko
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN
                                        eyemarket_images B on B.id_product = A.id_product
                                    LEFT JOIN
                                        eyemarket_toko C on C.id = A.id_toko
                                    WHERE
                                        A.id_product != '$id_product'
                                        AND
                                        A.status_publish = 1
                                    LIMIT
                                        4
                                        ")->result_array();
        return $query; 
    }

    public function add_keranjang($data)
    {
        $this->db->insert('eyemarket_keranjang', $data);
        
        return $this->db->insert_id();
    }

    public function get_keranjang($id_member)
    { 
        $query = $this->db->query(" SELECT
                                        A.*,
                                        B.nama,
                                        B.title_slug,
                                        B.harga_sebelum,
                                        B.harga,
                                        B.diskon,
                                        B.berat,
                                        B.keterangan,
                                        C.nama as toko,
                                        D.nama as kurir,
                                        E.id as id_image,
                                        E.image1,
                                        E.image2,
                                        E.image3,
                                        E.image4,
                                        E.image5,
                                        F.nama as nama_rumah,
                                        F.penerima as nama_penerima,
                                        F.kode,
                                        F.hp,
                                        F.alamat,
                                        F.provinsi,
                                        F.kota,
                                        F.kecamatan
                                    FROM
                                        eyemarket_keranjang A
                                    LEFT JOIN
                                        eyemarket_product B     on B.id_product = A.id_product
                                    LEFT JOIN
                                        eyemarket_toko C        on C.id = B.id_toko
                                    LEFT JOIN
                                        eyemarket_images E      on A.id_product =  E.id_product
                                    LEFT JOIN
                                        eyemarket_address F      on A.id_alamat =  F.id
                                    LEFT JOIN
                                        eyemarket_kurir D       ON D.id     = A.id_kurir
                                    WHERE 
                                        md5(A.id_member) = '$id_member'
                                        AND
                                        A.status = 0
                                    ORDER BY
                                        A.id ASC
                                        ")->result_array();
        return $query;
    }

    public function edit_catatan($data,$id_keranjang)
    {
        $query = $this->db->update('eyemarket_keranjang', $data, array('id' => $id_keranjang, 'status' => '0'));
        
        return $query;
    }

    public function get_total_harga($id_member)
    { 
        $query = $this->db->query(" SELECT
                                        sum(total) as total_all
                                    FROM
                                        eyemarket_keranjang
                                    WHERE
                                        md5(id_member) = '$id_member'
                                        AND
                                        status = 0
                                        ")->row();
        return $query;
    }

    public function get_total_berat($id_member)
    { 
        $query = $this->db->query(" SELECT
                                        sum(berat) as berat_all
                                    FROM
                                        eyemarket_keranjang
                                    WHERE
                                        md5(id_member) = '$id_member'
                                        AND
                                        status = 0
                                        ")->row();
        return $query;
    }

    public function get_count_keranjang($id_member)
    {
        $query = $this->db->query(" SELECT
                                        count(id) as jumlah
                                    FROM
                                        eyemarket_keranjang
                                    WHERE
                                        md5(id_member) = '$id_member'
                                        AND
                                        status = 0
                                        ")->row();
        return $query;
    }

    public function delete_keranjang($id)
    {
        $this->db->delete('eyemarket_keranjang', array('id' => $id));

        return $this->db->affected_rows();;
    }

    public function get_harga_satuan($id_keranjang)
    { 
        $query = $this->db->query(" SELECT
                                        A.harga
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN
                                        eyemarket_keranjang B on B.id_product = A.id_product 
                                    WHERE
                                        B.id = '$id_keranjang'
                                        ")->row();
        return $query;
    }

    public function get_berat($id_keranjang)
    { 
        $query = $this->db->query(" SELECT
                                        A.berat
                                    FROM
                                        eyemarket_product A
                                    LEFT JOIN
                                        eyemarket_keranjang B on B.id_product = A.id_product 
                                    WHERE
                                        B.id = '$id_keranjang'
                                        ")->row();
        return $query;
    }

    public function edit_keranjang($data,$id_keranjang)
    {
        $query = $this->db->update('eyemarket_keranjang', $data, array('id' => $id_keranjang, 'status' => '0'));
        
        return $query;
    }

    public function get_member($id_member)
    {
        $query = $this->db->query(" SELECT
                                        A.*
                                    FROM
                                        tbl_member A
                                    WHERE 
                                        md5(A.id_member) = '$id_member'
                                        ")->result_array();
        return $query;
    }

    public function get_address($id_member)
    { 
        $query = $this->db->query(" SELECT
                                        *
                                    FROM
                                        eyemarket_address
                                    WHERE
                                        md5(id_member) = '$id_member'
                                    ")->result_array();
        return $query;
    }

    public function get_all_provinsi()
    {
        $this->db->select('provinsi');
        $this->db->group_by('provinsi');
        $query = $this->db->get('eyemarket_destinasi')->result_array();

        return $query;
    }

    public function get_kota($prov)
    {
        $query = $this->db->query(" SELECT
                                        A.kota
                                    FROM
                                        eyemarket_destinasi A
                                    WHERE
                                        A.provinsi = '$prov'
                                        AND
                                        A.kota != 'DKI JAKARTA'
                                    GROUP BY
                                        A.kota
                                        ")->result();
        return $query;
    }

    public function get_kecamatan($kota)
    {
        $query = $this->db->query(" SELECT
                                        A.kecamatan
                                    FROM
                                        eyemarket_destinasi A
                                    WHERE
                                        A.kota = '$kota'
                                    GROUP BY
                                        A.kecamatan
                                        ")->result();
        return $query;
    }

    public function get_kode_jne($kota,$kecamatan)
    {
        $query = $this->db->query(" SELECT
                                        A.kode
                                    FROM
                                        eyemarket_destinasi A
                                    WHERE
                                        A.kota = '$kota'
                                        AND
                                        A.kecamatan = '$kecamatan'
                                        ")->row();
        return $query;
    }

    public function tambah_address($input)
    {
        $this->db->insert('eyemarket_address', $input);
        
        return $this->db->insert_id();
    }

    public function update_cart_address($id_member,$data)
    {
        $query = $this->db->update('eyemarket_keranjang', $data, array('md5(id_member)' => $id_member, 'status' => '0'));
        
        return $query;
    }

    public function update_cart_delivery($id_member,$data)
    {
        $query = $this->db->update('eyemarket_keranjang', $data, array('md5(id_member)' => $id_member, 'status' => '0'));
        
        return $query;
    }

    public function get_all_bank()
    {
        $query  = $this->db->get('eyemarket_payment')->result_array();

        return $query;
    }

    public function update_cart_payment($id_member,$data)
    {
        $query = $this->db->update('eyemarket_keranjang', $data, array('md5(id_member)' => $id_member, 'status' => '0'));
        
        return $query;
    }

    public function get_max_nourut($id_member)
    {
        $query = $this->db->query(" SELECT
                                        MAX(A.no_urut) AS max_urut
                                    FROM
                                        eyemarket_order A 
                                    WHERE
                                        A.id_member = '$id_member'
                                        ")->row();
        return $query;
    }

    public function set_order($object)
    {
        $this->db->insert('eyemarket_order', $object);
        
        return $this->db->insert_id();
    }

    function set_keranjang_status($id_order,$cart)
    {
        $query = $this->db->update('eyemarket_keranjang', $cart, array('id_order' => $id_order));
        
        return $query;
    }

    public function get_invoice($no_order)
    { 
        $query = $this->db->query(" SELECT
                                        A.*,
                                        D.nama as toko,
                                        D.hp,
                                        D.email,
                                        D.alamat,
                                        E.nama as kurir,
                                        G.name as username,
                                        H.penerima,
                                        H.alamat,
                                        H.provinsi as provinsinya,
                                        H.kota,
                                        H.kecamatan,
                                        I.rekening,
                                        I.bank,
                                        I.nama_pemilik,
                                        I.logo
                                    FROM
                                        eyemarket_order A
                                    LEFT JOIN
                                        eyemarket_keranjang B   on B.id_order = A.id
                                    LEFT JOIN
                                        eyemarket_product C     on C.id_product = B.id_product
                                    LEFT JOIN
                                        eyemarket_toko D        on D.id = C.id_toko
                                    LEFT JOIN
                                         eyemarket_kurir E      on E.id = A.id_kurir
                                    LEFT JOIN
                                        tbl_member G            on A.id_member =  G.id_member
                                    LEFT JOIN
                                        eyemarket_address H     on A.id_alamat =  H.id
                                    LEFT JOIN
                                        eyemarket_payment I     on A.id_tipe_bayar = I.id
                                    WHERE
                                        A.no_order = '$no_order'
                                    LIMIT
                                        1
                                        ")->row();
        return $query;
    }

    public function get_pesanan($id_member)
    {
        $query = $this->db->query(" SELECT
                                        A.*
                                    FROM
                                        eyemarket_order A
                                    WHERE
                                        md5(A.id_member) = '$id_member'
                                    ORDER BY
                                        A.id DESC
                                        ")->result_array();
        return $query;
    }

    function set_konfirmasi($objek)
    {
        $this->db->insert('eyemarket_konfirmasi', $objek);
        
        return $this->db->insert_id();
    }

    public function get_keranjang_invoice($id_order)
    { 
        $query = $this->db->query(" SELECT
                                        A.*,
                                        B.nama,
                                        B.title_slug,
                                        B.harga_sebelum,
                                        B.harga,
                                        B.diskon,
                                        B.berat,
                                        B.keterangan,
                                        C.nama as toko,
                                        F.nama as nama_rumah
                                    FROM
                                        eyemarket_keranjang A
                                    LEFT JOIN
                                        eyemarket_product B         on B.id_product = A.id_product
                                    LEFT JOIN
                                        eyemarket_toko C            on C.id = B.id_toko
                                    LEFT JOIN
                                        eyemarket_address F         on A.id_alamat =  F.id
                                    WHERE 
                                        A.id_order = '$id_order'
                                    ORDER BY
                                        A.id ASC
                                        ")->result_array();
        return $query;
    }
}