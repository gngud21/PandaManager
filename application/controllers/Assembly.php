<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {
	function __construct()
	{
		parent::__construct();
		$this->load->model('robots');
		$this->load->model('parts_model');
	}
	
	public function index() {
		$robots = $this->robots->all();
		$parts_model = $this->parts_model->all();
	
		$this->data['robots'] = $robots;
		$this->data['parts_model'] = $parts_model;
		$this->data['pagebody'] = 'assembly';
		$this->render();
	}
}