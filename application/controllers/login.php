<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$login = $this -> session -> userdata('isLoggedIn');
		$this -> variables['login'] = "true";
		if (!isset($login) || $login != true) {
			$this -> variables['login'] = "false";
		}
		$this -> load -> vars($this -> variables);
	}

	// 	default function
	function index() {
		$this -> createSuperAdmin();
		$this -> load -> view('pages/login_view.php');
	}

	function createSuperAdmin() {
		$this -> load -> model('login_model');
		$query = $this -> login_model -> createSuperAdmin();
	}

	// validate user login credential
	function validate() {
		$this -> form_validation -> set_rules('username', 'Email Address', 'trim|required|valid_email');
		$this -> form_validation -> set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|alpha_numeric');

		if ($this -> form_validation -> run() == false) {
			$this -> index();
		} else {
			$this -> load -> model('login_model');
			if ($this -> login_model -> validate()) {
				$data = Array('username' => $this -> input -> post('username'), 'isLoggedIn' => true);
				$this -> session -> set_userdata($data);
				redirect('main');
			} else {
				$this -> form_validation -> set_message('globalmsg', 'Incorrect username or password.');
				$this -> index();
			}
		}
	}
	
	

}
