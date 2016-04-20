<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of QueryCourses_model
 *
 * @author frielj
 */
class QueryCourses_model extends CI_Model{
    
    function QueryCourse_model(){
            parent::__construct();
            $this->load->database();
    }
    
    public function getPrimaryCourses($data){
  
        $this->db->select("*");
        $this->db->order_by("PRI_SEQ_NUM", "asc");
        $this->db->from('TBL_PROP_PRI_COURSES');
        $this->db->where("PROPID = ".$data['PROPID']);
        
        $query = $this->db->get();
        return $query->result_array();        
    }
    
    public function getSecondaryCourses($data){
          
        $this->db->select("*");
        $this->db->order_by("PRI_SEQ_NUM", "asc");
        $this->db->from('TBL_PROP_SEC_COURSES');
        $this->db->where("PROPID = ".$data['PROPID']);
        
        $query = $this->db->get();
        return $query->result_array();  
    }


    public function getProposal($data){

        $this->db->select("*");
        
        $this->db->from('TBL_PROPOSAL');
        $this->db->where("PROPID = ".$data['PROPID']);
        
        $query = $this->db->get();
        return $query->result_array();          
    }
}
