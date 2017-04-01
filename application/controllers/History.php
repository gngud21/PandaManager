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
		$source = $this->History_model->getData();
		//$this->view('history',$source);
		//var_dump($source);	
		$history = array ();
		foreach ($source as $record)
		{
			$history[] = array ('id' => $record['id'],
								'model' => $record['model'] . $record['piece'],
								'plant' => $record['plant'],
								'stamp' => $record['stamp'],
								);
		}
		$this->data['history'] = $history;
		$this->data['pagebody'] = 'history';

		$this->render();
	}
}
