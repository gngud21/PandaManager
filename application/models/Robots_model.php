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
        
        // get single robot by id
        public function getRobotById($id) 
        {
            $sql = 'SELECT * FROM robots WHERE ID = "' . $id . '";';
            $query = $this->db->query($sql);
            return $query->result_array();
        }
        
        // remove Robot from database by id
        public function removeRobotById($id) 
        {
            $sql = 'DELETE * FROM robots WHERE ID = "' . $id . '";';
            return $this->db->query($sql);
        }
}