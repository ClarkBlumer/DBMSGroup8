<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Insert_model
 *
 * @author frielj
 */
class Insert_model extends CI_Model{
    //put your code here
        function Formvalues_model (){
        parent::__construct();
        $this->load->database();
    }
    
    function insertProposal($data){
        var_dump($data);
        $this->db->insert('TBL_PROPOSAL', $data);
    }
}
