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
        $info = $this->Fund_Requested->budgetrquested();
        $result = $info['result'];
        $header = "";
        $rowdata = "";
 
        foreach ($result->result_array() as $value) {
           $rows = null;
            $temp = "";
            foreach ($value as $key => $col) {
               
                
                if (!isset($cols[$key]) || !array_key_exists($key, $cols)){                
                    $cols[$key] = $key;
                    if ($header == ""){
                        $header = "['".$key."' ";
                    }else {
                    $header = $header.", '".$key."'";
                    }
                    
                    
                }
                
            }
            
            $arraykeys = array_keys($value);            
            $lastkey = array_pop($arraykeys);
            foreach ($value as $key => $row) {
                if (!isset($rows[$key]) || !array_key_exists($key, $rows)){
                    $rows[$key] = $key;
                    if ($temp == ""){
                        $temp = "['".$row."' ";
                    }else {
                        if ($key == $lastkey){
                            $temp = $temp.", ".$row;
                        }else{
                            $temp = $temp.", '".$row."'";
                        }
                    }
                }
            }
            
            if ($rowdata == ""){
                $rowdata = $temp."]";
            }else {
                $rowdata = $rowdata.", ".$temp."]";
            }
              
        }
        
        $header = $header."], ";
        
	$data['chartdata'] = $header.$rowdata;
        $data['donutdata'] = $info['jsonresult'];
        $this->load->view('templates/header',$data);
        $this->load->view('pages/allCharts',$data);
        $this->load->view('templates/footer',$data);
    }  
}
