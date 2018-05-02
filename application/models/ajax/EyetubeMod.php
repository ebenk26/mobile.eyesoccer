<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyetubeMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }

    function __vidtube()
    {
	$query = array('page' => 1, 'limit' => 4);
	$data['video'] = $this->excurl->remoteCall($this->__xurl().'video', $this->__xkey(), $query);
	
	$html = $this->load->view($this->__theme().'eyetube/ajax/vidtube', $data, true);
	
	$data = array('xClass' => 'reqtube', 'xHtml' => $html);
	$this->tools->__flashMessage($data);
    }

    function __list_tube()
    {
        $query = array('page' => 1, 'limit' => 100, 'sortby' => 'newest');
        $data['tube'] = $this->excurl->remoteCall($this->__xurl().'video', $this->__xkey(), $query);
        
        $html = $this->load->view($this->__theme().'eyetube/ajax/list_tube', $data, true);
        
        $data = array('xClass' => 'reqtube', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __detail_tube()
    {
        $data['slug'] = $this->input->post("slug");
        
    	$query = array('page' => 1, 'limit' => 6, 'related' => 'true');
    	$data['tube'] = $this->excurl->remoteCall($this->__xurl().'video/'.$data['slug'], $this->__xkey(), $query);
    	
    	$html = $this->load->view($this->__theme().'eyetube/ajax/detail_tube', $data, true);
    	
    	$data = array('xClass' => 'reqtube', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }
    
    function __list_tube_eyenews()
    {
    	$query = array('page' => 1, 'limit' => 10, 'sortby' => 'newest');
    	$data['tube'] = $this->excurl->remoteCall($this->__xurl().'video', $this->__xkey(), $query);
    	
    	$html = $this->load->view($this->__theme().'eyetube/ajax/videolist', $data, true);
    	
    	$data = array('xClass' => 'reqtube', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __category_tube()
    {
        $data['category'] = $this->input->post("category");

        $query = array('page' => 1, 'limit' => 10, 'sortby' => 'newest', 'category' => $data['category']);
        $data['tube'] = $this->excurl->remoteCall($this->__xurl().'video', $this->__xkey(), $query);
        
        $html = $this->load->view($this->__theme().'eyetube/ajax/tube_category', $data, true);
        
        $data = array('xClass' => 'reqtube', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
    
}
