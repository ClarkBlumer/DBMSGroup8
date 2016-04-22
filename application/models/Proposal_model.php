<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proposal_model
 *
 * @author frielj
 */
class Proposal_model extends CI_Model{
    const table = 'TBL_PROPOSAL';
    const idfield = 'PROPID';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insertProposal($data){
        
        $dateTime = new DateTime();
        $data['INSERT_DATE'] = date('d-M-Y 01:00:00');
              
        $this->db->trans_start();
        $this->db->insert(self::table, $data);  
        $prop = $this->getNewProposal(); 

        $this->db->trans_complete();
        var_dump($prop);
        return $prop;
    }
    
    public function updateProposal(){
        
    }
    
    public function getProposal(){

        $result = $this->db->query(''
            . 'SELECT * '
            . 'FROM '.self::table.' '
            . 'WHERE '.self::idfield.'= '.$this->session->PROPID);
 
        return $result->result_array();
    }
    
    public function getNewProposal(){
        $result = $this->db->query(''
            . 'SELECT '.self::idfield.' '
            . 'FROM '.self::table.' '
            . 'WHERE '.self::idfield.'= (SELECT MAX('.self::idfield.') FROM '.self::table.')');
    
    var_dump($result->result_array());   
        return $result->result_array();

    }
    //put your code here
}
