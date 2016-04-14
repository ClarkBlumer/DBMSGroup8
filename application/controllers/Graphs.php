<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Jeffrey
 */
class Graphs extends CI_Controller {

  public function allCharts(){
        $this->load->view('templates/header');
	
		$this->load->view('pages/allCharts');
		
		$this->load->view('templates/footer');
    }    

  public function fundingReq(){
        $this->load->view('templates/header');
		
		$this->load->view('pages/fundingReq');
		
		$this->load->view('templates/footer');
    }
	public function fundingAwarded(){
        $this->load->view('templates/header');
		
		$this->load->view('welcome_message');
		
		$this->load->view('templates/footer');
    }
	public function coursesDelivered(){
        $this->load->view('templates/header');
		
		$this->load->view('welcome_message');
		
		$this->load->view('templates/footer');
    }
	public function coursesDiscip(){
        $this->load->view('templates/header');
		
		$this->load->view('welcome_message');
		
		$this->load->view('templates/footer');
    }
	public function enrollmentGraph(){
        $this->load->view('templates/header');
		
		$this->load->view('welcome_message');
		
		$this->load->view('templates/footer');
    }
}


