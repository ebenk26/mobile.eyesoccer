<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyenews extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/EyenewsMod');
	$this->load->model('ajax/HomeMod');
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
		$this->EyenewsMod->$fn();
	    }
	} else {
	    $data['kanal'] = 'eyenews';
	    $data['content'] = 'eyenews/home';
	    
	    $data['title'] = $this->config->item('meta_title');
	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
	}
    }
    
    function kategori($slug = '',$subslug= '')
    {
	$data['slug'] = urldecode($slug);
	$data['subslug'] = urldecode($subslug);
	$data['kanal'] = 'eyenews';
	$data['content'] = 'eyenews/category';
	
	$data['title'] = $this->config->item('meta_title');
	$data['meta_desc'] = $this->config->item('meta_desc');
	$data['meta_keyword'] = $this->config->item('meta_keyword');
	
	$this->load->view($this->__theme().'template', $data);
    }
    
    function detail($slug = '')
    {
	$data['slug'] = $slug;
	$data['kanal'] = 'eyenews';
	$data['content'] = 'eyenews/detail';
	
	$data['title'] = $this->config->item('meta_title');
	$data['meta_desc'] = $this->config->item('meta_desc');
	$data['meta_keyword'] = $this->config->item('meta_keyword');
	
	$this->load->view($this->__theme().'template', $data);
    }
}
