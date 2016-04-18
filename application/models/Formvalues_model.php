<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formvalues_model
 *
 * @author frielj
 */
class Formvalues_model extends CI_Model{
    //put your code here
    function Formvalues_model (){
        parent::__construct();
        $this->load->database();
    }
    
    //Get academic organizations for dropdown values
    function getAcadOrg(){
        $this->db->select("ACAD_ORG, DESCR");
        $this->db->order_by("DESCR", "asc");
        $this->db->from('TBL_ACAD_ORG');
        $this->db->where("EFF_STATUS = 'A'");
        
        $query = $this->db->get();
        return $query->result_array();
    }    

    //Get offer status for dropdown values
    function getOfferStatus() {
            $this->db->select("OFFER_STATUS, OFFER_DESCR");            
            $this->db->from('TBL_OFFER_STATUS');

            $query = $this->db->get();
            return $query->result_array();    
    }
    
    //Get terms for dropdown values
    function getTerm() {
        $this->db->select("STRM, DESCRSHORT");
        $this->db->order_by("STRM", "desc");
        $this->db->from('TBL_TERM');

        $query = $this->db->get();
        return $query->result_array();  
    }
    
    //Get academic careers for dropdown values
    function getCareer() {
        $this->db->select("ACAD_CAREER, DESCR");
        $this->db->from('TBL_CAREER');

        $query = $this->db->get();
        return $query->result_array();  
    }    
    //Get course status for dropdown values
    function getCourseStatus() {
        $this->db->select("*");
        $this->db->from('TBL_COURSE_STATUS');

        $query = $this->db->get();
        return $query->result_array();  
    }
    //Get faculty types for dropdown values
    function getFacultyType() {
        $this->db->select("*");
        $this->db->order_by("STRM", "desc");
        $this->db->from('TBL_FACULTY_TYPE');

        $query = $this->db->get();
        return $query->result_array();  
    }
    //Get Institutions for dropdown values
    function getInstitution() {
        $this->db->select("*");
        $this->db->order_by("INSTITUTION", "asc");
        $this->db->from('TBL_INSTITUTION');

        $query = $this->db->get();
        return $query->result_array();  
    }
    
    function getSubmittedBy(){
        $this->db->select("*");
        
        $this->db->from('TBL_USERS');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getSubject(){
        $this->db->select("SUBJECT");
        $this->db->distinct();
        $this->db->order_by("SUBJECT", "asc");
        $this->db->from("CSPRDC.PS_CRSE_OFFER");
        
        $query = $this->db->get();
        return $query->result_array();
    }

}
