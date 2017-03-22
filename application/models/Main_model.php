<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Maindata extends CI_Model
{

    //parts, assembled bot, $ spent, # earned
    var $part = array(
        array('id' => '1', 'name' => 'a1', 'price' => 3.0),
        array('id' => '2', 'name' => 'a2', 'price' => 5.0),
        array('id' => '3', 'name' => 'a3', 'price' => 3.0),
        array('id' => '4', 'name' => 'b1', 'price' => 3.0),
        array('id' => '5', 'name' => 'b2', 'price' => 5.0),
        array('id' => '6', 'name' => 'b3', 'price' => 3.0),
        array('id' => '7', 'name' => 'c1', 'price' => 3.0),
        array('id' => '8', 'name' => 'c2', 'price' => 5.0),
        array('id' => '9', 'name' => 'c3', 'price' => 3.0),
        array('id' => '10', 'name' => 'm1', 'price' => 3.0),
        array('id' => '11', 'name' => 'm2', 'price' => 5.0),
        array('id' => '12', 'name' => 'm3', 'price' => 3.0),
        array('id' => '13', 'name' => 'r1', 'price' => 3.0),
        array('id' => '14', 'name' => 'r2', 'price' => 5.0),
        array('id' => '15', 'name' => 'r3', 'price' => 3.0),
        array('id' => '16', 'name' => 'w1', 'price' => 3.0),        
        array('id' => '17', 'name' => 'w2', 'price' => 5.0),
        array('id' => '18', 'name' => 'w3', 'price' => 3.0),
        array('id' => '19', 'name' => 'a1', 'price' => 3.0),
        array('id' => '20', 'name' => 'a2', 'price' => 5.0),
        array('id' => '21', 'name' => 'a3', 'price' => 3.0),
        array('id' => '22', 'name' => 'b1', 'price' => 3.0),
        array('id' => '23', 'name' => 'b2', 'price' => 5.0),
        array('id' => '24', 'name' => 'b3', 'price' => 3.0)
    );
    
    var $assembledBot = array( 
        array('id' => '1', 'top' => 'a1', 'torso' => 'a2', 'bottom' => 'a3'),
        array('id' => '2', 'top' => 'b1', 'torso' => 'b2', 'bottom' => 'b3'),
        array('id' => '3', 'top' => 'c1', 'torso' => 'c2', 'bottom' => 'c3'),
        array('id' => '4', 'top' => 'm1', 'torso' => 'm2', 'bottom' => 'm3'),
        array('id' => '5', 'top' => 'r1', 'torso' => 'r2', 'bottom' => 'r3'),
        array('id' => '6', 'top' => 'w1', 'torso' => 'w2', 'bottom' => 'w3')        
    );

    var $spent = array( 
        array('id' => '1', 'name' => 'r3', 'price' => 3.0),
        array('id' => '2', 'name' => 'a3', 'price' => 3.0),
        array('id' => '3', 'name' => 'b2', 'price' => 5.0),
        array('id' => '4', 'name' => 'm3', 'price' => 3.0),
        array('id' => '5', 'name' => 'b3', 'price' => 3.0),
        array('id' => '6', 'name' => 'a3', 'price' => 3.0)      
    );

    var $earned = array( 
        array('id' => '1', 'name' => 'r3', 'price' => 3.0),
        array('id' => '2', 'name' => 'a3', 'price' => 3.0),
        array('id' => '3', 'name' => 'b2', 'price' => 5.0),
        array('id' => '4', 'name' => 'm3', 'price' => 3.0),
        array('id' => '5', 'name' => 'b3', 'price' => 3.0),
        array('id' => '6', 'name' => 'a3', 'price' => 3.0)    
    );


    function __construct()
    {
        parent::__construct();
    }

    //return the number of parts
    public function getPart()
    {
        return sizeof($this->part);                
    }

    //return the number of assembled bot
    public function getAssembledBot()
    {
        return sizeof($this->assembledBot);    	
    }

    //return $ spent
    public function getSpent()
    {
        $total = 0.0;

        foreach($this->spent as $data)        
            $total+= $data['price'];            
        
        return $total;             
    }
    
    //return the number of earned
    public function getEarned()
    {
        return sizeof($this->earned);             
    }

}