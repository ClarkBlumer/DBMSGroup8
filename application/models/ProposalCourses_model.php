<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProposalCourses_model
 *
 * @author Jeffrey
 */
class ProposalCourses_model extends CI_Model{
    const table = 'TBL_PROP_PRI_COURSES';
    const propid = 'PROPID';
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getPrimaryCourses(){
        $result = $this->db->query(''
            . 'SELECT * '
            . 'FROM '.self::table.' '
            . 'WHERE '.self::propid.'= '.$this->session->PROPID);
        return $result->result_array();
    }
    
    public function insertPrimaryCourse($data){
        
        $data['PROPID'] = $this->session->PROPID;
        $data['MOD_BY'] = 'FRIELJ';
              
        $this->db->trans_start();
        $this->db->insert(self::table, $data);  
                        
        $this->db->trans_complete();
        
    }
    //put your code here
}
