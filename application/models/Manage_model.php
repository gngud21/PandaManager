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
        $this->apiKey = implode('', $result->result_array()[0]);
    }

    
    function updateApiKey($key) {
        $query = array(
            'apiKey' => $key
        );
        $this->db->where('apiId', 1);
        $this->db->update('apikeys', $query);
        $this->apiKey = $key;
    }
    
    public function getApiKey() {
        return $this->apiKey;
    }
}