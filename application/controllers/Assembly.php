<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Robots_model');
		$this->load->model('Parts_model');
		$this->load->model('History_model');
		$this->load->model('Manage_model');
	}
	
	// Checks if the user has role priviledges if so, renders the data to the assembly view for display
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
	
	// Helper function that encodes the data into a json string and then returns the decoded string
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
	
	// Builds a robot and sells it to a buyer
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
			
			// assemble the bot and then sell to a buyer
			$buyBot = file_get_contents('https://umbrella.jlparry.com/work/buymybot/'. $topData[0]["id"] . '/' . $torsoData[0]["id"] . '/' . $bottomData[0]["id"] . '?key=' . $this->Manage_model->getApiKey());
			$responseArray = explode(" ", $buyBot);
			$str = $responseArray[1];
			$pieces = array('top' => $topData[0]["piecemodel"], 'torso' => $torsoData[0]["piecemodel"], 'bottom' => $bottomData[0]["piecemodel"], 'price' => $str);
			$result = $this->Robots_model->buildRobot($pieces);
			
			// grabs the selected pieces and then update the history table
			$historyTop = array('id' => $topData[0]["id"], 'model' => $topData[0]["model"], 'piece' => $topData[0]["piece"], 'plant' => $topData[0]["plant"], 'stamp' => $topData[0]["stamp"]);
			$historyTorso = array('id' => $topData[0]["id"], 'model' => $torsoData[0]["model"], 'piece' => $torsoData[0]["piece"], 'plant' => $torsoData[0]["plant"], 'stamp' => $torsoData[0]["stamp"]);
			$historyBottom = array('id' => $bottomData[0]["id"], 'model' => $bottomData[0]["model"], 'piece' => $bottomData[0]["piece"], 'plant' => $bottomData[0]["plant"], 'stamp' => $bottomData[0]["stamp"]);
			$topResult = $this->History_model->insert($historyTop);
			$torsoResult = $this->History_model->insert($historyTorso);
			$bottomResult = $this->History_model->insert($historyBottom);
			
			echo $result;
		}else {
			echo 'Failed to build';
		}
	}
}