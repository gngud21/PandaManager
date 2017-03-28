<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Parts_model');
	}
	public function index()
	{
		//this is the view we want to show
            $this->data['pagebody'] ='parts';
		
		//build the iist of transactions, to pass on to our view
	
		$source = $this->Parts_model -> all();
		$parts= array();
		foreach($source as $record)
			$cells[] = $this->parser->parse('_cells',(array)$record,true);
		
		$this->load->library('table');
		$parems = array(
			'table_open' => '<table class="parts">',
			'cell_start' => '<td class="oneimage">',
			'cell_alt_start' => '<td class="oneimage">'
		);
		
		$this->table->set_template($parems);
        $rows = $this->table->make_columns($cells,3);
        $this->data['partsTable'] = $this->table->generate($rows);
		
		$this ->data['parts'] = 'parts';
		
        $this->render();
	}

}
