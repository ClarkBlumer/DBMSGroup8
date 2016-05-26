<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BBCrseShare_Model
 *
 * @author frielj
 */
class BBCrseShare_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getBBCrseSharePri(){
        $this->db->select("*");
        $this->db->from(CS_PRI_CRSE);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getBBCrseShareSec(){
        $this->db->select("*");
        $this->db->from(CS_SEC_CRSE);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getPriInstit(){
        $this->db->select('INSTITUTION');
        $this->db->distinct();
        $this->db->from(CS_PRI_CRSE);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getPriStrm($institution){
        $this->db->select('STRM, DESCRSHORT');
        $this->db->distinct('STRM');
        $this->db->from(CS_PRI_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->order_by('STRM', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPriSubject($institution, $term){
        $this->db->select('SUBJECT');
        $this->db->distinct();
        $this->db->from(CS_PRI_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('STRM', $term);
        
        $this->db->order_by('SUBJECT', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPriCatalogNum($institution, $term, $subject){
        
        //$select = "SELECT CATALOG_NBR FROM CS_PRI_CRSE WHERE INSTITUTION='$institution' AND STRM='$term' AND SUBJECT='$subject'";
        $this->db->select('CATALOG_NBR');
        $this->db->distinct();
        $this->db->from(CS_PRI_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('STRM', $term);
        $this->db->where('SUBJECT', $subject);
        
        $this->db->order_by('CATALOG_NBR', 'asc');
        
        $query = $this->db->get();
        //$query = $this->db->query($select);
        return $query->result_array();
    }
    
    public function getPriSectionNum($institution, $term, $subject, $catNum){
        $this->db->select('CLASS_SECTION');
        $this->db->distinct();
        $this->db->from(CS_PRI_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('STRM', $term);
        $this->db->where('SUBJECT', $subject);
        $this->db->where('CATALOG_NBR', $catNum);
        
        $this->db->order_by('CLASS_SECTION', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }    
    
//Secondary Shared Courses
    public function getSecInstit(){
        $this->db->select('INSTITUTION');
        $this->db->distinct();
        $this->db->from(CS_SEC_CRSE);
        
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getSecStrm($institution){
        $this->db->select('STRM, DESCRSHORT');
        $this->db->distinct('STRM');
        $this->db->from(CS_SEC_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->order_by('STRM', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getSecSubject($institution, $term){
        $this->db->select('SUBJECT');
        $this->db->distinct();
        $this->db->from(CS_SEC_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('STRM', $term);
        
        $this->db->order_by('SUBJECT', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getSecCatalogNum($institution, $term, $subject){
        
        $this->db->select('CATALOG_NBR');
        //$this->db->distinct();
        $this->db->from(CS_SEC_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('STRM', $term);
        $this->db->where('SUBJECT', $subject);
        
        $this->db->order_by('CATALOG_NBR', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
        
    public function getSecSectionNum($institution, $term, $subject, $catNum){
        $this->db->select('CLASS_SECTION');
        $this->db->distinct();
        $this->db->from(CS_SEC_CRSE);
        $this->db->where('INSTITUTION', $institution);
        $this->db->where('STRM', $term);
        $this->db->where('SUBJECT', $subject);
        $this->db->where('CATALOG_NBR', $catNum);
        
        $this->db->order_by('CLASS_SECTION', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }    
    
    public function getDropDownData($d){
        $this->db->select('STRM, DESCRSHORT');
        $this->db->distinct('STRM');
        $this->db->from(CS_SEC_CRSE);
        $this->db->where('INSTITUTION', $d);
        $this->db->order_by('STRM', 'asc');
        
        $query = $this->db->get();
        
        return $query->result_array();
    }
}
