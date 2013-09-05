<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Validate extends CI_Controller {

	function __construct() {
		parent::__construct();
		$login = $this -> session -> userdata('isLoggedIn');
		$this -> variables['login'] = "true";
		if (!isset($login) || $login != true) {
			$this -> variables['login'] = "false";
		}
		$this -> load -> vars($this -> variables);
	}

	function add() {
		$this -> form_validation -> set_rules('manga_name', 'Manga name', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_author', 'Manga author', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_recent_epi', 'Recent episode', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_read_epi', 'Latest read episode', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_start_date', 'Manga start date', 'trim|xss_clean');
		if ($this -> form_validation -> run() == true) {
		} else {
			$this -> variables['form_action'] = "validate/add";
			$this -> load -> view('pages/add_view.php', $this -> variables);
		}
	}

	function edit() {
		$this -> form_validation -> set_rules('manga_name', 'Manga name', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_author', 'Manga author', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_recent_epi', 'Recent episode', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_read_epi', 'Latest read episode', 'trim|min_length[3]|max_length[255]|xss_clean');
		$this -> form_validation -> set_rules('manga_start_date', 'Manga start date', 'trim|xss_clean');
		if ($this -> form_validation -> run() == true) {
		} else {
			$this -> variables['form_action'] = "validate/edit";
			$this -> load -> view('pages/edit_view.php', $this -> variables);
		}
	}

	function change_password() {
		$this -> form_validation -> set_rules('old_password', 'Old Password', 'trim|min_length[6]|max_length[32]|xss_clean');
		$this -> form_validation -> set_rules('new_password', 'New Password ', 'trim|min_length[6]|max_length[32]|xss_clean|matches[confirm_new_password]');
		$this -> form_validation -> set_rules('confirm_new_password', 'Confirm Password', 'trim|min_length[6]|max_length[32]|xss_clean');

		if ($this -> form_validation -> run() == true) {
			$this -> load -> model('setting_model');
			$query = $this -> setting_model -> verify_old_password();
			if ($query) {
				$this -> setting_model -> change_old_password();
			} else {
				$this -> variables['global_error'] = "Invalid old password.";
				// 				$this->output->show_output('global_error','Old password is wrong.');
			}
			$this -> change();
		} else {
			// 			$this->form_validation->set_message('global_error','Error');
			$this -> change();
		}
	}

	function change() {
		$this -> variables['form_action'] = "validate/change";
		$this -> load -> view('pages/change_password_view.php', $this -> variables);
	}

}
