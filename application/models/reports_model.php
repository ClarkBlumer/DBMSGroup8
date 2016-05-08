<?php

/**
 * Description of reports_model
 *
 * @author Clark
 */
class Reports_model extends CI_Model{
    function Reports_model (){
        parent::__construct();
        $this->load->database();
    }
    
    //Get all proposal information
    function getallreports() {
        $this->db->select("*");
        $this->db->order_by('PROPID', 'asc');
        $this->db->from('TBL_PROPOSAL');

        $query = $this->db->get();
        return $query->result_array();  
    }    
    
    
    
    /*  SELECT MAX(P1.PROP_BUDGET_REQUESTED)
        AS MAX_BUDGET, INSTITUTION AS INSTIT
        FROM TBL_PROPOSAL P1
        INNER JOIN TBL_PROP_PRI_COURSES CS
        USING(PROPMAX(P1.PROP_BUDGET_REQUESTED)ID)
        WHERE P1.PROP_OFFER_STATUS='pend'
        GROUP BY CS.INSTITUTION;
     */
    function getHighestBudgetForPending(){
        /*
        $this->db->select_max("PROP_BUDGET_REQUESTED");
        $this->db->from("TBL_PROPOSAL");
        $this->db->join("TBL_PROP_PRI_COURSES");

        //$this->db->using("(PROPMAX(P1.PROP_BUDGET_REQUESTED)ID)");
        $this->db->group_by("INSTITUTION");
        $this->db->where("PROP_OFFER_STATUS='pend'");
        $query = $this->db->get();
         */
         
        $query = $this->db->query("SELECT MAX(P1.PROP_BUDGET_REQUESTED)AS MAX_BUDGET, INSTITUTION AS INSTIT FROM TBL_PROPOSAL P1 INNER JOIN TBL_PROP_PRI_COURSES CS USING(PROPID)WHERE P1.PROP_OFFER_STATUS='pend' GROUP BY CS.INSTITUTION");
        var_dump($query->result_array());
        return $query->result_array();
    }
}
