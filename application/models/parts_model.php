<?php

class parts_model extends CI_Model {

	var $data= array(
		array('PartID' => '1', 'PartLine' => 'A', 'PartModel' => 'A1', 'PartSection' => 'top','PartImage' => 'a1.jpeg',
			  'CA' => 'BAN-A1-T1', 'ManuDate' => '2017-01-28', 'ManuLocat' => 'Coquitlam'),
			  
		array('PartID' => '2', 'PartLine' => 'B', 'PartModel' => 'B1', 'PartSection' => 'top','PartImage' => 'b1.jpeg',
			  'CA' => 'BAN-B1-T2', 'ManuDate' => '2017-02-01', 'ManuLocat' => 'Burnaby'),
			  
		array('PartID' => '3', 'PartLine' => 'M', 'PartModel' => 'M1', 'PartSection' => 'top','PartImage' => 'm1.jpeg',
			  'CA' => 'BAN-M1-T3', 'ManuDate' => '2016-12-28', 'ManuLocat' => 'East Vancouver'),
			  
		array('PartID' => '3', 'PartLine' => 'R', 'PartModel' => 'R1', 'PartSection' => 'top','PartImage' => 'r1.jpeg',
			  'CA' => 'BAN-R1-T4', 'ManuDate' => '2017-02-03', 'ManuLocat' => 'Victoria'),
			  
		array('PartID' => '4', 'PartLine' => 'W', 'PartModel' => 'W1', 'PartSection' => 'top','PartImage' => 'w1.jpeg',
			  'CA' => 'BAN-W1-T5', 'ManuDate' => '2016-12-23', 'ManuLocat' => 'Coquitlam'),
		
		array('PartID' => '5', 'PartLine' => 'A', 'PartModel' => 'A2', 'PartSection' => 'torso','PartImage' => 'a2.jpeg',
			  'CA' => 'BAN-A1-TR1', 'ManuDate' => '2016-12-26', 'ManuLocat' => 'West Vancouver'),
			  
		array('PartID' => '6', 'PartLine' => 'W', 'PartModel' => 'W2', 'PartSection' => 'torso','PartImage' => 'w2.jpeg',
			  'CA' => 'BAN-W2-TR2', 'ManuDate' => '2017-01-22', 'ManuLocat' => 'China'),
			  
		array('PartID' => '7', 'PartLine' => 'W', 'PartModel' => 'W2', 'PartSection' => 'torso','PartImage' => 'w2.jpeg',
			  'CA' => 'BAN-W2-TR3', 'ManuDate' => '2017-01-29', 'ManuLocat' => 'China'),
			  
		array('PartID' => '8', 'PartLine' => 'W', 'PartModel' => 'W2', 'PartSection' => 'torso','PartImage' => 'w2.jpeg',
			  'CA' => 'BAN-W2-TR4', 'ManuDate' => '2017-01-24', 'ManuLocat' => 'Toronto'),
		
		array('PartID' => '9', 'PartLine' => 'A', 'PartModel' => 'A3', 'PartSection' => 'bottom','PartImage' => 'a3.jpeg',
			  'CA' => 'BAN-A3-B1', 'ManuDate' => '2017-01-01', 'ManuLocat' => 'Richmond'),		
			  
		array('PartID' => '10', 'PartLine' => 'B', 'PartModel' => 'B3', 'PartSection' => 'bottom','PartImage' => 'b3.jpeg',
			  'CA' => 'BAN-B3-B2', 'ManuDate' => '2017-01-03', 'ManuLocat' => 'Port Coquitlam'),
			  
		array('PartID' => '11', 'PartLine' => 'C', 'PartModel' => 'C3', 'PartSection' => 'bottom','PartImage' => 'c3.jpeg',
			  'CA' => 'BAN-C3-B3', 'ManuDate' => '2017-01-05', 'ManuLocat' => 'Port Moody'),
			  
		array('PartID' => '12', 'PartLine' => 'R', 'PartModel' => 'R3', 'PartSection' => 'bottom','PartImage' => 'r3.jpeg',
			  'CA' => 'BAN-R3-B4', 'ManuDate' => '2017-01-07', 'ManuLocat' => 'Coquitlam'),
			  
		array('PartID' => '13', 'PartLine' => 'W', 'PartModel' => 'W3', 'PartSection' => 'bottom','PartImage' => 'w3.jpeg',
			  'CA' => 'BAN-W3-B5', 'ManuDate' => '2017-01-15', 'ManuLocat' => 'Narnia'),
			
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