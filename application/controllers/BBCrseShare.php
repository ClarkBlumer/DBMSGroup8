<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BBCrseShare
 *
 * @author frielj
 */
class BBCrseShare extends CI_Controller{
    public $priInstit = '';
    private $priStrm;
    private $priSubject;
    private $priCatNum;
    private $priSecNum;
    
    private $secInstit;
    private $secStrm;
    private $secSubject;
    private $secCatNum;
    private $secSecNum;
            
    public function __construct() {
        parent::__construct();
        $this->load->model('SharedDropDown_model');
        $this->load->model("SharedCourses_model");
        $this->load->model("Proposal_model");
        $this->load->model('BBCrseShare_Model');
        $this->load->library('table');
        $this->load->helper('string');
        
        //$this->table->set_template(TBLTEMPLATE);

    }
    
    public function test(){
        //echo "<h1>this is a test</h1>";
        echo json_encode($this->input->post());
    }
    //Gets the approved primary and secondary courses from BBCRSSHARE tables
    public function getBBCrsShareCourses(){
        $data['bbCrseSharePri'] = $this->BBCrseShare_Model->getBBCrseSharePri();
        $data['bbCrseShareSec'] = $this->BBCrseShare_Model->getBBCrseShareSec();
        $data['priInstitution'] = $this->BBCrseShare_Model->getPriInstit();
        $data['secInstitution'] = $this->BBCrseShare_Model->getSecInstit();
        
        $this->load->view('pages/bbcrseshare',$data);
    }
    
    public function getPriInstitution() {
        $institution = $this->BBCrseShare_Model->getPriInstit();
        echo json_encode($institution);
    }
    
    public function getSecInstitution() {
        $institution = $this->BBCrseShare_Model->getSecInstit();
        echo json_encode($institution);
    }    
    public function toJson($array){
        return json_encode($array);
    }
    
    public function fromJson($json){
        return json_decode($json);
    }
    
    public function decodeVar($var){
        return urldecode($var);
    }
    
    public function getPriStrm($instit){
        $instit = $this->decodeVar($instit);
        
        $strm = $this->BBCrseShare_Model->getPriStrm(trim($instit));
        echo json_encode($strm);
    }
    
    public function getPriSubject($instit, $term){
        $instit = $this->decodeVar($instit);
        $term = $this->decodeVar($term);
        
        $subject = $this->BBCrseShare_Model->getPriSubject(trim($instit), trim($term));
       //$this->load->view('pages/test', $data);
        echo json_encode($subject);
        
    }
    
    public function getPriCatalogNum($instit, $term, $subject) {
        $instit = $this->decodeVar($instit);
        $term = $this->decodeVar($term);
        $subject = $this->decodeVar($subject);
        //$sub = urldecode($subject);
        
        $catalogNum = $this->BBCrseShare_Model->getPriCatalogNum(trim($instit), trim($term), trim($subject));
        echo json_encode($catalogNum);
    }
    
    public function getPriSectionNum($instit, $term, $subject, $catNum) {
        $instit = $this->decodeVar($instit);
        $term = $this->decodeVar($term);
        $subject = $this->decodeVar($subject);
        $catNum = $this->decodeVar($catNum);
        
        $sectionNum = $this->BBCrseShare_Model->getPriSectionNum(trim($instit), trim($term), trim($subject), trim($catNum));
        echo json_encode($sectionNum);
    }
    

    
    public function getSecStrm($instit){
        $instit = $this->decodeVar($instit);
        $secstrm = $this->BBCrseShare_Model->getSecStrm($instit);
        echo json_encode($secstrm);
    }
    
    public function getSecSubject($instit, $term){
        $instit = $this->decodeVar($instit);
        $term = $this->decodeVar($term);
        
        
        $subject = $this->BBCrseShare_Model->getSecSubject($instit, $term);
        echo json_encode($subject);
    }
    
    public function getSecCatalogNum($instit, $term, $subject) {
        $instit = $this->decodeVar($instit);
        $term = $this->decodeVar($term);
        $subject = $this->decodeVar($subject);
        
        
        $catalogNum = $this->BBCrseShare_Model->getSecCatalogNum($instit, $term, $subject);
        echo json_encode($catalogNum);
    }
    
    public function getSecSectionNum($instit, $term, $subject, $catNum) {
        $instit = $this->decodeVar($instit);
        $term = $this->decodeVar($term);
        $subject = $this->decodeVar($subject);
        $catNum = $this->decodeVar($catNum);
        
        $sectionNum = $this->BBCrseShare_Model->getSecSectionNum(trim($instit), trim($term), trim($subject), trim($catNum));
        echo json_encode($sectionNum);
    }
    
    public function dropDownData($d){
      
        $query= $this->BBCrseShare_Model->getDropDownData($d);
        echo json_encode($query);
    }
    
   
    
    
}
