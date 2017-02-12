<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {
	function __construct()
	{
		parent::__construct();
		$this->load->model('robots');
	}
	
	public function index() {
		$robots = $this->robots->all();
		
		$this->data['robots'] = $robots;
		$this->data['pagebody'] = 'assembly';
		$this->render();
	}
}