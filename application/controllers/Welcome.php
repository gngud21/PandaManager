<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();

        $this->load->model('Main_model');
        $this->load->model('Manage_model');
    }


	public function index()
	{

		$part = $this->Main_model->getPart();
		$assembledBot = $this->Main_model->getAssembledBot();
		$spent = $this->Main_model->getSpent();
		$earned = $this->Main_model->getEarned();

		$this->data['part'] = $part;
		$this->data['assembledBot'] = $assembledBot; 
		$this->data['spent'] = $spent;
		$this->data['earned'] = $earned;



	// $response = file_get_contents('https://umbrella.jlparry.com/work/buybox?key=' . $this->Manage_model->getApiKey());
	// $str = json_decode($response);
	// //$id, $model, $piece, $plant, $stamp;
	// $id = NULL;
	// if(!empty($str)){
	// 	foreach($str as $row){	
	// 		$id = $row->id;	
	// 		// $model = $row->model;	
	// 		// $piece = $row->piece;
	// 		// $plant = $row->plant; 
	// 		// $stamp = $row->stamp; 
	// 		echo $id;
	// 	}	
	// }
	

		// $response = file_get_contents('https://umbrella.jlparry.com/work/buybox?key=' . $this->Manage_model->getApiKey());
		// $str = json_decode($response);
		// foreach($str as $row){
		// 	echo $row->id ."\n";	
		// }
//https://umbrella.jlparry.com/work/mybuilds?key=' . $this->Manage_model->getApiKey()
		//work/mybuilds
		//var_dump($response);
		//var_dump(json_decode($response));

		
		$this->data['pagebody'] = 'welcome';
		$this->render('welcome'); 
	}
}
