<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Test
 *
 * @author frielj
 */
class Test extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('SharedDropDown_model');
        $this->load->model("SharedCourses_model");
        $this->load->model("Proposal_model");
        $this->load->model('BBCrseShare_Model');
        $this->load->library('table');
        
        //$this->table->set_template(TBLTEMPLATE);

    }
    
    public function arraytest(){
        var_dump($this->input->post());
        $data = $this->input->post();
        var_dump($data);
        echo 'PriInstitution: '.$data['PriInstitution'];
        
        
    }
}
