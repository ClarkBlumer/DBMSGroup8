<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProposalCourses
 *
 * @author Bobby
 */
class SharedCourses extends CI_Controller{
    public $data = [];
    

    public function __construct() {
        parent::__construct();
        $this->load->model('SharedDropDown_model');
        $this->load->model("SharedCourses_model");
        $this->load->model("Proposal_model");
        $this->load->library('table');
        //$this->load->model("ProposalCourses_model");

    }

    public function index(){
        
        $data['dropdowns'] = $this->SharedDropDown_model->getDropDown();
        
        //$propid = $this->session->PROPID;
        $data['proposal'] = $this->Proposal_model->getProposal();
        $data['result1'] = $this->SharedCourses_model->selectPriCourses();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/sharedcourses', $data);
        //$this->load->view('pages/insert_pri_shared_course', $data);
        $this->load->view('templates/footer',$data);
    }
    
    public function getPriCourses(){
        $institution = $this->input->get('institution');
        $i =1;
        
        $data['selectedInst'] = $this->SharedCourses_model->getClassesByInst($institution);
           echo "<table class='table table-hover'><tr><th>DESCRSHORT</th><th>Institution</th><th>CRSE_ID</th><th>SUBJECT</th><th>CATALOG_NBR</th><th>CLASS_NBR</th><th>CLASS_SECTION</th><th>STRM</th></tr>";
            foreach ($data['selectedInst'] as $value){
                $value['PROPID'] = $this->session->PROPID;
                $institution = $value['INSTITUTION'];
                $crse_id = $value['CRSE_ID'];
                $subject = $value['SUBJECT'];
                $catalog_nbr = $value['CATALOG_NBR'];
                $class_nbr = $value['CLASS_NBR'];
                $class_section = $value['CLASS_SECTION'];
                $descrshort = $value['DESCRSHORT'];
                $strm = $value['STRM'];
                //$load_dttm_pc = $value['LOAD_DTTM_PC'];
                //$lastupddttm_pc = $value['LASTUPDDTTM_PC'];

                ?>
                <form id='coursesByInst<?php echo $i;?>' class='form-horizontal' role='form' action="<?php echo base_url();?>index.php/sharedcourses/insertSharedPriCourse" method="POST">
                <?php

                $propid = $value['PROPID'];
                echo "<input form='coursesByInst$i' type='hidden' name='propid' value='$propid' >";
                echo "<input form='coursesByInst$i' type='hidden' name='institution' value='$institution' >";
                echo "<input form='coursesByInst$i' type='hidden' name='pri_course_id' value='$crse_id' >";
                echo "<input form='coursesByInst$i' type='hidden' name='subject' value='$subject' >";
                echo "<input form='coursesByInst$i' type='hidden' name='catalog_num' value='$catalog_nbr' >";
                echo "<input form='coursesByInst$i' type='hidden' name='class_nbr' value='$class_nbr' >";
                echo "<input form='coursesByInst$i' type='hidden' name='class_section' value='$class_section' >";
                echo "<input form='coursesByInst$i' type='hidden' name='descr' value='$descrshort' >";
                echo "<input form='coursesByInst$i' type='hidden' name='strm' value='$strm' >";
                echo "<input form='coursesByInst$i' type='hidden' name='mod_by' value='FRIELJ' >";
                echo "</form>";
                //echo "<input type='hidden' name='load_dttm_pc' value='$load_dttm_pc' >";
                //echo "<input type='hidden' name='lastupddttm' value='$lastupddttm_pc' >";
                echo "<tr><td>$descrshort</td><td>$institution</td><td><button form='coursesByInst$i' type='submit' class='btn btn-link'>$crse_id</button></td><td>$subject</td><td>$catalog_nbr</td><td>$class_nbr</td><td>$class_section</td><td>$strm</td></tr>";
                $i++;
            }
                echo "</table>";
           }
           
