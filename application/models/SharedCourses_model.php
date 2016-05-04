<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *   Description of SharedCourse_model
 *   Author: Robert Fink
 *   University of Missouri System Shared Courses Application
 */

class SharedCourses_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function getClassesByInst($institution) {
        $this->db->select("*");
        $this->db->from("BBCRSSHARE.CS_PRI_CRSE");
        $this->db->where("INSTITUTION = '$institution'");
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getClassesBySecInst($institution) {
        $this->db->select("*");
        $this->db->from("BBCRSSHARE.CS_SEC_CRSE");
        $this->db->where("INSTITUTION = '$institution'");
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function selectPriCourses(){
        $this->db->select('*');
        $this->db->from('TBL_SHARED_PRI_COURSES');
        $this->db->where('PROPID', $this->session->PROPID);
        $result1 = $this->db->get();
        return $result1->result_array();
    }
    
    function selectSecCourses(){
        $this->db->select('*');
        $this->db->from('TBL_SHARED_SEC_COURSES');
        $this->db->where('PROPID', $this->session->PROPID);
        $result2 = $this->db->get();
        return $result2->result_array();
    }
    
     function insertPriCourse($data) {
        $this->db->trans_start();
        $this->db->set($data);
        $this->db->insert("TBL_SHARED_PRI_COURSES", $data);
        $this->db->trans_complete();
    }
    
    function insertSecCourse($data) {
        $this->db->trans_start();
        $this->db->set($data);
        $this->db->insert("TBL_SHARED_SEC_COURSES", $data);
        $this->db->trans_complete();
    }
    
    function insertXREF($data) {
        $this->db->trans_start();
        $this->db->set($data);
        $this->db->insert("BBCRSSHARE.CRS_XREF", $data);
        $this->db->trans_complete();
    }
    
}