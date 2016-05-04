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

        return $prop;
    }
    
    public function updateProposal($data){
        $data['MOD_BY'] = 'FRIELJ';
        
        
        $this->db->trans_start();
        $this->db->where('PROPID', $data['PROPID']);
        $this->db->update('TBL_PROPOSAL', $data);
        $prop = $this->getProposal();
        $this->db->trans_complete();
        
        return $prop;
        
        
    }
    
    public function getProposal(){

        $result = $this->db->query(''
            . 'SELECT * '
            . 'FROM '.self::table.' '
            . 'WHERE '.self::idfield.'= '.$this->session->PROPID);
        
        return $result->result_array();
    }
    
    public function processClob($proposal){
        $clobtext = null;
        foreach ($proposal as $value) {

            $clobtext = $value['PROP_DESCR'];      
        }
        
        return $clobtext;
    }
    
    public function getNewProposal(){
        $result = $this->db->query(''
            . 'SELECT '.self::idfield.' '
            . 'FROM '.self::table.' '
            . 'WHERE '.self::idfield.'= (SELECT MAX('.self::idfield.') FROM '.self::table.')');
      
        return $result->result_array();

    }
    //put your code here
}
