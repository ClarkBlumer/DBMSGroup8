<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProposalCourses
 *
 * @author Clark
 */

class Reports extends CI_Controller{
    private $data;
    function __construct() {
        
        parent::__construct();
        $this->load->model('reports_model');
        //$this->load->model('List_proposals');
    }
    
    public function index($data)
    {                
        //Load header/body/footer
        $this->load->view('templates/header',$data);
        $this->load->view('pages/reports',$data);
        $this->load->view('templates/footer',$data);
    }
    
    public function maxBudgetRequestedByCampus(){
        $data['title'] = "Maximum Budget Requested by Campus";
        $data['reports'] = $this->reports_model->maxBudgetRequestedByCampus();
        $this->index($data);
    }
    
    public function numberOfPendingProposalsByCampus(){
        $data['title'] = "Number of Pending Proposals by Campus";
        $data['reports'] = $this->reports_model->numberOfPendingProposalsByCampus();
        $this->index($data);
    }
    
    public function numberOfAwardedProposalsByCampus(){
        $data['title'] = "Number of Awarded Proposals by Campus";
        $data['reports'] = $this->reports_model->numberOfAwardedProposalsByCampus();
        $this->index($data);
    }
    
    public function numberOfPendingProposalsByTerm(){
        $data['title'] = "Number of Pending Proposals by Term";
        $data['reports'] = $this->reports_model->numberOfPendingProposalsByTerm();
        $this->index($data);
    }
    
    public function numberOfAwardedProposalsByTerm(){
        $data['title'] = "Number of Awarded Proposals by Term";
        $data['reports'] = $this->reports_model->numberOfAwardedProposalsByTerm();
        $this->index($data);
    }
}

