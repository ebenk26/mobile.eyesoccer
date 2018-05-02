<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyeme extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/EyemeMod');

    }
    protected function getdata(){
    	$data = array(
    			'kanal'  => 'eyeme',
				'me_menu'=> ($this->session->member ? 1 : 0 ),
				'title'  => $this->config->item('meta_title'),
				'meta_desc'=> $this->config->item('meta_desc'),
				'meta_keyword'=> $this->config->item('meta_keyword'));

    	return $data; 
    }

    function index()
    {
	if($_POST)
	{
	    $this->load->view($this->__theme().'function');
	    $fn   = $_POST['fn'];	    
	    $data = [];
	    if(function_exists($fn))
	    {
		$fn();
	    } else {
		$fn = "__".$fn;
		$this->EyemeMod->$fn();
	    }
	} else {
	    $data = $this->getdata();
	    $data['content'] = (isset($this->session->member) ? 'eyeme/me_home' : 'eyeme/me_explore');
	    $this->load->view($this->__theme().'template', $data);

	}
    }
    function explore(){
    	$data   = $this->getdata();
    	$data['content'] = 'eyeme/me_explore';
    	$this->load->view($this->__theme().'template',$data);

    }
    function profile(){
    	$data  = $this->getdata();
    	$data['content']   = 'eyeme/me_profile';
    	$this->load->view($this->__theme().'template',$data);
    
    }
    function notif(){
        $data = $this->getdata();
        $data['content']  = 'eyeme/me_notif';
        $this->load->view($this->__theme().'template',$data);
    }
    function sess_destroy(){
    	$this->session->sess_destroy();
    	$this->index();
    }
    function img(){

        $data  = $this->getdata();
        $data['content'] = 'eyeme/me_img';
        $this->load->view($this->__theme().'template',$data);

    }
    function sess(){
        p($this->session);
    }

}
