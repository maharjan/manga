<?php
class Error extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function _404(){
		$this->load->view('errors/404_view.php');
	}
}