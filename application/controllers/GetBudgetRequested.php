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
        $result = $this->Fund_Requested->budgetrquested();
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
                    echo "<h3>Temp: ".$temp."</h3>";
                }
            }
            
            if ($rowdata == ""){
                $rowdata = $temp."]";
            }else {
                $rowdata = $rowdata.", ".$temp."]";
            }
            
            var_dump($value);
            
        }
        
        $data['cd'] = "['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]";
        $header = $header."], ";
        echo "<h3>Columns: ".$header."</h3>";           
        echo "<h3>Row Data: ".$rowdata."</h3>";
	$data['chartdata'] = $header.$rowdata;
        echo "<h3>Total Data: ".$data['chartdata']."</h3>";
        $this->load->view('templates/header',$data);
        $this->load->view('pages/allCharts',$data);
        $this->load->view('templates/footer',$data);
    }  
}
