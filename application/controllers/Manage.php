<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
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

        $this->load->model('Manage_model');
    }


	public function index()
	{
		$role = $this->session->userdata('userrole');
		if($role == 'boss') {
			$this->data['pagebody'] = 'manage';
			$this->render(); 
		}else {
			redirect('welcome');
		}
	}

	// generates sa new api key
    public function generateAPI($code) 
    {
        $response = file_get_contents('https://umbrella.jlparry.com/work/registerme/' . TEAM_NAME . '/' . $code);
            
        if (strpos($response, "Oops: Bad password!") !== 0) {
            $newAPI = explode(' ',$response)[1];
            $response = "Your new API key is: " . $newAPI;
            $this->Manage_model->updateApiKey($newAPI);
        }
            
        echo $response;
    }
        
	// reboots/restarts out bot factory participation and resets our balance	
    public function rebootAPI() 
    {
        $response = file_get_contents('https://umbrella.jlparry.com/work/rebootme?key=' . $this->Manage_model->getApiKey());
            
        echo $response;
    }
        
        
}

