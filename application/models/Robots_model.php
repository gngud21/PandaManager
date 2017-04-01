<?php

class Robots_model extends CI_Model {
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}
	
	// retrieve all of the robots
	public function all()
	{
		$query = $this->db->get('robots');
		return $query->result_array();
	}
	
	// inserts an assembled robot into the robots table
	public function buildRobot($data) {
		$query = $this->db->insert('robots', $data);
		return $query;
	}
}