    public function getSecCourses(){
        $institution = $this->input->get('institution');
        $i =1;
        
        $data['selectedSecInst'] = $this->SharedCourses_model->getClassesBySecInst($institution);
  
        echo "<table class='table table-hover'><tr><th>INSTITUTION</th><th>PRI_CRSE_ID</th><th>SEC_CRSE_ID</th><th>SUBJECT</th><th>CATALOG_NBR</th><th>CLASS_NBR</th><th>CLASS_SECTION</th><th>STRM</th></tr>";
            foreach ($data['selectedSecInst'] as $value){
                $value['PROPID'] = $this->session->PROPID;
                $institution = $value['INSTITUTION'];
                $crse_id = $value['CRSE_ID'];
                $subject = $value['SUBJECT'];
                $catalog_nbr = $value['CATALOG_NBR'];
                $class_nbr = $value['CLASS_NBR'];
                $class_section = $value['CLASS_SECTION'];
                $strm = $value['STRM'];
                //$descrshort = $value['DESCRSHORT'];
                //$load_dttm_pc = $value['LOAD_DTTM_PC'];
                //$lastupddttm_pc = $value['LASTUPDDTTM_PC'];
                
               
                ?>
                <form id='coursesBySecInst<?php echo $i;?>' class='form-horizontal' role='form' action="<?php echo base_url();?>index.php/sharedcourses/insertSharedSecCourse" method="POST">
                <?php
                //$this->input->post('PriSharedCourse', $value);
                $propid = $value['PROPID'];
                echo "<input form='coursesBySecInst$i' type='hidden' name='propid' value='$propid' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='institution' value='$institution' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='sec_course_id' value='$crse_id' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='subject' value='$subject' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='catalog_num' value='$catalog_nbr' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='class_nbr' value='$class_nbr' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='class_section' value='$class_section' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='strm' value='$strm' >";
                echo "<input form='coursesBySecInst$i' type='hidden' name='mod_by' value='FRIELJ' >";
                echo "</form>";
                echo "<tr><td>$institution</td><td><input form='coursesBySecInst$i' type='text' name='pri_course_id' placeholder='Primary Course ID'></td><td><button form='coursesBySecInst$i' type='submit' class='btn btn-link'>$crse_id</button></td><td>$subject</td><td>$catalog_nbr</td><td>$class_nbr</td><td>$class_section</td><td>$strm</td></tr>";
                $i++;
            }
                echo "</table>";
           }
    
    public function insertSharedPriCourse(){
        
        $data = array(
            "PROPID" => $this->input->post('propid'),
            "PRI_COURSE_ID" => $this->input->post('pri_course_id'),
            "INSTITUTION" => $this->input->post('institution'),            
            "SUBJECT" => $this->input->post('subject'),
            "CATALOG_NUM" => $this->input->post('catalog_num'),
            "CLASS_NBR" => $this->input->post('class_nbr'),
            "DESCR" => $this->input->post('descr'),
            "STRM" => $this->input->post('strm'),
            "CLASS_SECTION" => $this->input->post('class_section'),
            "MOD_BY" => $this->input->post('mod_by')
        );
        
        //var_dump($data);
                
        $this->SharedCourses_model->insertPriCourse($data);
       
        redirect('/sharedcourses', 'refresh');

    }
    
    public function insertSharedSecCourse(){
        
        $data = array(
            "PROPID" => $this->input->post('propid'),
            "PRI_COURSE_ID" => $this->input->post('pri_course_id'), //NEED TO FIND HOW TO QUERY THIS VALUE
            "SEC_COURSE_ID" => $this->input->post('sec_course_id'),
            "INSTITUTION" => $this->input->post('institution'),            
            "SUBJECT" => $this->input->post('subject'),
            "CATALOG_NUM" => $this->input->post('catalog_num'),
            "CLASS_NBR" => $this->input->post('class_nbr'),
            "STRM" => $this->input->post('strm'),
            "CLASS_SECTION" => $this->input->post('class_section'),
            "MOD_BY" => $this->input->post('mod_by')
        );
        
        //var_dump($data);
                
        $this->SharedCourses_model->insertSecCourse($data);

        redirect('/sharedcourses', 'refresh');

    }
}
