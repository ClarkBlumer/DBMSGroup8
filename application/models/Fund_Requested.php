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
class Fund_Requested extends CI_Model{
    //put your code here
    function Fund_Requested (){
        parent::__construct();
        $this->load->database();
    }

    //Get all proposal informations
    function budgetrquested() {
        $this->db->select_sum('PROP_BUDGET_REQUESTED');
        $this->db->from('TBL_PROPOSAL,TBL_SHARED_PRI_COURSES');
		$this->db->where('TBL_PROPOSAL.PROPID=TBL_SHARED_PRI_COURSES.PROPID');
		$this->db->group_by ('INSTITUTION');
		
        $query = $this->db->get();
        return $query->result_array();  
    }

}
