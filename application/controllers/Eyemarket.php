<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Eyemarket extends CI_Controller
{

    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
        $this->load->model('ajax/EyemarketMod');
        $this->load->model('query/MarketQueryMod','qumod');
        $member = @$this->session->userdata("member");
        $this->id_member = $member["id"];
        $this->username = $member["username"];
        $this->name = $member["name"];
    }

    function index()
    {
    if($_POST)
    {
        $this->load->view($this->__theme().'function');
        $fn = $_POST['fn'];
        
        $data = [];
        if(function_exists($fn))
        {
        $fn();
        } else {
        $fn = "__".$fn;
        $this->EyemarketMod->$fn();
        }
    } else {
        $data['kanal'] = 'eyemarkett';
        $data['content'] = 'eyemarket/home';
        
        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');
        
        $this->load->view($this->__theme().'template', $data);
    }
    }

    function detail($toko, $slug)
    {
        $data['slug'] = $slug;
        $data['kanal'] = 'eyemarket';
        $data['content'] = 'eyemarket/detail';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function keranjang($id_member)
    {
        $data['kanal'] = 'eyemarket';
        $data['content'] = 'eyemarket/cart';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function set_alamat($id_member)
    {
        $data['kanal'] = 'eyemarket';
        $data['content'] = 'eyemarket/address';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function set_kurir($id_member)
    {
        $data['kanal'] = 'eyemarket';
        $data['content'] = 'eyemarket/delivery';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function set_payment($id_member)
    {
        $data['kanal'] = 'eyemarket';
        $data['content'] = 'eyemarket/payment';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function review_pesanan($id_member)
    {
        $data['kanal'] = 'eyemarket';
        $data['content'] = 'eyemarket/review_order';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function user($id_member)
    {
        $data['kanal'] = 'eyemarket_user';
        $data['id_member'] = $id_member;
        $data['nama_lengkap'] = $this->name;
        $data["active"]     = "profile";

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $data['content'] = $this->load->view($this->__theme() . '/eyemarket/user',$data,TRUE);
        $this->load->view($this->__theme() . 'eyemarket/template_user', $data);
    }

    function pesanan($id_member)
    {
        $data['kanal'] = 'eyemarket_user';
        $data['id_member'] = $id_member;
        $data['nama_lengkap'] = $this->name;
        $data["active"]     = "pesanan";

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $data['content'] = $this->load->view($this->__theme() . '/eyemarket/orders',$data,TRUE);
        $this->load->view($this->__theme() . 'eyemarket/template_user', $data);
    }

    function konfirmasi($no_order)
    {
        $data['no_order'] = $no_order;
        
        $data['kanal'] = 'eyemarket_konf';
        $data['id_member'] = $this->id_member;
        $data['nama_lengkap'] = $this->name;
        $data["active"]     = "pesanan";

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $data['content'] = $this->load->view($this->__theme() . '/eyemarket/confirm',$data,TRUE);
        $this->load->view($this->__theme() . 'eyemarket/template_user', $data);
    }

    function invoice($no_order)
    {
        $data['id_member'] = $this->id_member;
        $data['nama_lengkap'] = $this->name;

        $data["model"] = $this->qumod->get_invoice($no_order);
        $data['cart'] = $this->qumod->get_keranjang_invoice($data['model']->id);

        $this->load->view($this->__theme() . 'eyemarket/invoice', $data);
    }

}