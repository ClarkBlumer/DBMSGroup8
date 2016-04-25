<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetClob_model
 *
 * @author frielj
 */
class GetClob_model extends CI_Model{
    //put your code here
    function getClob($value){
        $size = $value->size();
        $clob = $value->read($size);
        return $clob;
    }
}
