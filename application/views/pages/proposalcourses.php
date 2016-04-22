
<?php

foreach ($proposal as $value) {
    //This need to be coded once the login page is completed
    //$userid = $value['USERID'];
    //Temp userid
    $userid = 'FRIELJ';
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
            <div class="col-xs-4">Anticipated Offer Term: <?php echo $value['PROP_OFFER_TERM'];?></div>            
            <div class="col-xs-4">Offer Status: <?php echo $value['PROP_OFFER_STATUS'];?></div>
            <div class="col-xs-4">Award Term: <?php echo $value['AWARD_TERM'];?></div>  
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
    foreach ($primarycourses as $value) {
?>

  
    <div class="panel panel-custom-white">
      <div class="panel-heading panel-title">
          <h4 class="panel-title">
          <a class="panel-title" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $i;?>">
                
                    Institution: <?php echo $value['INSTITUTION'];?> 
                    Career: <?php echo $value['CAREER'];?>
                    Subject: <?php echo $value['SUBJECT'];?> 
                    Catalog Num: <?php echo $value['CATALOG_NUM'];?>
          </a>
          </h4>
      </div>
      <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
          <div class="panel-body col-xs-12">
              <div class="col-xs-10">Course Title: <?php echo $value['DESCR'];?></div> 
                <?php
                    if (!empty($value['DESCR_TOPICS'])){
                ?>
                <div class="col-xs-10" >Course Topic: <?php echo $value['DESCR_TOPICS'];?></div> 
                <?php
                    }
                ?>
<!--                <div class="col-xs-10">Course Description: <?php echo $value['LONG_DESCR'];?></div>-->
                <div class="col-xs-6" >Course Budget Request: <?php echo $value['PRI_CRSE_BUDGET'];?></div> 
                <div class="col-xs-6" >Course Status: <?php echo $value['COURSE_STATUS'];?></div> 
                

                
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
    foreach ($secondarycourses as $value) {
?>

  
    <div class="panel panel-custom-white">
      <div class="panel-heading panel-title ">
          <h4 class="panel-title">
          <a class="panel-title" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $j;?>">
                
                    Institution: <?php echo $value['INSTITUTION'];?> 
                    Career: <?php echo $value['CAREER'];?>
                    Subject: <?php echo $value['SUBJECT'];?> 
                    Catalog Num: <?php echo $value['CATALOG_NUM'];?>
          </a>
          </h4>
      </div>
      <div id="collapse<?php echo $j;?>" class="panel-collapse collapse">
          <div class="panel-body col-xs-12">
              <div class="col-xs-10">Course Title: <?php echo $value['DESCR'];?></div> 
                <?php
                    if (!empty($value['DESCR_TOPICS'])){
                ?>
                <div class="col-xs-10" >Course Topic: <?php echo $value['DESCR_TOPICS'];?></div> 
                <?php
                    }
                ?>
<!--                <div class="col-xs-10">Course Description: <?php echo $value['LONG_DESCR'];?></div>-->
                <div class="col-xs-6" >Course Budget Request: <?php echo $value['SEC_CRSE_BUDGET'];?></div> 
                <div class="col-xs-6" >Course Status: <?php echo $value['COURSE_STATUS'];?></div> 
            </div>
        </div>
    </div>

<?php
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