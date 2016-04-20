<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DropDownValues
 *
 * @author frielj
 */
class DropDownValues extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('DropDownValues_model');
        
    }
    
    //put your code here
     function dropdowns(){
        echo "DropDownValues\n";
        
                //get offer term
        $dropDown['offer_term'] = $this->DropDownValues_model->getTerm();
  

        //get offer status values
        $dropDown['offer_status'] = $this->DropDownValues_model->getOfferStatus();
        
        //get institutions
        $dropDown['institution'] = $this->DropDownValues_model->getInstitution();
        
        //get institutions
        $dropDown['career'] = $this->DropDownValues_model->getCareer();
        
        //get users
        $dropDown['submitted_by'] = $this->DropDownValues_model->getSubmittedBy(); 
        
        //get subject
        $dropDown['subject'] = $this->DropDownValues_model->getSubject();
        
        //get course status
        $dropDown['course_status'] = $this->DropDownValues_model->getCourseStatus();
        
        return $dropDown;
    }
}
