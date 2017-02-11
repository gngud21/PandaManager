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

        $this->load->model('maindata');
    }


	public function index()
	{

		$part = $this->maindata->getPart();
		$assembledBot = $this->maindata->getAssembledBot();
		$spent = $this->maindata->getSpent();
		$earned = $this->maindata->getEarned();

		$this->data['part'] = $part;
		$this->data['assembledBot'] = $assembledBot; 
		$this->data['spent'] = $spent;
		$this->data['earned'] = $earned;
		$this->data['pagebody'] = 'welcome';
		$this->render(); 
	}

}
