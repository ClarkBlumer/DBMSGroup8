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
        $data['proposal'] = $this->Proposal_model->getProposal($this->session->propid);
        $data['primarycourses'] = $this->ProposalCourses_model->getPrimaryCourses();
        var_dump($data['proposal']);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposalcourses', $data);
        $this->load->view('templates/footer',$data);
    }
    
    public function insertPrimaryCourse(){
        $data = ArrayToUpper::arrayToUp($this->input->post());
        var_dump($data);
        //$this->ProposalCourses_model->insertPrimaryCourse($data);
        //$this->index();
    }
    //put your code here
}
