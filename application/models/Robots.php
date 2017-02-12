<?php

class Robots extends CI_Model {
	var $assRobots = array( array('id' => '1', 'top' => 'a1', 'torso' => 'b2', 'bottom' => 'a3'),
					   array('id' => '2', 'top' => 'a1', 'torso' => 'a2', 'bottom' => 'a3'),
					   array('id' => '3', 'top' => 'b1', 'torso' => 'b2', 'bottom' => 'b3'),
				       array('id' => '4', 'top' => 'c1', 'torso' => 'm2', 'bottom' => 'a3'),
				       array('id' => '5', 'top' => 'm1', 'torso' => 'a2', 'bottom' => 'r3'),
				       array('id' => '6', 'top' => 'w1', 'torso' => 'w2', 'bottom' => 'w3'),
				       array('id' => '7', 'top' => 'b1', 'torso' => 'c2', 'bottom' => 'w3')
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