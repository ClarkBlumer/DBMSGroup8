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
       /* $this->db->select_sum('PROP_BUDGET_REQUESTED');
        $this->db->from('TBL_PROPOSAL,TBL_SHARED_PRI_COURSES');
		$this->db->where('TBL_PROPOSAL.PROPID=TBL_SHARED_PRI_COURSES.PROPID');
		$this->db->group_by ('INSTITUTION');
		
        $query = $this->db->get();
        return $query->result_array();  */
        
        $this->db->select('INSTITUTION')
               ->select_sum('PRI_CRSE_BUDGET')
               ->from('TBL_PROP_PRI_COURSES')
               ->group_by('INSTITUTION');
        $result = $this->db->get();
        
     
        var_dump($result->result());
 
        $info['$jsonresult'] = json_encode($result->result_array());
        $info['result'] = $result;
        return $info;
    }
 
    function fundRequested(){
        /*
        $this->db-> select_sum($select = 'PROP_BUDGET_REQUESTED', $alias = 'fundRe');     
        $this->db->from('TBL_PROPOSAL,TBL_SHARED_PRI_COURSES');
	$this->db->where('TBL_PROPOSAL.PROPID=TBL_SHARED_PRI_COURSES.PROPID');
	$this->db->group_by ('INSTITUTION');
        $query = $this->db->get();
        return $query->result_array();  
         */
        
        /*
        $this->db-> select_sum($select = 'PROP_BUDGET_REQUESTED', $alias = 'fundRe');
        $this->db->from('TBL_PROPOSAL');
	$this->db->join('TBL_PROP_PRI_COURSES','TBL_PROP_PRI_COURSES.PROPID=TBL_PROPOSAL.PROPID','inner');
	$this->db->group_by ('TBL_PROP_PRI_COURSES.INSTITUTION');
        $query = $this->db->get();
        return $query->result_array();  
         *         $query = $this->db->query("PROP_BUDGET_REQUESTED AS fundRe, INSTITUTION AS INSTIT FROM TBL_PROPOSAL,TBL_SHARED_PRI_COURSES WHERE TBL_PROPOSAL.PROPID=TBL_SHARED_PRI_COURSES.PROPID GROUP BY INSTITUTION;");
         
         */
        
       /*
        $query = $this->db->query("SELECT PR.PROP_BUDGET_REQUESTED FROM"
                . " TBL_PROPOSAL PR");
        return $query->result_array();
        * 
        */
          $query = $this->db->query("SELECT SUM(PR.PROP_BUDGET_REQUESTED) AS FUNDRE, PRC.INSTITUTION AS INSTIT"
                  . " FROM TBL_PROPOSAL PR INNER JOIN TBL_PROP_PRI_COURSES PRC USING(PROPID)"
                  . " GROUP BY PRC.INSTITUTION");
        return $query->result_array();
        
         
    }
    function fundawarded(){
        $query = $this->db->query("SELECT SUM(P.PROP_BUDGET_REQUESTED) AS BUDGETAWAR,"
                . " PRC.INSTITUTION AS INSTIT FROM TBL_PROPOSAL P"
                . " INNER JOIN TBL_PROP_PRI_COURSES PRC USING(PROPID)"
                . " WHERE P.PROP_OFFER_STATUS='awrd' GROUP BY PRC.INSTITUTION");
        return $query->result_array();
    }
   
    function budgRePerTerm(){
          $query = $this->db->query("SELECT SUM(PR.PROP_BUDGET_REQUESTED) AS FUNDRE, PRC.INSTITUTION AS INSTIT, PR.PROP_OFFER_TERM AS OFTERM"
                  . " FROM TBL_PROPOSAL PR INNER JOIN TBL_PROP_PRI_COURSES PRC USING(PROPID)"
                  . " GROUP BY PR.PROP_OFFER_TERM, PRC.INSTITUTION"
                  . " ORDER BY PR.PROP_OFFER_TERM ASC");
        return $query->result_array();
    }
    
    //A pie chart of total requested by academic year and institution.
    function budRePerAcadYear(){
        $query=$this->db->query("SELECT a.ACAD_YEAR, PRC.INSTITUTION AS INSTIT, SUM(P.PROP_BUDGET_REQUESTED) AS BUDGET_REQ"
                . " FROM TBL_PROPOSAL P"
                . " INNER JOIN TBL_PROP_PRI_COURSES PRC USING(PROPID)"
                . " JOIN TBL_TERM a on P.PROP_OFFER_TERM = a.STRM"
                . " GROUP BY a.ACAD_YEAR, PRC.INSTITUTION"
                . " ORDER BY a.ACAD_YEAR");
        
        return $query->result_array();
    }
    

}
