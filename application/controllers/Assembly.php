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
	
			$top = $this->Parts_model->selectParts(1);
			$torso = $this->Parts_model->selectParts(2);
			$bottom = $this->Parts_model->selectParts(3);
			
			$this->data['top'] = $top;
			$this->data['torso'] = $torso;
			$this->data['bottom'] = $bottom;
			$this->data['robots'] = $robots;
			$this->data['parts'] = $top;
			$this->data['parts'] = $torso;
			$this->data['parts'] = $bottom;
			$this->data['pagebody'] = 'assembly';
			$this->render();
		}else {
			redirect('welcome');
		}
	}
	
	private function insertDecode($data) {
		$array = array();
		foreach($data as $record) {
			$array[] = array ('id' => $record['id'], 
							  'model' => $record['model'],
							  'piece' => $record['piece'],
							  'piecemodel' => $record['model'].$record['piece'],
							  'plant' => $record['plant'],
							  'stamp' => $record['stamp']);
		}
		
		$json = json_encode($array);
		$str = json_decode($json, true);
		
		return $str;
	}
	
	public function build() {
		$top = $this->Parts_model->selectOnePart($this->input->post('top'));
		$topData = $this->insertDecode($top);
		
		$torso = $this->Parts_model->selectOnePart($this->input->post('torso'));
		$torsoData = $this->insertDecode($torso);
		
		$bottom = $this->Parts_model->selectOnePart($this->input->post('bottom'));
		$bottomData = $this->insertDecode($bottom);
		
		if($top != null && $torso != null && $bottom != null) {
			$parts = array($topData[0]["id"], $torsoData[0]["id"], $bottomData[0]["id"]);
			$this->Parts_model->delete($parts);
			
			$pieces = array('top' => $topData[0]["piecemodel"], 'torso' => $torsoData[0]["piecemodel"], 'bottom' => $bottomData[0]["piecemodel"]);
			$result = $this->Robots_model->buildRobot($pieces);
			
			echo $result;
		}else {
			echo 'Failed to build';
		}
	}
}