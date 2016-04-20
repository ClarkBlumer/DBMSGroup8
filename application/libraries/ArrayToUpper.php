<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArrayToUpper
 *
 * @author frielj
 */
class ArrayToUpper {
    static function arrayToUp($array){
        foreach ($array as $key => $value) {
            $data[strtoupper($key)] = $value;
            
        }
        return $data;
    }
    //put your code here
}
