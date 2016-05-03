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
class SharedCourses_model extends CI_Model{
    //const primarycoursetable = 'TBL_SHARED_PRI_COURSES';
    //const secondarycoursetable = 'TBL_SHARED_SEC_COURSES';
    //const propid = 'PROPID';
    //const priseqnum = 'PRI_SEQ_NUM';


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
    
     function insertPriCourse($data) {
        $this->db->trans_start();
        $this->db->set($data);
        var_dump($data);
        $this->db->insert("TBL_SHARED_PRI_COURSES", $data);
        $this->db->trans_complete();
    }
    
    function insertSecCourse($data) {
        $this->db->trans_start();
        $this->db->set($data);
        var_dump($data);
        $this->db->insert("TBL_SHARED_SEC_COURSES", $data);
        $this->db->trans_complete();
    }
    
    
    /*
    function getClasses($institution, $term) {
        $this->db->select("*");
        $this->db->from("BBCRSSHARE.CS_PRI_CRSE");
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('DESCRSHORT', $term);
        
        $query = $this->db->get();
        return $query->result_array();
    }
     */


}
