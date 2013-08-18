<?php
class Main_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function fetch_manga_lists() {
		// find manga list
		$query = $this -> db -> get('mangas');
		$data=$query->result_array();
		return $data;
	}

}
