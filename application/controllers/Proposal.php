<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proposal
 *
 * @author frielj
 */
class Proposal extends CI_Controller{
    public $data = [];
    public function __construct() {
        parent::__construct();
        $this->load->model('DropDownValues_model');
         
        $this->load->model('Proposal_model');
        
        
        

    }
    
    public function index1(){
        echo "in Proposal->index\n";
        
        $data['dropdowns'] = $this->DropDownValues_model->getDropDown();
        var_dump($data['dropdowns']);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposal', $data);
        $this->load->view('templates/footer',$data);
       
        
    }
    

    
    public function insert(){
        $data = ArrayToUpper::arrayToUp($this->input->post());

           
        $this->Proposal_model->insertProposal($data);
        
        
    }
    
    
    //put your code here
}
