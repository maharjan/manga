<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> library('javascript');
		$login = $this -> session -> userdata('isLoggedIn');
		$this -> variables['login'] = "true";
		if (!isset($login) || $login != true) {
			$this -> variables['login'] = "false";
		}
		$this -> load -> vars($this -> variables);
	}

	function index() {
		$this -> load -> model('main_model');
		$this -> variables['tables'] = $this -> main_model -> fetch_manga_lists();
		$this -> load -> view('pages/main_view.php', $this -> variables);
	}

	function add() {
		$this -> variables['form_action'] = "validate/add";
		$this -> load -> view('pages/add_view.php', $this -> variables);
	}

	function edit() {
		$this -> variables['form_action'] = "validate/edit";
		$this -> load -> view('pages/edit_view.php', $this -> variables);
	}
	
	function change() {
		$this -> variables['form_action'] = "validate/change_password";
		$this -> load -> view('pages/change_password_view.php', $this -> variables);
	}

	function login() {
		redirect('login');
	}

	function logout() {
		$this -> session -> unset_userdata('isLoggedIn');
		$this -> session -> sess_destroy();
		redirect('');
	}

}
