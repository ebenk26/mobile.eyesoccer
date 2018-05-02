<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyeprofile extends CI_Controller
{

    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
        $this->load->model('ajax/EyeprofileMod');
    }

    function index()
    {
        if ($_POST) {
            $this->load->view($this->__theme() . 'function');
            $fn = $_POST['fn'];

            $data = [];
            if (function_exists($fn)) {
                $fn();
            } else {
                $fn = "__" . $fn;
                $this->EyeprofileMod->$fn();
            }
        } else {
            $data['kanal'] = 'eyeprofile';
            $data['content'] = 'eyeprofile/home';

            $data['title'] = $this->config->item('meta_title');
            $data['meta_desc'] = $this->config->item('meta_desc');
            $data['meta_keyword'] = $this->config->item('meta_keyword');

            $this->load->view($this->__theme() . 'template', $data);
        }
    }

    function klub($slug = 'Liga Indonesia 1', $page = 1)
    {
        $data['slug'] = $slug;
        $data['kanal'] = 'eyeprofile';
        $data['content'] = 'eyeprofile/home';
        $data['slugliga'] = $this->session->userdata('pageliga');

        $data['event'] = 'Liga Indonesia 1';
        if ($slug = 'Liga Indonesia 1') {
            $data['event'] = 'LIGA 1 GOJEK 2018';
        }

        $this->session->set_userdata(array('pageklub' => $page, 'pageliga' => urldecode($slug)));

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function official($slug = null, $page = 1)
    {
        $data['kanal'] = 'eyeprofile';
        $data['content'] = 'eyeprofile/official';

        if ($slug == NULL) {
            $data['slug'] = "Liga Indonesia 1";
        } else {
            $data['slug'] = $slug;
        }

        $this->session->set_userdata(array('pageoffc' => $page));

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function official_detail($slug)
    {
        $data['slug'] = $slug;
        $data['kanal'] = 'eyeprofile';
        $data['content'] = 'eyeprofile/official_detail';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function klub_detail($slug = '')
    {
        $data['slug'] = $slug;
        $data['kanal'] = 'eyeprofile';
        $data['content'] = 'eyeprofile/klub_detail';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function pemain_detail($slug = '')
    {
        $data['slug'] = $slug;
        $data['kanal'] = 'eyeprofile';
        $data['content'] = 'eyeprofile/pemain_detail';

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function pemain($slug = 'Liga Indonesia 1', $page = 1)
    {

        $data['slug'] = $slug;
        $data['kanal'] = 'eyeprofile';
        $data['content'] = 'eyeprofile/pemain';
        $data['slugliga'] = $this->session->userdata('pageliga');

        $this->session->set_userdata(array('pagepemain' => $page));

        $data['title'] = $this->config->item('meta_title');
        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }
}
