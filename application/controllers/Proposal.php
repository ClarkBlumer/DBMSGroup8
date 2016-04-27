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
    const userid = 'FRIELJ';
    public function __construct() {
        parent::__construct();
        $this->load->model('DropDownValues_model');
        $this->load->model('ProposalCourses_model');
        $this->load->model('Proposal_model');
    }
    
    public function index(){
        $data['dropdowns'] = $this->getDropDowns();

        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposal', $data);
        $this->load->view('templates/footer',$data);
        
    }
    
    public function getDropDowns(){
        return  $this->DropDownValues_model->getDropDown();
    }
    
    public function insert(){

        $data = ArrayToUpper::arrayToUp($this->input->post());
       
        $proposalid = $this->Proposal_model->insertProposal($data);

        $propid = [];
        foreach ($proposalid as $value) {

            $propid = $value;
        }

        $this->session->set_userdata('USERID', self::userid);
        $this->session->set_userdata('PROPID',$propid['PROPID']);
       
        $data['proposal'] = $this->Proposal_model->getProposal();
        $clob = $this->Proposal_model->processClob($data['proposal']);
        $data['propclobtext'] = $clob->load();
        
        
        $data['dropdowns'] = $this->getDropDowns();

        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposalcourses',$data);
        $this->load->view('templates/footer',$data);

    }
    
    public function update(){
        
        $data = ArrayToUpper::arrayToUp($this->input->post());
 
        
        
        $proposalid = $this->Proposal_model->updateProposal($data);

        $propid = [];
         foreach ($proposalid as $value) {

            $propid = $value;
        }
        

        $this->session->set_userdata('USERID', self::userid);
        $this->session->set_userdata('PROPID',$propid['PROPID']);
       
        $data = $this->Proposal_model->getProposal();
        $data['proposal'] = $data;
        $clob = $this->Proposal_model->processClob($data['proposal']);
        $data['propclobtext'] = $clob->load();

        $data['dropdowns'] = $this->getDropDowns();
        $data['primarycourses'] = $this->ProposalCourses_model->getPrimaryCourses();
        $data['secondarycourses'] = $this->ProposalCourses_model->getSecondaryCourses();
        
        
        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposalcourses',$data);
        $this->load->view('templates/footer',$data);

    }
    
    function view($propid){
        if (!isset($data) || !$data['dropdowns']){
            $data['dropdowns'] = $this->getDropDowns();
        }
        //if primary sequence number exists in session, remove it.
        if ($this->session->PRI_SEQ_NUM){
            $this->session->unset_userdata('PRI_SEQ_NUM');            
        }
        $this->session->set_userdata('PROPID',$propid);
        
        $data['proposal'] = $this->Proposal_model->getProposal();
        
        $clob = $this->Proposal_model->processClob($data['proposal']);
        $data['propclobtext'] = $clob->load();
        

        $data['primarycourses'] = $this->ProposalCourses_model->getPrimaryCourses();
        
        $data['secondarycourses'] = $this->ProposalCourses_model->getSecondaryCourses();   
        
        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposalcourses',$data);
        $this->load->view('templates/footer',$data);
        
    }
    
    
    //put your code here
}
