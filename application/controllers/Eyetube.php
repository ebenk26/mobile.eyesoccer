<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eyetube extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/EyetubeMod');
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
		$this->EyetubeMod->$fn();
	    }
	} else {
	    $data['kanal'] = 'eyetube';
	    $data['content'] = 'eyetube/home';
	    
	    $data['title'] = $this->config->item('meta_title');
	    $data['meta_desc'] = $this->config->item('meta_desc');
	    $data['meta_keyword'] = $this->config->item('meta_keyword');
	    
	    $this->load->view($this->__theme().'template', $data);
	}
    }

    function detail($slug = '')
    {
	$data['slug'] = $slug;
	$data['kanal'] = 'eyetube';
	$data['content'] = 'eyetube/detail';
	
	$data['title'] = $this->config->item('meta_title');
	$data['meta_desc'] = $this->config->item('meta_desc');
	$data['meta_keyword'] = $this->config->item('meta_keyword');
	
	$this->load->view($this->__theme().'template', $data);
    }

    function kategori($slug = '')
    {
		$data['slug'] = $slug;
		$data['kanal'] = 'eyetube';
		$data['content'] = 'eyetube/category';

		$data['category_name'] = "";
		if ($slug != "SSBAkademi")
		{
			$data['category_name'] = str_replace('-', ' ', $slug);
		}
		else
		{
			$data['category_name'] = "SSB / Akademi";
		}
		// var_dump($data['category_name']);exit();
		
		$data['title'] = $this->config->item('meta_title');
		$data['meta_desc'] = $this->config->item('meta_desc');
		$data['meta_keyword'] = $this->config->item('meta_keyword');
		
		$this->load->view($this->__theme().'template', $data);
    }

}
