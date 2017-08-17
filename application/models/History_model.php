<?php

class History_model extends CI_Model {

	// Constructor
	public function __construct()
	{
		parent::__construct();
	}

	function getData(){
		$this->load->library('pagination');
		
		//gets database
		$query = $this->db->get('history',20,$this->uri->segment(3));
		$data['history'] = $query->result();
		
		$query2 = $this->db->get('history');
		
		$config['base_url'] = base_url().'history/index';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 20;
		$config['num_links'] = 5;
		
		

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close']= '</ul>';
		
		$config['first_tag_open']= '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['next_link'] = 'Next';

        $config['prev_tag_open'] = '<li>';
		$config['prev_link'] = 'Previous';
		
		$config['num_tag_open']= '<li>';
		$config['num_tag_close']= '</li>';
		
		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		
		$config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";
		
		$this->pagination->initialize($config);
		//$this->load->view('history',$data);

		return $query->result_array();
	}
	
	// sorts by date
	public function sortingDate() {
		$this->load->library('pagination');
		
		//gets database
		$query = $this->db->get('history',20,$this->uri->segment(3));
		$data['history'] = $query->result();
		
		$query2 = $this->db->get('history');
		
		$config['base_url'] = base_url().'History/dateSort';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 20;
		$config['num_links'] = 5;
		
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close']= '</ul>';
		
		$config['first_tag_open']= '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['next_link'] = 'Next';

        $config['prev_tag_open'] = '<li>';
		$config['prev_link'] = 'Previous';
		
		$config['num_tag_open']= '<li>';
		$config['num_tag_close']= '</li>';
		
		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		
		$config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";
		
		$this->pagination->initialize($config);
		
		$this->db->select("*");
		$this->db->from("history");
		$this->db->order_by("stamp", "asc");

		return $query = $this->db->get()->result_array();
	}
	
		// sorts by model
		public function sortingModel() {
		$this->load->library('pagination');
		
		//gets database
		$query = $this->db->get('history',20,$this->uri->segment(3));
		$data['history'] = $query->result();
		
		$query2 = $this->db->get('history');
		
		$config['base_url'] = base_url().'history/modelSort';
		$config['total_rows'] = $query2->num_rows();
		$config['per_page'] = 20;
		$config['num_links'] = 5;
		
		

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close']= '</ul>';
		
		$config['first_tag_open']= '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['next_link'] = 'Next';

        $config['prev_tag_open'] = '<li>';
		$config['prev_link'] = 'Previous';
		
		$config['num_tag_open']= '<li>';
		$config['num_tag_close']= '</li>';
		
		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		
		$config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';
         
        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";
		
		$this->pagination->initialize($config);
		
		$this->db->select("*");
		$this->db->from("history");
		$this->db->order_by("model", "asc");
		$this->db->order_by("piece", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	// insert data into history table
	public function insert($data) {
		$query = $this->db->insert('history', $data);
		return $query;
	}
}
