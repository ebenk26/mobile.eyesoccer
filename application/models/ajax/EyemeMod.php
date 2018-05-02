<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyemeMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }
    
    function __melist()
    {
    	$query = array('page'=> '1', 'limit'=> '6', 'sortby'=> 'last_online');
    	$data['eyeme'] = $this->excurl->remoteCall($this->__xurl().'me-images', $this->__xkey(), $query);
	
    	$html = $this->load->view($this->__theme().'eyeme/ajax/me_a_list', $data, true);
	
    	$data = array('xClass' => 'reqme', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }
    function __imgfollowedlist(){
        
        $query = array('page' => '1', 'limit' => '10','username'=> $this->session->member['username'],'following'=> true);
        $data['imglist'] = $this->excurl->remoteCall($this->__xurl().'me-images',$this->__xkey(),$query);
        $html = $this->load->view($this->__theme().'eyeme/ajax/me_a_home',$data,true);
        $data = array('xClass' => 'reqimgfollowedlist','xHtml' => $html);
        $this->tools->__flashMessage($data);

    }
    function __explorelist(){
        $page = 1;
        if($this->input->post('sess')) {
            $page = $this->session->pageexplore+1;
            $this->session->set_userdata(array('pageexplore' => $page));
        } else {
            $this->session->set_userdata(array('pageexplore' => 1));
        }
        
        $query = array('page' => $page,'limit' => '18', 'sortby'=> 'last_online');
        $data['explore'] = $this->excurl->remoteCall($this->__xurl().'me-images',$this->__xkey(),$query);

        $html = $this->load->view($this->__theme().'eyeme/ajax/me_a_explore',$data,true);
        if(count(json_decode($data['explore'])->data ) > 0) {
            if($page == '1'){
                $data  = array('xClass' => 'reqexplorelist','xHtml' => $html);     
            } else {
                $data  = array('xAppend' => 'reqexplorelist','xHtml' => $html,'xClass' => 'reqexplorelist');
            }
        } else {
            $data = ['xClass' => 'reqnewexp','xHtml' => ''];
        }
        $this->tools->__flashMessage($data);
    }
    function __newlist(){
        $page  = $this->input->post('pg');
    }
    function __meprofile(){
        $req     = $this->input->post('uname');
        $req = explode('-',$req);
        $visitor = ($this->session->member ? $this->session->member['username'] : '');
        $uname = $req[0];
        $query =  array('page' => '1', 'limit' => '10','visitor' => $visitor);
        $res   = $this->excurl->remoteCall($this->__xurl().'me/'.$uname,$this->__xkey(),$query);

        $data['res']   = json_decode($res);

        if(count($data['res']->data) > 0  AND !empty($uname)){
            if($req[1] == 'profile'){
                $html      = $this->load->view($this->__theme().'eyeme/ajax/me_a_profile',$data,true);
                $data      = array('xClass'=> 'reqprofile','xHtml' => $html);
            }
            else{
                $html      = $this->load->view($this->__theme().'eyeme/ajax/me_a_profileimg',$data,true);
                $data      = array('xClass'=> 'reqprofileimg','xHtml' => $html);
            }

        }
          else{
            $data = array('xClass' => 'all','xHtml'=> 'User tidak ditemukan');
        }

        $this->tools->__flashMessage($data);
        
    }
    function __me(){
        $find = $this->input->post('find');
        $query = array('page' => '1','limit' => '10','search'=> $find);
        $res = $this->excurl->remoteCall($this->__xurl().'me',$this->__xkey(),$query);
        $data['res'] = $res;
        $html = $this->load->view($this->__theme().'eyeme/ajax/me_a_search',$data,true);
        $arr = array('xClass'=> 'searchid', 'xHtml' => $html);
        $this->tools->__flashMessage($arr);

        
    }
    function __menotif(){
        $uname = $this->session->username;
        $query = array('page'=> '1','limit'=> '10','username'=>$uname);
        $res   = $this->excurl->remoteCall($this->__xurl().'me-notif',$this->__xkey(),$query);
        $res   = json_decode($res);

        foreach($res->data as $k => $v){
            if($v->username == $this->session->member['username']){
                unset($res->data[$k]);#hapus notifikasi sendiri 
            }
        }
        $data['res'] = $res;
        $html  = $this->load->view($this->__theme().'eyeme/ajax/me_a_notif',$data,true);
        $arr   = array('xClass'=> 'reqnotif','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
    }
    function __gtcomment(){
    
        $id_img      = $this->input->post('uid');
        $query       = array('page' => '1','limit' => '10','id'=> $id_img);
        $res         = $this->excurl->remoteCall($this->__xurl().'me-comment',$this->__xkey(),$query);
        $data['res'] = json_decode($res);
        #p($data['res']);
        $html        = $this->load->view($this->__theme().'eyeme/ajax/me_a_comment',$data,true);
        $arr         = array('xClass'=> 'idcom','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
#
    }
    function __pscomment(){
        $id_img      = $this->input->post('uid');
        $username    = $this->session->member['username'];
        $content     = $this->input->post('comment');
        $query       = array('id'=> $id_img, 'username' => $username,'comment'=> $content);

        $do          = $this->excurl->remoteCall($this->__xurl().'comment-me',$this->__xkey(),$query);
        $queryCom    = array('page' => '1','limit' => '20','id'=> $id_img);
        $res         = $this->excurl->remoteCall($this->__xurl().'me-comment',$this->__xkey(),$queryCom);
        $data['res'] = array('username' => $username,'comment' => $content,'timeString' => 'beberapa detik yang lalu');

        $html        = $this->load->view($this->__theme().'eyeme/ajax/me_a_n_comment',$data,true);
        $xData       = array(
                            'ncom'=> $html,
                            'c'.$id_img => count(json_decode($res)->data));
        $arr         = array('xSplit'=> false, 'xData' => $xData);       
        $this->tools->__flashMessage($arr);
        
    }
    function __gtlike(){
        $id_img      = $this->input->post('uid');
        $xClass      = $this->input->post('clss');
        $act         = $this->input->post('act');
        $query       = array('id' => $id_img,'username' => $this->session->member['username']);
        $res         = $this->excurl->remoteCall($this->__xurl().($act == 'like' ? 'like-me' : 'unlike-me'),$this->__xkey(),$query);
        $data['res'] = json_decode($res);
        $queryLike   = array('page' => '1','id'=> $id_img,'limit'=> '100');
        $resLike     = $this->excurl->remoteCall($this->__xurl().'me-like',$this->__xkey(),$queryLike);
        $resLike      =json_decode($resLike);
        $data['like'] = count($resLike->data);
        $data['act'] = $act;
        $html        = $this->load->view($this->__theme().'eyeme/ajax/me_a_like',$data,true);
        $arr         = array('xClass'=> $xClass,'xHtml'=> $html);
        $this->tools->__flashMessage($arr);


    }
    function __meimg(){
        $id_img      = $this->input->post('uid');
        $query       = array('page' => '1','limit' => '10','id'=> $id_img);
        $res         = $this->excurl->remoteCall($this->__xurl().'me-images',$this->__xkey(),$query);
        $data['res'] = json_decode($res);
        $html        = $this->load->view($this->__theme().'eyeme/ajax/me_a_img',$data,true);
        $arr         = array('xClass'=> 'reqimg','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
    }
    function __upload(){
        $username   = $this->session->member['username'];
        $caption  = $this->input->post('caption');
        $file = $_FILES['fupload'];

        $query = array('username' => $username,'caption' => $caption);
        $res  = $this->excurl->remoteCall($this->__xurl().'upload-me',$this->__xkey(),$query,array('fupload'));
        $res  = json_decode($res);
        if ($res) {
            $arr = array('xDirect' => base_url('eyeme'), 'xAlert' => true);
            $arr['xCss'] = ($res->status == 'Success' ? 'boxsuccess' : 'boxfailed');
            $arr['xMsg'] = ($res->status == 'Success' ? 'Berhasil Upload foto' : 'Gaga Upload foto');
            $this->tools->__flashMessage($arr);
        }
    }
    function __follow(){
        $username = $this->session->member['username'];
        $visitor = $this->input->post('unamefol');
        $query = array('username'=> $visitor,'visitor' => $username);
        $res = $this->excurl->remoteCall($this->__xurl().'follow-me',$this->__xkey(),$query);
        $res = json_decode($res);
        $data = $res->data;
        #p($data);
        
        $html = btnFol('',$data->hasfollow,array('onclick' => 'clickfol()'),'follow-button',false);
        $arr = array('xClass' => 'reqfol','xHtml'=> $html);
        $this->tools->__flashMessage($arr);
        
    }
    function __delete_img(){
        $username = $this->session->member['username'];
        $id_images= $this->input->post('uid');
        $refer    = ($this->input->post('refer') == 'home' ? MEURL : MEIMGUSR.$id_images);
        $query = array('id'=> $id_images,'username'=> $username);
        $res  = $this->excurl->remoteCall($this->__xurl().'delete-img',$this->__xkey(),$query);
        $res  = json_decode($res);
        if($res->status == 'Success'){
            $arr = array('xCss'=> 'boxsuccess','xMsg'=> 'Foto kamu berhasil di hapus','xAlert' => true);
            if($refer != '' ){
                $arr['xDirect'] = MEURL;
            }
        }
        else{
            $arr = array('xCss' => 'boxfailed','xMsg' => $res->message,'xAlert'=> true);
        }
        $this->tools->__flashMessage($arr);
    }
    function __delete_com(){
        $username = $this->session->member['username'];
        $id_images = $this->input->post('uid_img');
        $id_comment= $this->input->post('uid_com');
        $refer     = ($this->input->post('refer') == 'home' ? MEURL : MEIMGUSR.$id_images);
        $query  = array('id'=> $id_images,'idcom' => $id_comment,'username' => $username);
        $res    = $this->excurl->remoteCall($this->__xurl().'uncomment-me',$this->__xkey(),$query);

        $res    = json_decode($res);
         if($res->status == 'Success'){
            $arr = array('xCss'=> 'boxsuccess','xMsg'=> 'Komentar kamu berhasil di hapus','xAlert' => true);
            if($refer != '' ){
                $arr['xDirect'] = MEURL;
            }
        }
        else{
            $arr = array('xCss' => 'boxfailed','xMsg' => $res->message,'xAlert'=> true);
        }
        $this->tools->__flashMessage($arr);

    }

   
}
