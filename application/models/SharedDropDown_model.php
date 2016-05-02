<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DropDownValues_model
 *
 * @author rwfwcb
 */
class SharedDropDown_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getDropDown(){

        //get dropdowns
        $dropdowns['institution'] = $this->getInstitution();
        
        $dropdowns['term'] = $this->getTerm();

        return $dropdowns;
    }
    
    //Get Institutions for dropdown values
    function getInstitution() {
        $this->db->select("INSTITUTION");
        $this->db->distinct();
        $this->db->order_by("INSTITUTION", "asc");
        $this->db->from('BBCRSSHARE.CS_PRI_CRSE');

        $query = $this->db->get();
        //var_dump($query->result_array());
        return $query->result_array();
    }
    
    function getTerm(){
        $this->db->select("STRM, DESCRSHORT");
        $this->db->distinct();
        $this->db->order_by("STRM", "asc");
        $this->db->from("BBCRSSHARE.CS_PRI_CRSE");
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
/*
    function getSubject(){
        $this->db->select("SUBJECT");
        $this->db->distinct();
        $this->db->order_by("SUBJECT", "asc");
        $this->db->from("BBCRSSHARE.CS_PRI_CRSE");

        $query = $this->db->get();
        return $query->result_array();
    }
*/

    
}


    