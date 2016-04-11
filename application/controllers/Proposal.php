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
class Proposal extends CI_Controller {
    //put your code here
    private $data = [];
    
    function Proposal() {
        parent::Controller();
        
        $this->load->model('proposal_model');
    }
    
    public function addproposal(){
        $page = 'pages/addproposal';
        loadpage($page);
    }
    
    public function save () {
        
    }
    
    
    public function loadpage($page){
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
    }
}
