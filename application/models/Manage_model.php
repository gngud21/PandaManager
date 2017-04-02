<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_model extends CI_Model
{ 
    private $apiKey;
    
    function __construct()
    {
        parent::__construct();
        $this->db->where('apiId', 1);
        $result = $this->db->get('apikeys');
        //$this->apiKey = implode('', $result->result_array()[0]);
        $this->apiKey = $result->result_array()[0]['apiKey'];
    }

    // updates apiwith new key
    function updateApiKey($key) {
        $query = array(
            'apiKey' => $key
        );
        $this->db->where('apiId', 1);
        $this->db->update('apikeys', $query);
        $this->apiKey = $key;
    }
    
    // gets api key
    public function getApiKey() {
        return $this->apiKey;
    }
    
    // dumps all data from history, parts and robots (for reboot)
    public function dumpData() {
        $this->db->query('TRUNCATE TABLE history');
        $this->db->query('TRUNCATE TABLE parts');
        $this->db->query('TRUNCATE TABLE robots');
    }
}