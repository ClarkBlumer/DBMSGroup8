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
         
        $this->load->model('Proposal_model');
    }
    
    public function index(){
        echo "in Proposal->index\n";
        
        $data['dropdowns'] = $this->DropDownValues_model->getDropDown();

        $this->load->view('templates/header',$data);
        $this->load->view('pages/proposal', $data);
        $this->load->view('templates/footer',$data);
        
    }
    
    public function insert(){
        $data = ArrayToUpper::arrayToUp($this->input->post());
        var_dump($data);
        $data['proposalid'] = $this->Proposal_model->insertProposal($data);

        $proposalid = [];
        foreach ($data['proposalid'] as $value) {
            $proposalid = $value;
        }
        $this->session->set_userdata('USERID', self::userid);
        $this->session->set_userdata('PROPID',$proposalid['PROPID']);
/*
        $this->load->view('templates/header');
        $this->load->view('pages/proposalcourses');
        $this->load->view('templates/footer');
*/
    }
    
    
    //put your code here
}
