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
class List_proposals extends CI_Model{
    //put your code here
    function List_proposals (){
        parent::__construct();
        $this->load->database();
    }

    //Get all proposal informations
    function getallproposals() {
        $this->db->select("*");
        $this->db->order_by('PROPID', 'asc');
        $this->db->from('TBL_PROPOSAL');

        $query = $this->db->get();
        return $query->result_array();  
    }

}
