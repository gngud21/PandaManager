<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //return the number of parts
    public function getPart()
    {
        $numParts = $this->db->count_all('parts');
        return $numParts;
    }

    //return the number of assembled bot
    public function getAssembledBot()
    {
        $numAssembledBots = $this->db->count_all('robots');
        return $numAssembledBots;
    }

    //return $ spent
    public function getSpent()
    {
        $total = $this->getPart() * 10;                
        return $total;             
    }
    
    //return the number of earned
    public function getEarned()
    {        
        $sql = 'SELECT SUM(price) as sum FROM robots';
        $query = $this->db->query($sql);
        $total = $query->result_array();        
        return $total[0]["sum"];           
    }
}