<?php

class History_model extends CI_Model {

	var $data = array(
		array('TransID' => '1', 'Transaction Type' => 'Sell', 'RobotID'=> 'a0', 'PartsID' => '1' , 'Shipments' => 'Sent',
			'Date' => '2017-03-10', 'Time' => '6:32 PM'),
		array('TransID' => '2', 'Transaction Type' => 'Return', 'RobotID'=> 'b0', 'PartsID' => '2' , 'Shipments' => 'Received',
			'Date' => '2017-04-10', 'Time' => '7:32 PM'),
		array('TransID' => '4', 'Transaction Type' => 'Sell', 'RobotID'=> 'c0', 'PartsID' => '3' , 'Shipments' => 'Sent',
			'Date' => '2017-03-10', 'Time' => '6:32 PM'),
		array('TransID' => '5', 'Transaction Type' => 'Return', 'RobotID'=> 'm0', 'PartsID' => '4' , 'Shipments' => 'Received',
			'Date' => '2017-04-10', 'Time' => '7:32 PM'),
		array('TransID' => '5', 'Transaction Type' => 'Sell', 'RobotID'=> 'r0', 'PartsID' => '5' , 'Shipments' => 'Sent',
			'Date' => '2017-03-10', 'Time' => '7:32 PM'),
		array('TransID' => '5', 'Transaction Type' => 'Buy', 'RobotID'=> 'w0', 'PartsID' => '6' , 'Shipments' => 'Delayed',
			'Date' => '2017-04-10', 'Time' => '8:32 PM')
	);

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	// retrieve all of the data
	public function all()
	{
		return $this->data;
	}

}
