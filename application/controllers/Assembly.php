<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Robots_model');
		$this->load->model('Parts_model');
	}
	
	public function index() {
		$role = $this->session->userdata('userrole');
		if($role == 'boss' || $role == 'supervisor') {
			$robots = $this->Robots_model->all();
			$parts = $this->Parts_model->all();
	
			$this->data['robots_model'] = $robots;
			$this->data['parts_model'] = $parts;
			$this->data['pagebody'] = 'assembly';
			$this->render();		
		}
	}
}