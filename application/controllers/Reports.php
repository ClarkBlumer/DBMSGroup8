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
    
    public function index()
    {        
        
        
        //Load header/body/footer
        $this->load->view('templates/header',$data);
        $this->load->view('pages/reports',$data);
        $this->load->view('templates/footer',$data);
    }
    
    public function report1(){
        $data['reports'] = $this->reports_model->getHighestBudgetForPending();
        $this->index();
    }
}
