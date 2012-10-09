<?php
class Login_model extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->helper('date');
	}

	function validate() {
		$this -> db -> where('username', $this -> input -> post('username'));
		$query = $this -> db -> get('user');
		if ($query -> num_rows == 1) {
			$row = $query -> row();
			if ($this -> input -> post('password') == $this -> encrypt -> decode($row -> password)) {
				return TRUE;
			}
		}
		return FALSE;
	}

/**
	 * status : 1 for active / 0 for inactive
	 */
	function createSuperAdmin(){
		$query=$this->db->get('user');
		if($query->num_rows ==0){
			$data=array('username'=>'admin@gmail.com',
					'password'=> $this->encrypt->encode('test12'),
					'created'=> date('Y-m-d H:i:s'),
					'status'=>1,'version'=>0);
			$query1= $this->db->insert('user', $data);
		}
	}
}
