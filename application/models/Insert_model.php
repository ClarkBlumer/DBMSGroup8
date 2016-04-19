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
        $this->db->trans_start();
        $this->db->insert('TBL_PROPOSAL', $data);
  
        $propId = $this->db->query(''
                . 'SELECT *'
                . 'FROM tbl_proposal '
                . 'WHERE PROPID = (SELECT MAX(PROPID)FROM tbl_proposal)');
        $this->db->trans_complete();
        
        return $propId->result_array();
    }
    
    function getNewPropId($data){
        
        
    }
    
    function insertPropPriCourse($data){
        $this->db->trans_start();
        $this->db->insert('TBL_PROP_PRI_COURSES', $data);
  
        $propId = $this->db->query(''
                . 'SELECT *'
                . 'FROM tbl_prop_pri_courses '
                . 'WHERE pri_seq_num = (SELECT MAX(pri_seq_num)FROM tbl_prop_pri_courses)');
        $this->db->trans_complete();
        
        return $propId->result_array();
    }        
    
}
