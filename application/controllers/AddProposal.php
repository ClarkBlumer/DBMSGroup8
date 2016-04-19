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
class AddProposal extends CI_Controller {
    //put your code here
    private $data;
   
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('Formvalues_model');
        $this->load->model('Insert_model');

     


    }
    
    public function index(){

        $data = $this->getComboValues($this->data);

        $this->load->view('templates/header',$data);
        $this->load->view('pages/addproposal',$data);
        $this->load->view('templates/footer',$data);
    }
    
    public function getCV(){
        
    }


    public function getComboValues($data){
        //get offer term
        $data['offer_term'] = $this->Formvalues_model->getTerm();

        //get offer status values
        $data['offer_status'] = $this->Formvalues_model->getOfferStatus();
        
        //get institutions
        $data['institution'] = $this->Formvalues_model->getInstitution();
        
        //get institutions
        $data['career'] = $this->Formvalues_model->getCareer();
        
        //get users
        $data['submitted_by'] = $this->Formvalues_model->getSubmittedBy(); 
        
        //get subject
        $data['subject'] = $this->Formvalues_model->getSubject();
        
        return $data;
    }
    
    public function getNewPropId($data){
        return $this->Insert_model->insertProposal($data);
    }
            
    
    public function saveProposal() {
        //parse post variable
        $data = $this->arrayToUpper();
        
        $data['INSERT_DATE'] = date("j-M-Y");
        $data['INSERT_BY'] = 'TIGERT';
        $data['MOD_BY'] = 'FRIELJ';
        //$data['MOD_DATE'] = 
       
        $data['insertedProp'] = $this->getNewPropId($data);
        //var_dump($data);
        //var_dump($data['insertedProp']);
        $data = $this->getComboValues($data);
        

        $this->load->view('templates/header',$data);
        $this->load->view('pages/addproppricourse',$data);
        $this->load->view('templates/footer',$data);
        
    }
    
    public function getPriCourseSeq($data){
        return $this->Insert_model->insertPropPriCourse($data);
        
    }
    
    public function arrayToUpper(){
        foreach ($this->input->post() as $key => $value) {
            if($key != 'userid')
                $data[strtoupper($key)] = $value;
            
        }
        return $data;
    }

    public function savePropPriCourse(){
        
        $data = $this->arrayToUpper();

        $arraySize = $this->getArraySize($data);
        
        for ($i=0;$i<$arraySize;$i++){
            foreach ($data as $key => $value) {
                if (is_array($value)){
                    
                    $query[$key] = $value[$i];
                } else {
                    $query[$key] = $value;
                }

            }
            $query['MOD_BY'] = 'FRIELJ';
            var_dump($query);
            $newCourseSeq = $this->getPriCourseSeq($query);
            var_dump($newCourseSeq);
        
        }
        
       
       

        $data = $this->getComboValues($data);
        
        
    
    }
    public function parseQueryData($data){

            
       
    }
    
    public function getArraySize($data){
        foreach ($data as $key => $value) {
            if (is_array($value)){
                $arraySize = count($value);
                return $arraySize;
            }
        }
    }
        
}
