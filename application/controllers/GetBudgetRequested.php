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
class GetBudgetRequested extends CI_Controller {
    //put your code here
    private $data;
   
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('Fund_Requested');
    }
    
    public function index(){

        //get all proposals
        $data['bugetRe'] = $this->Fund_Requested->budgetrquested();
		 $data['va'] = 25;

		
        $this->load->view('templates/header',$data);
        $this->load->view('pages/allCharts',$data);
        $this->load->view('templates/footer',$data);
    }  
}
