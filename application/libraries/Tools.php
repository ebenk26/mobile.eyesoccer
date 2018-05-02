<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tools
{

    var $query_string = '';
    var $command = '';

    const site_verify_url = 'https://www.google.com/recaptcha/api/siteverify';

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function __flashMessage($xm = '', $ajax = '', $opt = '')
    {
        if (isset($ajax) AND is_array($xm)) {
            if ($opt == '') {
                header('Content-Type: application/json');
                echo json_encode($xm);
            }
            exit;
        } else {
            $this->ci->session->set_userdata($xm);
            redirect($this->ci->input->post('rdc'));
        }
    }

    function __validError($set = '', $ajax = '')
    {
        $xm = array('xCss' => 'boxfailed', 'xMsg' => validation_errors());
        $this->__flashMessage($xm, $ajax);
    }

    function __checkCaptcha($nofif = '', $ajax = '')
    {
        if ($this->ci->session->userdata('capword') != $this->ci->input->post('capword')) {
            $xm = array('xCss' => 'boxfailed', 'xMsg' => $nofif->captcha);
            $this->__flashMessage($xm, $ajax);
        }
    }

    function __googleCaptcha($set = '', $nofif = '', $ajax = '')
    {
        if (isset($_POST['g-recaptcha-response'])) {
            $response = $_POST['g-recaptcha-response'];
            $remoteIp = (!empty($remoteIp)) ? $remoteIp : $this->ci->input->ip_address();

            $cap = json_decode($set->google_captcha);
            $secret = $cap->secret;

            $url = self::site_verify_url . '?secret=' . $secret . '&remoteip=' . $remoteIp . '&response=' . $response;
            $getResponse = file_get_contents($url);;

            $responses = json_decode($getResponse, true);
            if ($responses["success"] == false) {
                $xm = array('xCss' => 'boxfailed', 'xMsg' => $nofif->wrong_captcha);
                $this->__flashMessage($xm, $ajax);
            }

            /*$cap = json_decode($set->google_captcha);
            $secret = $cap->secret;
            $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

            if ($response["success"] == false) {
            $xm = array('xCss' => 'boxfailed', 'xMsg' => $nofif->wrong_captcha);
            $this->__flashMessage($xm, $ajax);
            }*/
        } else {
            $xm = array('xCss' => 'boxfailed', 'xMsg' => $nofif->empty_captcha);
            $this->__flashMessage($xm, $ajax);
        }
    }

    function __actError($opt = array(), $set = '', $ajax = '')
    {
        $xm = $this->ci->validation->error_message($opt);
        $this->__flashMessage($xm, $ajax, true);
    }

    function __notif($type, $lang)
    {
        $set = $this->ci->catalog->get_notif(array('notif_type' => $type, 'lang_code' => $lang, 'row' => true));
        return $set;
    }

    function __setting()
    {
        $set = $this->ci->catalog->get_setting(array('setting_id' => '1', 'row' => true));
        return $set;
    }

    function __themes()
    {
        $f = $this->ci->db->query("SELECT themes_folder FROM tb_themes WHERE is_active='1'")->row();
        return $f;
    }

    function __email($opt = array(), $set = '')
    {
        if ($set) {
            $this->ci->library->config_email($set->smtp_host, $set->smtp_port, $set->smtp_user, $set->smtp_pass);

            $this->ci->email->from($set->web_mail_noreply, $set->web_name);
            if (isset($opt['reply_to'])) {
                $this->ci->email->reply_to($opt['from'], $opt['name']);
            }
            $this->ci->email->to($opt['to']);
            $this->ci->email->subject($set->web_name . ' | ' . $opt['subject']);
            $this->ci->email->message($opt['message']);
            $this->ci->email->send();
        }
    }

    function __visitor($direct)
    {
        // Statistic
        $stat_ip = $_SERVER['REMOTE_ADDR'];
        $stat_link = (isset($direct)) ? $direct : '';
        $stat_online = time();
        $st = $this->ci->catalog->get_stats(array('is_hits' => true, 'stat_ip' => $stat_ip, 'stat_link' => $stat_link, 'stat_indate' => date('Y-m-d'), 'row' => true));

        if ($st) {
            $this->ci->action->update(array('table' => 'tb_statistic',
                'update' => array('stat_hits' => $st->stat_hits + 1, 'stat_online' => $stat_online, 'stat_update' => date('Y-m-d H:i:s')),
                'where' => array('stat_ip' => $stat_ip, 'stat_link' => $stat_link, 'DATE(stat_indate)' => date('Y-m-d'))));
        } else {
            $this->ci->action->insert(array('table' => 'tb_statistic',
                'insert' => array('stat_ip' => $stat_ip,
                    'stat_indate' => date('Y-m-d H:i:s'),
                    'stat_update' => date('Y-m-d H:i:s'),
                    'stat_hits' => 1,
                    'stat_link' => $stat_link,
                    'stat_online' => $stat_online)));
        }
    }

    function __currency()
    {
        $country = (COUNTRY != '') ? COUNTRY : '';
        $query = array('iso_code' => $country, 'row' => true);
        if ($country == '') {
            $query = array('is_default' => 1, 'row' => true);
        }

        $curr = $this->ci->catalog->get_pr_currency($query);
        return $curr;
    }

    function __enddate($dt)
    {
        $total_days = '';
        if ($dt) {
            $start_date = date('Y-m-d');
            $end_date = date('Y-m-d', strtotime($dt));
            $total_days = (round(abs(strtotime($end_date) - strtotime($start_date)) / 86400, 0) + 1) - 1;
        }

        return $total_days;
    }

}
