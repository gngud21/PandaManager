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
	
	// inserts robot into parts table
	function insertRow($table, $data){
		$this->db->insert($table, $data);
	}
	
	// retrieve the robot piece
	public function selectParts($piece) {
		$sql = 'SELECT * FROM parts WHERE piece = '. $piece . ';';  
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	// retrieves one row of the robot piece
	public function selectOnePart($data) {
		$sql = 'SELECT * FROM parts WHERE piece = ' . $data . ' LIMIT 1;';
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
        // retrieves a part by id
        public function selectById($id) {
            $sql = 'SELECT * FROM parts WHERE id = "' . $id . '";';
            $query = $this->db->query($sql);
            return $query->result_array();
        }
	
	public function delete($id) {
		$this->db->where_in('id', $id);
		$query = $this->db->delete('parts');
		return $query;
	}
}
