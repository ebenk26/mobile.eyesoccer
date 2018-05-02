<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
        $this->load->model('ajax/HomeMod');
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
                $this->HomeMod->$fn();
            }
        } else {
            $data['content'] = 'home/home';
            $data['title'] = $this->config->item('meta_title');

            $data['kanal'] = 'home';

            $data['meta_desc'] = $this->config->item('meta_desc');
            $data['meta_keyword'] = $this->config->item('meta_keyword');

            $this->load->view($this->__theme() . 'template', $data);
        }
    }

    function tentang_kami()
    {
        $data['content'] = 'home/tentang_kami';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function tim_eyesoccer()
    {
        $data['content'] = 'home/tim_eyesoccer';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function pedoman_media_siber()
    {
        $data['content'] = 'home/pedoman_media_siber';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function panduan_komunitas()
    {
        $data['content'] = 'home/panduan_komunitas';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function kontak()
    {
        $data['content'] = 'home/kontak';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    function karir()
    {
        $data['content'] = 'home/karir';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }

    public function set_emot($id = null)
    {
        $date = date("Y-m-d H:i:s");
        $ip = $this->input->ip_address();
        $tipe = $_POST["type"];
        $tbl = $_POST["tbl"];
        $kanal = $_POST["kanal"];
        $sub_field = $_POST["sub_field"];
        $select_id = $_POST["select_id"];
        $table = $tbl;
        $field = "$sub_field$tipe";

        $cek_id = $this->HomeMod->get_id($select_id, $table, $id);
        $cek_emot = $this->HomeMod->cek_ip_view($kanal, $cek_id, $ip, $tipe);

        if ($cek_emot < 1) {
            $update_emot = $this->HomeMod->set_news_emot($tbl, $kanal, $cek_id, $field);

            $object = array(
                'visit_date' => $date,
                'type_visit' => $tipe,
                'place_visit' => $kanal,
                'place_id' => $cek_id,
                'session_ip' => $ip,
            );

            $set_tbl_view = $this->HomeMod->set_tbl_view($object);

            $get_jumlah_emot = $this->HomeMod->get_jumlah_emot($tbl, $cek_id, $field, $kanal);

            if ($tipe == "proud") {
                $html["html"] = $get_jumlah_emot->$field;
            } else
                if ($tipe == "smile") {
                    $html["html"] = $get_jumlah_emot->$field;
                } else
                    if ($tipe == "shock") {
                        $html["html"] = $get_jumlah_emot->$field;
                    } else
                        if ($tipe == "inspired") {
                            $html["html"] = $get_jumlah_emot->$field;
                        } else
                            if ($tipe == "happy") {
                                $html["html"] = $get_jumlah_emot->$field;
                            } else
                                if ($tipe == "sad") {
                                    $html["html"] = $get_jumlah_emot->$field;
                                } else
                                    if ($tipe == "fear") {
                                        $html["html"] = $get_jumlah_emot->$field;
                                    } else
                                        if ($tipe == "angry") {
                                            $html["html"] = $get_jumlah_emot->$field;
                                        } else
                                            if ($tipe == "fun") {
                                                $html["html"] = $get_jumlah_emot->$field;
                                            }

            $html["status"] = 1;

            echo json_encode($html);
        }
    }

    public function search()
    {
        $data['content'] = 'home/search';
        $data['title'] = $this->config->item('meta_title');

        $data['kanal'] = 'home';

        $data['meta_desc'] = $this->config->item('meta_desc');
        $data['meta_keyword'] = $this->config->item('meta_keyword');

        $this->load->view($this->__theme() . 'template', $data);
    }
}
