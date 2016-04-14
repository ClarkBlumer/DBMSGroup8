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
class AddProposal extends CI_Controller {
    //put your code here
    private $data;
   
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('Formvalues_model');
        $this->load->model('Insert_model');

     


    }
    
    public function index(){

        //get offer term
        $data['offer_term'] = $this->Formvalues_model->getTerm();

        //get offer status values
        $data['offer_status'] = $this->Formvalues_model->getOfferStatus();
        
        //get institutions
        $data['institution'] = $this->Formvalues_model->getInstitution();
        
        //get institutions
        $data['career'] = $this->Formvalues_model->getCareer();
        
        //get users
        $data['submitted_by'] = $this->Formvalues_model->getSubmittedBy();       

        $this->load->view('templates/header',$data);
        $this->load->view('pages/addproposal',$data);
        $this->load->view('templates/footer',$data);
    }
    
    public function saveProposal() {
        //parse post variable
        foreach ($this->input->post() as $key => $value) {
            if($key != 'userid')
            $data[strtoupper($key)] = $value;            
        }
        
        $data['INSERT_DATE'] = date("j-M-Y");
        $data['INSERT_BY'] = 'TIGERT';
        $data['MOD_BY'] = 'FRIELJ';
        $data['MOD_DATE'] = 
        
        $this->Insert_model->insertProposal($data);
        
        $this->load->view('templates/header',$data);
        $this->load->view('pages/home',$data);
        $this->load->view('templates/footer',$data);
        
    }
        
}
