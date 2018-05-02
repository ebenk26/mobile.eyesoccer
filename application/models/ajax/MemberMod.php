<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberMod extends CI_Model
{

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
    }

    function __loginact()
    {
        $refer = $this->input->get('from');
        $refer = ($refer === null || $refer === '' ? 'member' : str_replace('-', '/', $refer));
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $query = array('email' => $email, 'password' => $pass);
        $res = $this->excurl->remoteCall($this->__xurl() . 'login', $this->__xkey(), $query);
        $res = json_decode($res);

        $arr = $this->library->errorMessage($res);

        if ($res->status == 'Success') {
            #echo $res->data->username;
            $v = $res->data;
            $sess = array(
                'id' => $v->id,
                'username' => $v->username,
                'fullname' => $v->fullname,
                'name' => $v->name,
                'url_pic' => $v->url_pic,
                'url' => $v->url,
                'active' => $v->active,
                'verification' => $v->verification
            );
            $this->session->member = $sess;

            $arr = array('xDirect' => base_url() . $refer, 'xCss' => 'boxsuccess', 'xMsg' => $res->message, 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __regact()
    {
        $name = $this->input->post('name');
        $uname = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $cpass = $this->input->post('passconfirm');
        $query = array(
            'name' => $name,
            'username' => $uname,
            'email' => $email,
            'password' => $pass,
            'passconfirm' => $cpass);
        $res = $this->excurl->remoteCall($this->__xurl() . 'register', $this->__xkey(), $query);
        $res = json_decode($res);

        $arr = $this->library->errorMessage($res);

        if ($res->status == 'Success') {
            $arr = array('xDirect' => base_url(), 'xCss' => 'boxsuccess', 'xMsg' => 'Silahkan Cek Email <br> Untuk aktifasi akun anda', 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __forgotact()
    {
        $email = $this->input->post('email');
        $query = array('email' => $email);
        $res = $this->excurl->remoteCall($this->__xurl() . 'forget-password', $this->__xkey(), $query);
        $res = json_decode($res);

        if ($res->status == 'Success') {
            $arr = array('xCss' => 'boxsuccess', 'xMsg' => 'Berhasil Reset password silahkan cek email kamu', 'xAlert' => true);
        } else {
            $arr = array('xCss' => 'boxfailed', 'xMsg' => 'Email kamu  tidak ditemukan ', 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __profile()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $data['member'] = $this->excurl->reqCurlapp('me', $query);

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/ajax/profile', $data, true);

        $data = array('xClass' => 'reqprofile', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __profileact()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        if ($member) {
            $dt = array('username' => $member->username, 'name' => $this->input->post('name'), 'nickname' => $this->input->post('nickname'),
                        'address' => $this->input->post('address'), 'phone' => $this->input->post('phone'), 'about' => $this->input->post('about'));

            $res = $this->excurl->reqCurlapp('changes-profile', $dt, ['fupload']);
            $msg = 'Data berhasil disimpan';

            $arr = $this->library->errorMessage($res);

            if ($res->status == 'Success') {
                $v = $res->data[0];
                $sess = array(
                    'id' => $v->id,
                    'username' => $v->username,
                    'fullname' => $v->fullname,
                    'name' => $v->name,
                    'url_pic' => $v->url_pic,
                    'url' => $v->url
                    /*'active' => $v->active,
                    'verification' => $v->verification*/
                );
                $this->session->member = $sess;

                $arr = array('xDirect' => base_url('member/profile'), 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
            }
        } else {
            $arr = array('xDirect' => base_url('member'));
        }

        $this->tools->__flashMessage($arr);
    }

    function __password()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        if ($member) {
            $dt = array('username' => $member->username, 'oldpass' => $this->input->post('oldpass'),
                        'newpass' => $this->input->post('newpass'), 'confirmpass' => $this->input->post('confirmpass'));

            $res = $this->excurl->reqCurlapp('changes-password', $dt);
            $msg = 'Data berhasil disimpan';

            $arr = $this->library->errorMessage($res);

            if ($res->status == 'Success') {
                $arr = array('xDirect' => base_url('member/password'), 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
            }
        } else {
            $arr = array('xDirect' => base_url('member'));
        }

        $this->tools->__flashMessage($arr);
    }

    function __infoklub()
    {
        $param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = $res->data;

        $query = array('id_club' => ($v[0]->id_club == 0 ? 1128 : $v[0]->id_club), 'detail' => true);
        $data['klubdetail'] = $this->excurl->reqCurlback('profile-club', $query);
        $val = $data['klubdetail']->data;
		
        $queryprov = array();
        $data['provinsilist'] = $this->excurl->reqCurlback('provinsi', $queryprov);
        $val = $data['provinsilist']->data;
        $data['provinsi'] = $val;
		
		$querykab = array('provinsi' => $data['klubdetail']->data[0]->id_provinsi);
        $data['kabupatenlist'] = $this->excurl->reqCurlback('kabupaten', $querykab);
        $val = $data['kabupatenlist']->data;
        $data['kabupaten'] = $val;

        $html = $this->load->view($this->__theme() . 'member/club/ajax/infoklub', $data, true);

        $data = array('xClass' => 'reqinfoklub', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __regclub()
    {
        $name = $this->input->post('name');
        $namealias = $this->input->post('namealias');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $ses = $this->session->userdata('member');

        $query = array( 'uid' => $ses['id'], 'name' => $name, 'namealias' => $namealias, 'address' => $address, 'phone' => $phone);
        $res = $this->excurl->reqCurlapp('register-club', $query, array('legal_pt', 'legal_kemenham', 'legal_npwp', 'legal_dirut'));

        $arr = $this->library->errorMessage($res);

        if ($res->status == 'Success') {
            $message = "Registrasi Club Berhasil. Silahkan Cek Email Anda";
            $arr = array('xDirect' => base_url() . 'member', 'xCss' => 'boxsuccess', 'xMsg' => $message, 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __listclub()
    {
        $text = $this->input->post('club');

        $query = array('page' => '', 'limit' => '', 'search' => $text, 'competition' => 'Liga Usia Muda');
        $clubs = $this->excurl->reqCurlapp('profile-club', $query);
        $data['club'] = $clubs->data;

        $html = $this->load->view($this->__theme() . 'member/player/ajax/listclub', $data, true);
        $data = array('xClass' => 'showclub', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __regplayer()
    {
        $slug = $this->input->post('slug');
        $name = $this->input->post('name');
        $no_kk = $this->input->post('no_kk');
        $no_ktp = $this->input->post('no_ktp');

        $sesi = $this->session->userdata('member');

        $query = array(
            'uid' => $sesi['id'],
            'club' => $slug,
            'name' => $name,
            'no_kk' => $no_kk,
            'no_ktp' => $no_ktp,
        );
        $res = $this->excurl->reqCurlapp('register-player', $query, array('file_kk', 'file_ktp', 'file_akte', 'file_ijazah', 'file_passport', 'file_bukurek', 'file_ibukandung', 'file_srtrekssb'));
        // var_dump($res);exit();
        $arr = $this->library->errorMessage($res);

        if ($res->status == 'Success') {
            $message = "Registrasi Player Berhasil. Silahkan Cek Email Anda";
            $arr = array('xDirect' => base_url() . 'member', 'xCss' => 'boxsuccess', 'xMsg' => $message, 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __editclub()
    {
        $id_club = $this->input->post('id_club');
        $name = $this->input->post('name');
        $nickname = $this->input->post('nickname');
        $address = $this->input->post('address');
        $description = $this->input->post('description');
        $establish_date = $this->input->post('establish_date');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $owner = $this->input->post('owner');
        $coach = $this->input->post('coach');
        $manager = $this->input->post('manager');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $slug = $this->input->post('slug');
        $supporter_name = $this->input->post('supporter_name');
        $training_schedule = $this->input->post('training_schedule');
		
		$query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $query = [];
        if ($member->id_club > 0) {
            $query = array('id_club' => $id_club, 'name' => $name, 'nickname' => $nickname, 'address' => $address, 'description' => $description,
                           'establish_date' => date('Y-m-d', strtotime($establish_date)), 'phone' => $phone, 'email' => $email, 'owner' => $owner,
                           'coach' => $coach, 'provinsi' => $provinsi, 'kabupaten' => $kabupaten, 'manager' => $manager, 'slug' => $slug,
                           'supporter_name' => $supporter_name, 'training_schedule' => $training_schedule);
        }

        $res = $this->excurl->reqCurlapp('edit-club', $query, array('logo', 'legal_pt', 'legal_kemenham', 'legal_npwp', 'legal_dirut'));
        $arr = $this->library->errorMessage($res);

        if ($res->status == 'Success') {
            $message = "Data berhasil disimpan.";
            $arr = array('xDirect' => base_url('member/klub'), 'xCss' => 'boxsuccess', 'xMsg' => $message, 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __player()
    {
        $this->library->backnext('pageplayer', 'pagetotalplayer');

        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $club = $this->excurl->reqCurlback('profile-club', ['id_club' => $member->id_club]);
        $data['club'] = ($club) ? $club->data[0] : '';

        $query = array('page' => $this->session->userdata('pageplayer'), 'limit' => 20, 'id_club' => $member->id_club,
                       'sortby' => 'a.id_player', 'sortdir' => 'desc');

        $data['player'] = $this->excurl->reqCurlapp('profile', $query);
        $data['playercount'] = $this->excurl->reqCurlapp('profile', array_merge($query, ['count' => true]));

        $html = $this->load->view($this->__theme() . 'member/player/ajax/player', $data, true);

        $data = array('xClass' => 'reqplayer', 'xHtml' => $html, 'xUrlhash' => base_url() . 'member/player/' . $this->session->userdata('pageplayer'));
        $this->tools->__flashMessage($data);
    }

    function __playerinfo()
    {
        $query = array('id_player' => $this->input->post('uid'), 'detail' => true, 'md5' => true);
        $data['player'] = ($this->input->post('uid') != '') ? $this->excurl->reqCurlback('profile',  $query) : '';
        $data['foot'] = $this->excurl->reqCurlback('player-foot');
        $data['level'] = $this->excurl->reqCurlback('player-level');
        $data['position'] = $this->excurl->reqCurlback('player-position');

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/player/ajax/playerinfo', $data, true);

        $data = array('xClass' => 'reqplayerinfo', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __playeract()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $birthdate = $this->input->post('birth_date');
        $birthdate = ($birthdate) ? date('Y-m-d', strtotime($this->input->post('birth_date'))) : '';

        $dt = [];
        if ($this->input->post('act') < 2) {
            $dt = array('name' => $this->input->post('name'), 'nickname' => $this->input->post('nickname'), 'description' => $this->input->post('description'),
                        'birth_place' => $this->input->post('birth_place'), 'birth_date' => $birthdate,
                        'phone' => $this->input->post('phone'), 'mobile' => $this->input->post('mobile'), 'email' => $this->input->post('email'),
                        'height' => $this->input->post('height'), 'weight' => $this->input->post('weight'), 'gender' => $this->input->post('gender'),
                        'nationality' => $this->input->post('nationality'), 'position_a' => $this->input->post('position_a'), 'position_b' => $this->input->post('position_b'),
                        'back_number' => $this->input->post('back_number'), 'foot' => $this->input->post('foot'), 'fav_club' => $this->input->post('fav_club'),
                        'fav_player' => $this->input->post('back_number'), 'fav_coach' => $this->input->post('foot'),
                        'father' => $this->input->post('father'), 'mother' => $this->input->post('mother'));
        }

        if ($this->input->post('act') > 0) {
            if ($member AND $member->id_player > 0 OR $member->id_club > 0) {
                if ($member->id_club > 0) {
                    $slug = $this->input->post('uid');
                    $query = array('url' => $slug, 'detail' => true);
                    $player = $this->excurl->reqCurlback('profile',  $query);
                    $player = ($player) ? $player->data[0] : '';
                } else {
                    $query = array('id_player' => $member->id_player, 'detail' => true);
                    $player = $this->excurl->reqCurlback('profile',  $query);
                    $player = ($player) ? $player->data[0] : '';
                    $slug = $player->slug;
                }

                if ($this->input->post('act') < 2) {
                    $dt = array_merge($dt, ['slug' => $slug, 'level' => ($this->input->post('level') != '') ? $this->input->post('level') : $player->id_level,
                                            'contract_start' => ($this->input->post('contract_start') != '') ? $this->input->post('contract_start') : $player->contract_start,
                                            'contract_end' => ($this->input->post('contract_end') != '') ? $this->input->post('contract_end') : $player->contract_end]);

                    $res = $this->excurl->reqCurlapp('edit-player', $dt, ['photo']);
                    $msg = 'Data berhasil disimpan';
                } else {
                    $dt = array_merge($dt, ['slug' => $slug]);
                    $res = $this->excurl->reqCurlapp('del-player', $dt);
                    $msg = 'Data berhasil dihapus';
                }

                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player'), 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        } else {
            if ($member AND $member->id_club > 0) {
                $query = array('id_club' => $member->id_club);
                $club = $this->excurl->reqCurlback('profile-club',  $query);
                $club = ($club) ? $club->data[0] : '';

                $dt = array_merge($dt, ['slug' => $club->slug, 'level' => $this->input->post('level'),
                                        'contract_start' => $this->input->post('contract_start'),
                                        'contract_end' => $this->input->post('contract_end')]);

                if ($this->input->post('username') != '' AND $this->input->post('password') != '') {
                    $dt = array_merge($dt, ['register' => true, 'username' => $this->input->post('username'), 'password' => $this->input->post('password')]);
                }

                $res = $this->excurl->reqCurlapp('add-player', $dt, ['photo']);
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player'), 'xCss' => 'boxsuccess', 'xMsg' => 'Data berhasil disimpan', 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        }

        $this->tools->__flashMessage($arr);
    }

    function __playerkarir()
    {
        $this->library->backnext('pageplayerkarir', 'pagetotalplayerkarir');

        $query = array('id_player' => $this->input->post('uid'), 'md5' => true);
        $player = $this->excurl->reqCurlback('profile', $query);
        $data['player'] = ($player) ? $player->data[0] : '';

        $query = array('page' => $this->session->userdata('pageplayerkarir'), 'limit' => 20, 'id_player' => $data['player']->id_player,
                       'sortby' => 'a.id_career', 'sortdir' => 'desc');

        $data['career'] = $this->excurl->reqCurlback('player-career', $query);
        $data['careercount'] = $this->excurl->reqCurlapp('player-career', array_merge($query, ['count' => true]));

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/player/ajax/karir', $data, true);

        $data = array('xClass' => 'reqplayerkarir', 'xHtml' => $html,
                      'xUrlhash' => base_url() . 'member/player/' . $this->session->userdata('pageplayerkarir') . '/?tab=karir&uid=' . $this->input->post('uid'));
        $this->tools->__flashMessage($data);
    }

    function __playerkarirform()
    {
        $query = array('id_player' => $this->input->post('uid'), 'md5' => true);
        $player = $this->excurl->reqCurlback('profile', $query);
        $data['player'] = ($player) ? $player->data[0] : '';

        $query = array('id_career' => $this->input->post('act'), 'detail' => true);
        $data['career'] = ($this->input->post('act') != 'add') ? $this->excurl->reqCurlback('player-career', $query) : '';

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/player/ajax/karirform', $data, true);

        $data = array('xClass' => 'reqplayerkarirform', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __playerkariract()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        if ($member->id_club > 0) {
            $slug = $this->input->post('uid');
        } else {
            $query = array('id_player' => $member->id_player, 'detail' => true);
            $player = $this->excurl->reqCurlback('profile',  $query);
            $player = ($player) ? $player->data[0] : '';
            $slug = $player->slug;
        }

        $dt = [];
        if ($this->input->post('act') < 2) {
            $dt = array('slug' => $slug, 'month' => $this->input->post('month'), 'year' => $this->input->post('year'), 'club' => $this->input->post('club'),
                        'tournament' => $this->input->post('tournament'), 'country' => $this->input->post('country'), 'number_of_play' => $this->input->post('number_of_play'),
                        'back_number' => $this->input->post('back_number'), 'coach' => $this->input->post('coach'), 'timnas' => $this->input->post('timnas'));
        }

        if ($this->input->post('act') > 0) {
            if ($member AND $member->id_player > 0 OR $member->id_club > 0) {
                $dt = array_merge($dt, ['id' => $this->input->post('id')]);

                if ($this->input->post('act') < 2) {
                    $res = $this->excurl->reqCurlapp('edit-career-player', $dt);
                    $msg = 'Data berhasil disimpan';
                } else {
                    $dt = array_merge($dt, ['slug' => $slug]);
                    $res = $this->excurl->reqCurlapp('del-career-player', $dt);
                    $msg = 'Data berhasil dihapus';
                }
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player/?tab=karir&uid=' . $this->input->post('xid')),
                                 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        } else {
            if ($member AND $member->id_club > 0) {
                $res = $this->excurl->reqCurlapp('add-career-player', $dt);
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player/?tab=karir&uid=' . $this->input->post('xid')),
                                 'xCss' => 'boxsuccess', 'xMsg' => 'Data berhasil disimpan', 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        }

        $this->tools->__flashMessage($arr);
    }

    function __playerachive()
    {
        $this->library->backnext('pageplayerachive', 'pagetotalplayerachive');

        $query = array('id_player' => $this->input->post('uid'), 'md5' => true);
        $player = $this->excurl->reqCurlback('profile', $query);
        $data['player'] = ($player) ? $player->data[0] : '';

        $query = array('page' => $this->session->userdata('pageplayerachive'), 'limit' => 20, 'id_player' => $data['player']->id_player,
                       'sortby' => 'a.id_achievement', 'sortdir' => 'desc');

        $data['achive'] = $this->excurl->reqCurlback('player-achievement', $query);
        $data['achivecount'] = $this->excurl->reqCurlapp('player-achievement', array_merge($query, ['count' => true]));

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/player/ajax/penghargaan', $data, true);

        $data = array('xClass' => 'reqplayerachive', 'xHtml' => $html,
                      'xUrlhash' => base_url() . 'member/player/' . $this->session->userdata('pageplayerachive') . '/?tab=penghargaan&uid=' . $this->input->post('uid'));
        $this->tools->__flashMessage($data);
    }

    function __playerachiveform()
    {
        $query = array('id_player' => $this->input->post('uid'), 'md5' => true);
        $player = $this->excurl->reqCurlback('profile', $query);
        $data['player'] = ($player) ? $player->data[0] : '';

        $query = array('id_achievement' => $this->input->post('act'), 'detail' => true);
        $data['achive'] = ($this->input->post('act') != 'add') ? $this->excurl->reqCurlback('player-achievement', $query) : '';

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/player/ajax/penghargaanform', $data, true);

        $data = array('xClass' => 'reqplayerachiveform', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __playerachiveact()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        if ($member->id_club > 0) {
            $slug = $this->input->post('uid');
        } else {
            $query = array('id_player' => $member->id_player, 'detail' => true);
            $player = $this->excurl->reqCurlback('profile',  $query);
            $player = ($player) ? $player->data[0] : '';
            $slug = $player->slug;
        }

        $dt = [];
        if ($this->input->post('act') < 2) {
            $dt = array('slug' => $slug, 'year' => $this->input->post('year'), 'tournament' => $this->input->post('tournament'),
                        'country' => $this->input->post('country'), 'rank' => $this->input->post('rank'), 'appreciation' => $this->input->post('appreciation'));
        }

        if ($this->input->post('act') > 0) {
            if ($member AND $member->id_player > 0 OR $member->id_club > 0) {
                $dt = array_merge($dt, ['id' => $this->input->post('id')]);

                if ($this->input->post('act') < 2) {
                    $res = $this->excurl->reqCurlapp('edit-achieve-player', $dt);
                    $msg = 'Data berhasil disimpan';
                } else {
                    $dt = array_merge($dt, ['slug' => $slug]);
                    $res = $this->excurl->reqCurlapp('del-achieve-player', $dt);
                    $msg = 'Data berhasil dihapus';
                }
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player/?tab=penghargaan&uid=' . $this->input->post('xid')),
                        'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        } else {
            if ($member AND $member->id_club > 0) {
                $res = $this->excurl->reqCurlapp('add-achieve-player', $dt);
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player/?tab=penghargaan&uid=' . $this->input->post('xid')),
                        'xCss' => 'boxsuccess', 'xMsg' => 'Data berhasil disimpan', 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        }

        $this->tools->__flashMessage($arr);
    }

    function __playergallery()
    {
        $this->library->backnext('pageplayergallery', 'pagetotalplayergallery');

        $query = array('id_player' => $this->input->post('uid'), 'md5' => true);
        $player = $this->excurl->reqCurlback('profile', $query);
        $data['player'] = ($player) ? $player->data[0] : '';

        $query = array('page' => $this->session->userdata('pageplayergallery'), 'limit' => 20, 'player' => $data['player']->id_player,
                       'sortby' => 'a.id_gallery', 'sortdir' => 'desc');

        $data['gallery'] = $this->excurl->reqCurlapp('list-pic', $query);
        $data['gallerycount'] = $this->excurl->reqCurlapp('list-pic', array_merge($query, ['count' => true]));

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/player/ajax/galeri', $data, true);

        $data = array('xClass' => 'reqplayergallery', 'xHtml' => $html,
                      'xUrlhash' => base_url() . 'member/player/' . $this->session->userdata('pageplayergallery') . '/?tab=galeri&uid=' . $this->input->post('uid'));
        $this->tools->__flashMessage($data);
    }

    function __playergalleryact()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        if ($member->id_club > 0) {
            $slug = $this->input->post('uid');
        } else {
            $query = array('id_player' => $member->id_player, 'detail' => true);
            $player = $this->excurl->reqCurlback('profile',  $query);
            $player = ($player) ? $player->data[0] : '';
            $slug = $player->slug;
        }

        if ($this->input->post('act') > 0) {
            if ($member AND $member->id_player > 0 OR $member->id_club > 0) {
                $dt = array('player' => $slug);

                if ($this->input->post('act') < 2) {
                    $res = $this->excurl->reqCurlapp('upload-pic', $dt, ['fupload']);
                    $msg = 'Gambar berhasil disimpan';
                } else {
                    $dt = array_merge($dt, ['id' => $this->input->post('id')]);
                    $res = $this->excurl->reqCurlapp('delete-pic', $dt);
                    $msg = 'Gambar berhasil dihapus';
                }
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/player/?tab=galeri&uid=' . $this->input->post('xid')),
                                 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        } else {
            $arr = array('xDirect' => base_url('member'));
        }

        $this->tools->__flashMessage($arr);
    }

	function __get_kabupaten()
    { 
		$querykab = array('provinsi'=>$this->input->post('provinsi'));
        $data['kabupatenlist'] = $this->excurl->reqCurlapp('kabupaten', $querykab);
        $html = $this->load->view($this->__theme().'member/club/ajax/kabupaten',$data,true);

        $data = array('xSplit' => true, 'xData' => array($this->input->post('dest') => $html));
        $this->tools->__flashMessage($data);
    }

    function __clubofficial()
    {
        $this->library->backnext('pageclubofficial', 'pagetotalclubofficial');

        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $club = $this->excurl->reqCurlback('profile-club', ['id_club' => $member->id_club]);
        $data['club'] = ($club) ? $club->data[0] : '';

        $query = array('page' => $this->session->userdata('pageclubofficial'), 'limit' => 20, 'id_club' => $member->id_club,
                       'sortby' => 'a.id_official', 'sortdir' => 'desc');

        $data['official'] = $this->excurl->reqCurlback('profile-official', $query);
        $data['officialcount'] = $this->excurl->reqCurlapp('profile-official', array_merge($query, ['count' => true]));

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/club/ajax/official', $data, true);

        $data = array('xClass' => 'reqclubofficial', 'xHtml' => $html, 'xUrlhash' => base_url() . 'member/official/' . $this->session->userdata('pageclubofficial'));
        $this->tools->__flashMessage($data);
    }

    function __clubofficialform()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $query = array('id_official' => $this->input->post('act'), 'detail' => true);
        $data['official'] = ($this->input->post('act') != 'add') ? $this->excurl->reqCurlback('profile-official', $query) : '';

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/club/ajax/officialform', $data, true);

        $data = array('xClass' => 'reqclubofficialform', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __clubofficialact()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $query = array('id_club' => $member->id_club);
        $club = $this->excurl->reqCurlback('profile-club',  $query);
        $club = ($club) ? $club->data[0] : '';

        $birthdate = $this->input->post('birth_date');
        $birthdate = ($birthdate) ? date('Y-m-d', strtotime($this->input->post('birth_date'))) : '';

        $dt = [];
        if ($this->input->post('act') < 2) {
            $dt = array('slug' => $club->slug, 'name' => $this->input->post('name'), 'position' => $this->input->post('position'),
                        'nationality' => $this->input->post('nationality'), 'license' => $this->input->post('license'), 'no_identity' => $this->input->post('no_identity'),
                        'birth_place' => $this->input->post('birth_place'), 'birth_date' => $birthdate, 'address' => $this->input->post('address'),
                        'phone' => $this->input->post('phone'), 'email' => $this->input->post('email'), 'contact' => $this->input->post('contact'),
                        'contract' => $this->input->post('contract'));
        }

        if ($this->input->post('act') > 0) {
            if ($member AND $member->id_club > 0) {
                $dt = array_merge($dt, ['id' => $this->input->post('id')]);

                if ($this->input->post('act') < 2) {
                    $res = $this->excurl->reqCurlapp('edit-official-club', $dt, ['photo']);
                    $msg = 'Data berhasil disimpan';
                } else {
                    $dt = array_merge($dt, ['slug' => $club->slug]);
                    $res = $this->excurl->reqCurlapp('del-official-club', $dt);
                    $msg = 'Data berhasil dihapus';
                }
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/official'), 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        } else {
            if ($member AND $member->id_club > 0) {
                $res = $this->excurl->reqCurlapp('add-official-club', $dt, ['photo']);
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/official'), 'xCss' => 'boxsuccess', 'xMsg' => 'Data berhasil disimpan', 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        }

        $this->tools->__flashMessage($arr);
    }

    function __clubcareer()
    {
        $this->library->backnext('pageclubcareer', 'pagetotalclubcareer');

        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $club = $this->excurl->reqCurlback('profile-club', ['id_club' => $member->id_club]);
        $data['club'] = ($club) ? $club->data[0] : '';

        $query = array('page' => $this->session->userdata('pageclubcareer'), 'limit' => 20, 'id_club' => $member->id_club,
                       'sortby' => 'a.id_career', 'sortdir' => 'desc');

        $data['career'] = $this->excurl->reqCurlback('club-career', $query);
        $data['careercount'] = $this->excurl->reqCurlapp('club-career', array_merge($query, ['count' => true]));

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/club/ajax/karir', $data, true);

        $data = array('xClass' => 'reqclubcareer', 'xHtml' => $html, 'xUrlhash' => base_url() . 'member/karir/' . $this->session->userdata('pageclubcareer'));
        $this->tools->__flashMessage($data);
    }

    function __clubcareerform()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $query = array('id_career' => $this->input->post('act'), 'detail' => true);
        $data['career'] = ($this->input->post('act') != 'add') ? $this->excurl->reqCurlback('club-career', $query) : '';

        $data['folder'] = $this->config->item('themes');
        $html = $this->load->view($this->__theme() . 'member/club/ajax/karirform', $data, true);

        $data = array('xClass' => 'reqclubcareerform', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __clubcareeract()
    {
        $query = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $member = $this->excurl->reqCurlapp('me', $query);
        $member = ($member) ? $member->data[0] : '';

        $query = array('id_club' => $member->id_club);
        $club = $this->excurl->reqCurlback('profile-club',  $query);
        $club = ($club) ? $club->data[0] : '';

        $dt = [];
        if ($this->input->post('act') < 2) {
            $dt = array('slug' => $club->slug, 'month' => $this->input->post('month'), 'year' => $this->input->post('year'),
                        'tournament' => $this->input->post('tournament'), 'rank' => $this->input->post('rank'),
                        'coach' => $this->input->post('coach'));
        }

        if ($this->input->post('act') > 0) {
            if ($member AND $member->id_club > 0) {
                $dt = array_merge($dt, ['id' => $this->input->post('id')]);

                if ($this->input->post('act') < 2) {
                    $res = $this->excurl->reqCurlapp('edit-career-club', $dt);
                    $msg = 'Data berhasil disimpan';
                } else {
                    $dt = array_merge($dt, ['slug' => $club->slug]);
                    $res = $this->excurl->reqCurlapp('del-career-club', $dt);
                    $msg = 'Data berhasil dihapus';
                }
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/karir'), 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        } else {
            if ($member AND $member->id_club > 0) {
                $res = $this->excurl->reqCurlapp('add-career-club', $dt);
                $arr = $this->library->errorMessage($res);

                if ($res->status == 'Success') {
                    $arr = array('xDirect' => base_url('member/karir'), 'xCss' => 'boxsuccess', 'xMsg' => 'Data berhasil disimpan', 'xAlert' => true);
                }
            } else {
                $arr = array('xDirect' => base_url('member'));
            }
        }

        $this->tools->__flashMessage($arr);
    }

	function __galeri()
    {
        $param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = $res->data;

        $query = array('club' => $v[0]->id_club, 'sortby' => 'a.id_gallery', 'sortdir' => 'desc');
        $data['galerilist'] = $this->excurl->reqCurlapp('list-pic', $query);

        $html = $this->load->view($this->__theme() . 'member/club/ajax/galeri', $data, true);

        $data = array('xClass' => 'reqgaleri', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
	
	function __uploadgalericlub()
    {
        $param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = ($res) ? $res->data[0] : '';

		$query = array('id_club' => $id_club = $v->id_club, 'detail' => true);
		$club = $this->excurl->reqCurlback('profile-club', $query);
        $club = ($club) ? $club->data[0] : '';

		$query = array('club' => $club->slug);
        $res = $this->excurl->reqCurlapp('upload-pic', $query, ['fupload']);

        $arr = $this->library->errorMessage($res);
		if ($res->status == 'Success') {
            $arr = array('xDirect' => base_url() . 'member/galeri', 'xCss' => 'boxsuccess', 'xMsg' => 'Upload Galeri Berhasil.', 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }
	
	function __deletegalericlub()
    {
		$param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = ($res) ? $res->data[0] : '';

		$query = array('id_club' => $id_club = $v->id_club, 'detail' => true);
        $club = $this->excurl->reqCurlback('profile-club', $query);
        $club = ($club) ? $club->data[0] : '';

		$dt = array('club' => $club->slug, 'id' => $this->input->post('uid'));
		$res = $this->excurl->reqCurlapp('delete-pic', $dt);

        $arr = $this->library->errorMessage($res);
        if ($res->status == 'Success') {
            $arr = array('xDirect' => base_url() . 'member/galeri', 'xCss' => 'boxsuccess', 'xMsg' => 'Gambar berhasil dihapus.', 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __verify()
    {
        $this->library->backnext('pageverify', 'pagetotalverify');

        $param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = $res->data;

        $club = $this->excurl->reqCurlback('profile-club', ['id_club' => $v[0]->id_club]);
        $data['club'] = ($club) ? $club->data[0] : '';
        $slug = $data['club']->slug;

        $query = array('page' => $this->session->userdata('pageverify'), 'limit' => 20, 'club' => $slug,
                       'active' => 'false', 'sortby' => 'a.id_register', 'sortdir' => 'desc');
        $data['verify'] = $this->excurl->reqCurlapp('reglist-player', $query);
        $data['verifycount'] = $this->excurl->reqCurlapp('reglist-player', array_merge($query, ['count' => true]));
        
        $html = $this->load->view($this->__theme().'member/club/ajax/verifikasi', $data, true);
        $data = array('xClass' => 'reqverify', 'xHtml' => $html, 'xUrlhash' => base_url() . 'member/verifikasi/' . $this->session->userdata('pageverify'));
        $this->tools->__flashMessage($data);;
    }

    function __verifydetail()
    {
        $param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = $res->data;

        $club = $this->excurl->reqCurlapp('profile-club', ['id_club' => $v[0]->id_club])->data;
        $slug = $club[0]->slug;

        $query = array('page' => '', 'limit' => '', 'club' => $slug, 'id_register' => $this->input->post('act'));
        $data['verify'] = $this->excurl->reqCurlapp('reglist-player', $query)->data;

        $html = $this->load->view($this->__theme().'member/club/ajax/verifikasiform', $data, true);
        $data = array('xClass'=> 'reqverify','xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __verifyapp()
    {
        $id_reg = $this->input->post('id_reg');
        $query  = array('id' => $id_reg, 'player' => '');
        $res = $this->excurl->reqCurlapp('verify-player', $query);
        $arr = $this->library->errorMessage($res);

        if ($res->status == 'Success') {
            $msg = 'Pemain atas nama '.$this->input->post('name').' berhasil di setujui.';
            $arr = array('xDirect' => base_url('member/verifikasi'), 'xCss' => 'boxsuccess', 'xMsg' => $msg, 'xAlert' => true);
        }

        $this->tools->__flashMessage($arr);
    }

    function __verifycount()
    {
        $param = array('id_member' => $this->session->member['id'], 'detail' => true, 'md5' => true);
        $res = $this->excurl->reqCurlback('me', $param);
        $v = $res->data;

        $club = $this->excurl->reqCurlapp('profile-club', ['id_club' => $v[0]->id_club])->data;
        $slug = $club[0]->slug;

        $query = array('club' => $slug, 'active' => 'false', 'count' => true);
        $verify = $this->excurl->reqCurlapp('reglist-player', $query);

        $data = array('xClass' => 'reqverifycount', 'xHtml' => $verify->data[0]->cc);
        $this->tools->__flashMessage($data);;
    }

}
