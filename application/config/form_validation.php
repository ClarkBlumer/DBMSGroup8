<?php

/* 
This files sets the validation rules for forms
 */

$config = array(
    'proposal' => array(
        array(
            'field' => 'submitted_by',
            'label' => 'Submitted By',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Submitted By Required'
            )
        ),
        array(
            'field' => 'submit_date',
            'label' => 'Submit Date',
            'rules' => 'required',
            'errors' => array(
                'required' => 'Submit Date Required'
            )
        )
    ),
    'prop_courses' => array(
        array(
            'field' => 'subject',
            'label' => 'Subject',
            'rules' => 'trim|max_length[30]',
            'errors' => array(
                'max_length' => 'Subject cannot exceed 30 characters'
            )
        )
            
        //array(
          //  'field' => 'prop_budget_requested',
            //'label' => 'Requested Budget'//,
            //'rules' => 'is_currency',
            //'errors' => array(
            //    'is_currency' => 'NNNBudget must be in format of 00.00'
            //)
    )
        
        
    
    
    
);