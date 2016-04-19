<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Insert_model
 *
 * @author frielj
 */
class Insert_model extends CI_Model{
    //put your code here
    function Formvalues_model (){
        parent::__construct();
        $this->load->database();
    }
    
    function insertProposal($data){ 
        $maxIdArray['table'] = 'TBL_PROPOSAL';
        $maxIdArray['idfield'] = 'PROPID';
        
        $this->db->trans_start();
        $this->db->insert($maxIdArray['table'], $data);
  
        $propId = $this->getNewId($maxIdArray);
                    
        $this->db->trans_complete();
        
        return $propId->result_array();
    }
    
    function getNewId($maxIdArray){
        return $this->db->query(''
                . 'SELECT * '
                . 'FROM '.$maxIdArray['table'].' '
                . 'WHERE '.$maxIdArray['idfield'].'= (SELECT MAX('.$maxIdArray['idfield'].') FROM '.$maxIdArray['table'].')');
        
        
    }
    
    function insertPropPriCourse($data){
        $maxIdArray['table'] = 'TBL_PROP_PRI_COURSES';
        $maxIdArray['idfield'] = 'PRI_SEQ_NUM';        
    
        $this->db->trans_start();
        $this->db->insert($maxIdArray['table'], $data);
  
        $propId = $this->getNewId($maxIdArray);
                    
        $this->db->trans_complete();
        
        return $propId->result_array();
    }  
    
    function insertPropSecCourse($data){
        
        
    }
    

    
}
