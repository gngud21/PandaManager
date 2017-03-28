<?php

class Robots_model extends CI_Model {
	var $assRobots = array( array('id' => '1', 'top' => 'A1', 'torso' => 'B2', 'bottom' => 'A3'),
					   array('id' => '2', 'top' => 'A1', 'torso' => 'A2', 'bottom' => 'A3'),
					   array('id' => '3', 'top' => 'B1', 'torso' => 'B2', 'bottom' => 'B3'),
				       array('id' => '4', 'top' => 'C1', 'torso' => 'M2', 'bottom' => 'A3'),
				       array('id' => '5', 'top' => 'B1', 'torso' => 'A2', 'bottom' => 'R3'),
				       array('id' => '6', 'top' => 'W1', 'torso' => 'W2', 'bottom' => 'W3'),
				       array('id' => '7', 'top' => 'B1', 'torso' => 'C2', 'bottom' => 'W3')
	);
	
	// Constructor
	public function __construct()
	{
		parent::__construct();
	}
	// retrieve a single robot
	public function get($which)
	{
		// iterate over the data until we find the one we pwant
		foreach ($this->assRobots as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}
	// retrieve all of the robots
	public function all()
	{
		return $this->assRobots;
	}
}