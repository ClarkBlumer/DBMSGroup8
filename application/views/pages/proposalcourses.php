
<?php

$propinfo = $proposal[0];

foreach ($proposal as $value) {
    
    //This need to be coded once the login page is completed
    //$userid = $value['USERID'];
    //Temp userid
    $userid = 'FRIELJ';
    $this->session->set_userdata('PROPID',$value['PROPID']);
?>
<div class="container">
    <!--Proposal Header-->
    <div class="panel panel-default">
        <div class="panel-heading col-xs-12">
            <div class="col-xs-3" >Proposal: <?php echo $value['PROPID'];?></div> 
            <div class="col-xs-3" >Submitted By: <?php echo $value['SUBMITTED_BY'];?></div> 
            <div class="col-xs-3" >Submit Date: <?php echo $value['SUBMIT_DATE'];?></div>
            <div class="col-xs-3" ><?php include '/modals/proposal_modal.php';?></div>
        </div>
        <div class="panel-body">
            <div class="col-xs-3">Anticipated Offer Term: <?php echo $value['PROP_OFFER_TERM'];?></div>            
            <div class="col-xs-3">Offer Status: <?php echo $value['PROP_OFFER_STATUS'];?></div>
           
            <div class="col-xs-3">Award Term: <?php echo $value['AWARD_TERM'];?></div> 
             <?php 
            if ($value['PROP_OFFER_STATUS'] == 'awrd'){
            ?>
            <div class="col-xs-3" ><a href="<?php echo base_url();?>index.php/getallproposals">Enter Shared Courses</a></div>
            <?php
            } else {
            ?>
            <div class="col-xs-3 " ><font color="red">Offer Status must be 'award' to enter Shared Courses. Update proposal to change status.</font></div>
            <?php
            }
            ?>
            <div class="col-xs-12">Proposal Detail: <?php echo $propclobtext;?></div> 
               
        </div>
    </div>
</div>
<?php
}
?>

<?php
if (empty($primarycourses)){
?>  
<div class="container">
    <h2 class="panel-title">
        No Primary Courses Entered
    </h2>
<!-- Trigger the modal with a button -->

    
    
</div>
<?php
} else {
?>
<div class="container">
<div class="panel-group" id="accordion1">
    
<?php
    $i = 1;
    foreach ($primarycourses as $privalue) {
        $priseqnum = $privalue['PRI_SEQ_NUM'];

?>

  
    <div class="panel panel-custom-white">
      <div class="panel-heading panel-title">
                         
            <h4 class="panel-title">
            <a class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $i;?>">

                      Institution: <?php echo $privalue['INSTITUTION'];?> 
                      Career: <?php echo $privalue['CAREER'];?>
                      Subject: <?php echo $privalue['SUBJECT'];?> 
                      Catalog Num: <?php echo $privalue['CATALOG_NUM'];?>
            </a>
            </h4>
        
          
      </div>
      <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
          <div class="panel-body col-xs-12">
              <div class="col-xs-10">Course Title: <?php echo $privalue['DESCR'];?></div> 
                <?php
                    if (!empty($privalue['DESCR_TOPICS'])){
                ?>
                <div class="col-xs-10" >Course Topic: <?php echo $privalue['DESCR_TOPICS'];?></div> 
                <?php
                    }
                ?>
<!--                <div class="col-xs-10">Course Description: <?php echo $privalue['LONG_DESCR'];?></div>-->
                <fieldset>
                    <div class="col-xs-4" >Course Budget Request: <?php echo $privalue['PRI_CRSE_BUDGET'];?></div> 
                    <div class="col-xs-4" >Course Status: <?php echo $privalue['COURSE_STATUS'];?></div> 
                    <div class="col-xs-3"><?php include '/modals/updateprimarycourse_modal.php'; ?></div>
                </fieldset>

                
 <h3>Secondary Courses</h3>                  
<?php
if (empty($secondarycourses)){
?>
                             
<div class="container">
    <h2 class="panel-title">
        No Secondary Courses Entered
    </h2>
<!-- Trigger the modal with a button -->
  
</div>
<?php
} else {
?>
<div class="container">
<div class="panel-group" id="accordion2">
    
<?php

    $j = 100;
    foreach ($secondarycourses as $secvalue) {
        if ($secvalue['PRI_SEQ_NUM'] == $priseqnum){
?>

  
    <div class="panel panel-custom-white">
      <div class="panel-heading panel-title ">
          <h4 class="panel-title">
          <a class="panel-title" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $j;?>">
                
                    Institution: <?php echo $secvalue['INSTITUTION'];?> 
                    Career: <?php echo $secvalue['CAREER'];?>
                    Subject: <?php echo $secvalue['SUBJECT'];?> 
                    Catalog Num: <?php echo $secvalue['CATALOG_NUM'];?>
          </a>
          </h4>
      </div>
      <div id="collapse<?php echo $j;?>" class="panel-collapse collapse">
          <div class="panel-body col-xs-12">
              <div class="col-xs-10">Course Title: <?php echo $secvalue['DESCR'];?></div> 
                <?php
                    if (!empty($secvalue['DESCR_TOPICS'])){
                ?>
                <div class="col-xs-10" >Course Topic: <?php echo $secvalue['DESCR_TOPICS'];?></div> 
                <?php
                    }
                ?>
<!--                <div class="col-xs-10">Course Description: <?php echo $secvalue['LONG_DESCR'];?></div>-->
                <fieldset>
                    <div class="col-xs-4" >Course Budget Request: <?php echo $secvalue['SEC_CRSE_BUDGET'];?></div> 
                    <div class="col-xs-4" >Course Status: <?php echo $secvalue['COURSE_STATUS'];?></div> 
                    <div class="col-xs-3"><?php include '/modals/updatesecondarycourse_modal.php'; ?></div>
                </fieldset>
            </div>
        </div>
    </div>

<?php
        }
$j++;
}
?>
</div>    
</div>
          
<?php
}
?>
 
    
                
<?php
include '/modals/proposedsecondarycourse_modal.php';
?>
              
          </div>
</div>
                    
                
                
                
                
                
                
                
                
                



<?php
$i++;
}
?>
</div> 
</div>
<?php    
}
?>
<?php include '/modals/proposedprimarycourse_modal.php';?>