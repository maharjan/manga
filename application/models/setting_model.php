<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Setting_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function verify_old_password(){
		$username = $this->session->userdata('username');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		
		$row = $query->row();
		$this->load->library('encrypt');
		$this->encrypt->set_cipher(MCRYPT_RIJNDAEL_256);
		// if user exists
		if($query->num_rows ==1 && $this->input->post('old_password') == $this->encrypt->decode($row->password)){
			return true;
		}
	}

	function change_old_password(){
		$username = $this->session->userdata('username');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		$row = $query->row();
		
		// if user exists
		if($query->num_rows ==1 && $this->input->post('old_password') == $this->encrypt->decode($row->password)){
			$this->load->helper('date');
			$this->load->library('encrypt');
			$this->encrypt->set_cipher(MCRYPT_RIJNDAEL_256);

			$data =array('password'=>$this->encrypt->encode($this->input->post('new_password')),
					'last_modified'=> date('Y-m-d H:i:s'),
					'version'=>($row->version+1));
			$this->db->where('id',$row->id);
			$result=$this->db->update('user',$data);
			return $result;
		}else{
			// TODO : show custom message stating error
			show_error($query->num_rows);
		}
	}
}