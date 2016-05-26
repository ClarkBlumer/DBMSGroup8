<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//ikikik
/**
 * Description of Proposal
 *
 * @author frielj
 */
class Getallproposals extends CI_Controller {
    //put your code here
    private $data;
   
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('List_proposals');
    }
    
    public function index(){

        //get all proposals
        $data['proposals'] = $this->List_proposals->getallproposals();
		

		
        $this->load->view('templates/header1',$data);
        $this->load->view('pages/listedproposals',$data);
        $this->load->view('templates/footer1',$data);
    }  
}
