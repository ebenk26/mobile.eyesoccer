<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }

    function __set_like()
    {
    	$kanal = $this->input->post('kanal');
    	$id = $this->input->post('id');
    	$slug = $this->input->post('slug');

    	if($kanal == 'eyetube')
    	{
    	    $field = 'tube_like';	
    	} else {
    	    $field = 'news_like';
    	}
    	
    	$this->db->set($field, $field.'+1', FALSE);
    	$this->db->where('eyetube_id', 'md5('.$id.')');
    	$query = $this->db->update('tbl_'.$kanal);

    	if($query AND $field == 'tube_like')
    	{
	    $like = $this->excurl->remoteCall($this->__xurl().'video/'.$slug, $this->__xkey(), []);
	    $like = json_decode($like)->data;

	    $data = array('xSplit' => true, 'xData' => ['likethis' => $like->tube_like]);
	    $this->tools->__flashMessage($data);
    	}
    }

}

/* End of file AjaxMod.php */
/* Location: ./application/models/ajax/AjaxMod.php */