<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    private function __theme() { return $this->config->item('themes'); }
    
    function __construct()
    {
	parent::__construct();
	$this->load->model('ajax/AjaxMod');
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
		$this->AjaxMod->$fn();
	    }
	}
    }

	function bilangan()
	{
		$arr = array(1,2,3,4,5,6,7,8,9,10,11,12);

		$row= ceil(count($arr)/3);
		for($i = 1; $i <= $row; $i++) {
			echo $i."&nbsp;";
			$k = 0;
			$pre = 0;
		  for($j = 1; $j <= 2; $j++) {
			if($pre == 0)
			  $pre = $k = $i + $row;
			else
			  $pre = $pre + $row;

			if($pre <= max($arr))
			  echo $arr[$pre-1]."&nbsp;";
		  }
		  echo "<br>";
		}
	}
}
