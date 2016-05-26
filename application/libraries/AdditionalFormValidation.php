<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdditionalFormValidation
 *
 * @author frielj
 */
class AdditionalFormValidation extends CI_Form_validation {
    //put your code here
    function __construct($rules = array()) {
        parent::__construct($rules);
    }
    
    function is_currency($input){
      
            if (!is_numeric($input)){
                return FALSE;
            }
            return TRUE;
        
        
       
    }
}
