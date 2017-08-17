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
		$role = $this->session->userdata('userrole');
		
		if($role == 'boss' || $role == 'supervisor') {
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
		} else {
				redirect('welcome');
		  }
	}
	
	public function dateSort(){
		$role = $this->session->userdata('userrole');
		
		if($role == 'boss' || $role == 'supervisor') {
		$sortDate = $this->History_model->sortingDate();
		
		$history = array ();
			foreach ($sortDate as $record)
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
		} else {
				redirect('welcome');
		}
	}
		
	public function modelSort(){
		$role = $this->session->userdata('userrole');
		if($role == 'boss' || $role == 'supervisor') {
		$sortModel = $this->History_model->sortingModel();
		
		$history = array ();
			foreach ($sortModel as $record)
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
		} else {
				redirect('welcome');
		  }
	}
}
