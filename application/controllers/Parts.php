<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Parts_model');
		$this->load->model('Manage_model');
	}
	public function index()
	{
		$role = $this->session->userdata('userrole');
		if($role == 'boss' || $role == 'supervisor' || $role == 'worker') {
			//build the iist of transactions, to pass on to our view
	
			$source = $this->Parts_model -> all();
			$parts= array();
			foreach($source as $record){
				$parts[] = array ('id' => $record['id'],
								  'modelpiece' => $record['model'].$record['piece'].'.jpeg',
								  'plant' => $record['plant'],
								  'stamp' => $record['stamp']
								);
							
			}
			
			$this->data['parts'] = $parts;
			$this->data['pagebody'] = 'parts';
			$this->render();
		}else {
			redirect('welcome');
		}
	}
	
	//Buy parts
	//insert all parts of a box into part table 
	public function updateTable()
	{
		$response = file_get_contents('https://umbrella.jlparry.com/work/buybox?key=' . $this->Manage_model->getApiKey());
		$str = json_decode($response);
		var_dump($this->Manage_model->getApiKey());
		if(!empty($str)){
			foreach($str as $row){	
				//echo $row->id ."</br>";					
				$insert_row = array(
					'id' => $row->id,
					'model' => $row->model,
					'piece' => $row->piece,
					'plant' => $row->plant,
					'stamp' => $row->stamp
				);				
				$this->Parts_model->insertRow("parts", $row);				
				redirect("parts");
			}	
		}
	}
	
	//Build more parts
	//insert a part into parts & history tables
	public function buyMoreParts()
	{
		$response = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key=' . $this->Manage_model->getApiKey());
		$str = json_decode($response);			
		if(!empty($str)){
			foreach($str as $row){												
				$insert_row = array(
					'id' => $row->id,
					'model' => $row->model,
					'piece' => $row->piece,
					'plant' => $row->plant,
					'stamp' => $row->stamp
				);			
				//add a part to part table 
				$this->Parts_model->insertRow("parts", $row);				
				
				//add a part to history table
				$this->Parts_model->insertRow("history", $row);				
				redirect("parts");
			}			
		}		
	}	
}
