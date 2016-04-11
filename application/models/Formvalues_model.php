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
        parent::Model();
    }
    
    function getAcadOrg(){
        $this->db->select("ACAD_ORG, DESCR");
        $this->db->order_by("DESCR0", "asc");
        $this->db->from('TBL_ACAD_ORG');
        $this->db->where("EFF_STATUS = 'A'");
        
        $query = $this->db->get();
        return $query->result;
    }
}
