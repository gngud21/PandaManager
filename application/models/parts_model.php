<?php

class parts_model extends CI_Model {

	var $data= array(
		array('PartID' => '1', 'PartLine' => 'A', 'PartModel' => 'A1', 'PartSection' => 'top','PartImage' => 'a1.jpeg',
			  'CA' => 'BAN00T1', 'ManuDate' => '2017-01-28'),
			  
		array('PartID' => '2', 'PartLine' => 'B', 'PartModel' => 'B1', 'PartSection' => 'top','PartImage' => 'b1.jpeg',
			  'CA' => 'BAN00T2', 'ManuDate' => '2017-02-01'),
			  
		array('PartID' => '3', 'PartLine' => 'M', 'PartModel' => 'M1', 'PartSection' => 'top','PartImage' => 'm1.jpeg',
			  'CA' => 'BAN00T3', 'ManuDate' => '2016-12-28'),
			  
		array('PartID' => '3', 'PartLine' => 'R', 'PartModel' => 'R1', 'PartSection' => 'top','PartImage' => 'r1.jpeg',
			  'CA' => 'BAN00T4', 'ManuDate' => '2017-02-03'),
			  
		array('PartID' => '4', 'PartLine' => 'W', 'PartModel' => 'W1', 'PartSection' => 'top','PartImage' => 'w1.jpeg',
			  'CA' => 'BAN00T5', 'ManuDate' => '2016-12-23'),
		
		array('PartID' => '5', 'PartLine' => 'A', 'PartModel' => 'A2', 'PartSection' => 'torso','PartImage' => 'a2.jpeg',
			  'CA' => 'BAN0TR1', 'ManuDate' => '2016-12-26'),
			  
		array('PartID' => '6', 'PartLine' => 'W', 'PartModel' => 'W2', 'PartSection' => 'torso','PartImage' => 'w2.jpeg',
			  'CA' => 'BAN0TR2', 'ManuDate' => '2017-01-22'),
			  
		array('PartID' => '7', 'PartLine' => 'W', 'PartModel' => 'W2', 'PartSection' => 'torso','PartImage' => 'w2.jpeg',
			  'CA' => 'BAN0TR3', 'ManuDate' => '2017-01-29'),
			  
		array('PartID' => '8', 'PartLine' => 'W', 'PartModel' => 'W2', 'PartSection' => 'torso','PartImage' => 'w2.jpeg',
			  'CA' => 'BAN0TR4', 'ManuDate' => '2017-01-24'),
		
		array('PartID' => '9', 'PartLine' => 'A', 'PartModel' => 'A3', 'PartSection' => 'bottom','PartImage' => 'a3.jpeg',
			  'CA' => 'BAN00B1', 'ManuDate' => '2017-01-01'),		
			  
		array('PartID' => '10', 'PartLine' => 'B', 'PartModel' => 'B3', 'PartSection' => 'bottom','PartImage' => 'b3.jpeg',
			  'CA' => 'BAN00B2', 'ManuDate' => '2017-01-03'),
			  
		array('PartID' => '11', 'PartLine' => 'C', 'PartModel' => 'C3', 'PartSection' => 'bottom','PartImage' => 'c3.jpeg',
			  'CA' => 'BAN00B3', 'ManuDate' => '2017-01-05'),
			  
		array('PartID' => '12', 'PartLine' => 'R', 'PartModel' => 'R3', 'PartSection' => 'bottom','PartImage' => 'r3.jpeg',
			  'CA' => 'BAN00B4', 'ManuDate' => '2017-01-07'),
			  
		array('PartID' => '13', 'PartLine' => 'W', 'PartModel' => 'W3', 'PartSection' => 'bottom','PartImage' => 'w3.jpeg',
			  'CA' => 'BAN00B5', 'ManuDate' => '2017-01-15'),
			
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}
/*
	// retrieve a single quote
	public function get($which)
	{
		// iterate over the data until we find the one we pwant
		foreach ($this->data as $record)
			if ($record['id'] == $which)
				return $record;
		return null;
	}
*/
	// retrieve all of the quotes
	public function all()
	{
		return $this->data;
	}

}