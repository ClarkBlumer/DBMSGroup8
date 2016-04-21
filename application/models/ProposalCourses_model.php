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
class ProposalCourses_model extends CI_Model{
    const primarycoursetable = 'TBL_PROP_PRI_COURSES';
    const secondarycoursetable = 'TBL_PROP_SEC_COURSES';
    const propid = 'PROPID';
    const priseqnum = 'PRI_SEQ_NUM';
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getPrimaryCourses(){
        $result = $this->db->query(''
            . 'SELECT * '
            . 'FROM '.self::primarycoursetable.' '
            . 'WHERE '.self::propid.'= '.$this->session->PROPID);
        return $result->result_array();
    }
    
    public function getSecondaryCourses(){
        $result = $this->db->query(''
            . 'SELECT * '
            . 'FROM '.self::secondarycoursetable.' '
            . 'WHERE '.self::propid.'= '.$this->session->PROPID.' '
                . 'AND '.self::priseqnum.'= '.$this->session->PRI_SEQ_NUM.' ');
        return $result->result_array();
    }
    
        public function getNewPrimaryCourse(){
        $result = $this->db->query(''
            . 'SELECT '.self::priseqnum.' '
            . 'FROM '.self::primarycoursetable.' '
            . 'WHERE '.self::priseqnum.'= (SELECT MAX('.self::priseqnum.') FROM '.self::primarycoursetable.')');
    
   
        return $result->result_array();

    }
    
    public function insertPrimaryCourse($data){
        
        $data['PROPID'] = $this->session->PROPID;
        $data['MOD_BY'] = 'FRIELJ';
              
        $this->db->trans_start();
        $this->db->insert(self::primarycoursetable, $data);
        $priseqnum = $this->getNewPrimaryCourse();
        $this->db->trans_complete();
        
        return $priseqnum;
        
    }
    
    public function insertSecondaryCourse($data){
        
        $data['PROPID'] = $this->session->PROPID;
        $data['PRI_SEQ_NUM'] = $this->session->PRI_SEQ_NUM;
        $data['MOD_BY'] = 'FRIELJ';
              
        $this->db->trans_start();
        $this->db->insert(self::secondarycoursetable, $data);
        //$secseqnum = $this->getNewPrimaryCourse();
        $this->db->trans_complete();
        
        
        
    }
    //put your code here
}
