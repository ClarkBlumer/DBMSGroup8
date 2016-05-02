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
        //$this->load->model("ProposalCourses_model");

    }

    public function index(){
        $data['dropdowns'] = $this->SharedDropDown_model->getDropDown();
        
        //$propid = $this->session->PROPID;
        $data['proposal'] = $this->Proposal_model->getProposal();
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
                //$this->input->post('PriSharedCourse', $value);
                $propid = $value['PROPID'];
                echo "<input form='coursesByInst$i' type='hidden' name='propid' value='$propid' >";
                echo "<input form='coursesByInst$i' type='hidden' name='institution' value='$institution' >";

                echo "<input form='coursesByInst$i' type='hidden' name='pri_course_id' value='$crse_id' >";
                echo "<input form='coursesByInst$i' type='hidden' name='subject' value='$subject' >";
                echo "<input form='coursesByInst$i' type='hidden' name='catalog_num' value='$catalog_nbr' >";
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
           }        //$this->load->view('pages/insert_pri_shared_course', $data);
    
    public function insertSharedPriCourse(){
        
        $data = array(
            "PROPID" => $this->input->post('propid'),
            "PRI_COURSE_ID" => $this->input->post('pri_course_id'),
            "INSTITUTION" => $this->input->post('institution'),            
            "SUBJECT" => $this->input->post('subject'),
            "CATALOG_NUM" => $this->input->post('catalog_num'),
            "DESCR" => $this->input->post('descr'),
            "STRM" => $this->input->post('strm'),
            "CLASS_SECTION" => $this->input->post('class_section'),
            "MOD_BY" => $this->input->post('mod_by')
        );
        
        //$data = ArrayToUpper::arrayToUp($this->input->post());
        echo "This is so frustrating:";
        var_dump($data);
                
        $this->SharedCourses_model->insertPriCourse($data);
        //$this->index();
        redirect('/sharedcourses', 'refresh');

    }
}
