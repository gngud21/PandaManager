<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('History_model');
	}

	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'history';

		// build the list of transactions, to pass on to our view
		$source = $this->History_model->all();
		$history = array ();
		foreach ($source as $record)
		{
			$history[] = array ('TransID' => $record['TransID'],
								'Transaction Type' => $record['Transaction Type'],
								'RobotID' => $record['RobotID'],
								'PartsID' => $record['PartsID'],
								'Shipments' => $record['Shipments'],
								'Date' => $record['Date'],
								'Time' => $record['Time']
								);
		}
		$this->data['history'] = $history;

		$this->render();
	}
}
