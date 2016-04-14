<?php

/* 
This files sets the validation rules for forms
 */

$config['validate_addproposal'] = array(
    array(
        'field' => '',
        'label' => '',
        'rules' => '',
        'errors' => array(
            'required' => ''
        )
    ),
    
    array(
        'field' => 'prop_budget_request',
        'label' => 'Requested Budget',
        'rules' => 'is_money',
        'errors' => array(
            'required' => ''
        )
    )
);