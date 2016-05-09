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
    
    
    /*  Find the max budget requested for all proposals for each campus
     *  SELECT MAX(P1.PROP_BUDGET_REQUESTED)
        AS MAX_BUDGET, INSTITUTION AS INSTIT
        FROM TBL_PROPOSAL P1
        INNER JOIN TBL_PROP_PRI_COURSES CS
        USING(PROPID)
        GROUP BY CS.INSTITUTION;
     */
    function maxBudgetRequestedByCampus(){
         
        $query = $this->db->query("SELECT MAX(P1.PROP_BUDGET_REQUESTED) AS Maximum_Budget, INSTITUTION AS Institution FROM TBL_PROPOSAL P1 INNER JOIN TBL_PROP_PRI_COURSES CS USING(PROPID) GROUP BY CS.INSTITUTION ORDER BY INSTITUTION");
        //var_dump($query->result_array());
        return $query->result_array();
    }
    
    
    /*  For each campus, find total number of pending proposals 
        SELECT COUNT(*) AS TOTAL_PEND_PROPOSALS,
        TBL_PROP_PRI_COURSES.INSTITUTION AS INSTIT  
        FROM TBL_PROPOSAL 
        INNER JOIN TBL_PROP_PRI_COURSES USING(PROPID)
        WHERE PROP_OFFER_STATUS ='pend'
        GROUP BY TBL_PROP_PRI_COURSES.INSTITUTION;
     */    
    function numberOfPendingProposalsByCampus(){
         
        $query = $this->db->query("SELECT COUNT(*) AS TOTAL_PENDING_PROPOSALS, TBL_PROP_PRI_COURSES.INSTITUTION AS INSTITUTION FROM TBL_PROPOSAL INNER JOIN TBL_PROP_PRI_COURSES USING(PROPID) WHERE PROP_OFFER_STATUS ='pend' GROUP BY TBL_PROP_PRI_COURSES.INSTITUTION ORDER BY TBL_PROP_PRI_COURSES.INSTITUTION");
        //var_dump($query->result_array());
        return $query->result_array();
    }
    
    
    /*  For each campus, find total number of warded proposals 
        SELECT COUNT(*) AS TOTAL_PEND_PROPOSALS,
        TBL_PROP_PRI_COURSES.INSTITUTION AS INSTIT  
        FROM TBL_PROPOSAL 
        INNER JOIN TBL_PROP_PRI_COURSES USING(PROPID)
        WHERE PROP_OFFER_STATUS ='awrd'
        GROUP BY TBL_PROP_PRI_COURSES.INSTITUTION;
     * 
     */
    function numberOfAwardedProposalsByCampus(){
         
        $query = $this->db->query("SELECT COUNT(*) AS TOTAL_PENDING_PROPOSALS, TBL_PROP_PRI_COURSES.INSTITUTION AS INSTITUTION FROM TBL_PROPOSAL INNER JOIN TBL_PROP_PRI_COURSES USING(PROPID) WHERE PROP_OFFER_STATUS ='awrd' GROUP BY TBL_PROP_PRI_COURSES.INSTITUTION ORDER BY TBL_PROP_PRI_COURSES.INSTITUTION");
        //var_dump($query->result_array());
        return $query->result_array();
    }
    
    
    /*  Find the number of proposals for each term 
        SELECT COUNT(*) AS NUM_OF_PROPOSALS,
        P.PROP_OFFER_TERM  FROM TBL_PROPOSAL P 
        GROUP BY P.PROP_OFFER_TERM; 
     */
    function numberOfPendingProposalsByTerm(){
        $query = $this->db->query("SELECT COUNT(*) AS NUMBER_OF_PROPOSALS,
        P.PROP_OFFER_TERM AS PROPOSED_OFFER_TERM  FROM TBL_PROPOSAL P 
        GROUP BY P.PROP_OFFER_TERM ORDER BY P.PROP_OFFER_TERM");
        return $query->result_array();
    }
    
    
    /*  Find the number of warded proposals for each term
        SELECT COUNT(*) AS NUM_OF_PROPOSALS,
        P.PROP_OFFER_TERM AS OFFER_TERM
        FROM TBL_PROPOSAL P 
        WHERE P.PROP_OFFER_STATUS='awrd'
        GROUP BY P.PROP_OFFER_TERM; 
     */    
    function numberOfAwardedProposalsByTerm(){
        $query = $this->db->query("SELECT COUNT(*) AS NUMBER_OF_PROPOSALS,
        P.PROP_OFFER_TERM AS OFFERED_TERM
        FROM TBL_PROPOSAL P 
        WHERE P.PROP_OFFER_STATUS='awrd'
        GROUP BY P.PROP_OFFER_TERM ORDER BY P.PROP_OFFER_TERM");
        return $query->result_array();
    }
}
