<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProposalCourses
 *
 * @author Jeffrey
 */
class ProposalCourses extends CI_Controller{
    public $data = [];
    

    public function __construct() {
        parent::__construct();
        $this->load->model('DropDownValues_model');
        $this->load->model('Proposal_model');
        $this->load->model('ProposalCourses_model');
        
        
    }

    public function index(){
        $data['dropdowns'] = $this->DropDownValues_model->getDropDown();
        $propid = $this->session->PROPID;
        $data['proposal'] = $this->Proposal_model->getProposal();
        $data['propclobtext'] = $this->Proposal_model->processClob($data['proposal']);

        $clob = $this->Proposal_model->processClob($data['proposal']);
        $data['propclobtext'] = $clob->load();
        
        $data['primarycourses'] = $this->ProposalCourses_model->getPrimaryCourses();
        
        $data['secondarycourses'] = $this->ProposalCourses_model->getSecondaryCourses();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposalcourses', $data);
        $this->load->view('templates/footer',$data);
    }
    
    public function insertPrimaryCourse(){
        $data = ArrayToUpper::arrayToUp($this->input->post());
        $priseqnum = $this->ProposalCourses_model->insertPrimaryCourse($data);
        
        foreach ($priseqnum as $value){
            $priseq = $value;
        }
        $this->session->set_userdata('PRI_SEQ_NUM', $priseq['PRI_SEQ_NUM']);
        $this->index();
    }
    
    public function updatePrimaryCourse(){
        $data = ArrayToUpper::arrayToUp($this->input->post());
        $this->ProposalCourses_model->updatePrimaryCourse($data);
        $this->index();
    }
    
    public function insertSecondaryCourse(){
        
        $data = ArrayToUpper::arrayToUp($this->input->post());
        $this->ProposalCourses_model->insertSecondaryCourse($data);
        $data = [];
        $this->index();
    }
    
    public function updateSecondaryCourse(){
        $data = ArrayToUpper::arrayToUp($this->input->post());
        $this->ProposalCourses_model->updateSecondaryCourse($data);
        $this->index();
    }
    
    
    
    //put your code here
}
