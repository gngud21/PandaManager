<?php

class Parts_model extends CI_Model {



	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	public function all() {
		$query = $this->db->get('parts');
		return $query->result_array();
	
	}
	function insertRow($table, $data){
		$this->db->insert($table, $data);
	}

}
