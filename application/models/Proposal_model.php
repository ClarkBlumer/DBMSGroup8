<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proposal_model
 *
 * @author frielj
 */
class Proposal_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $table = 'porposal';
    }
    
    public function insertProposal($data){
        echo "In Proposal_model->insertProposal()";
        var_dump($data);
        
    }
    
    public function updateProposal(){
        
    }
    
    public function getProposal($propid){
        
    }
    
    public function getNewProposal(){
        
    }
    //put your code here
}
