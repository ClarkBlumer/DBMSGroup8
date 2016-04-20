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
            <div class="col-xs-4" >Proposal: <?php echo $value['PROPID'];?></div> 
            <div class="col-xs-4" >Submitted By: <?php echo $value['SUBMITTED_BY'];?></div> 
            <div class="col-xs-4" >Submit Date: <?php echo $value['SUBMIT_DATE'];?></div> 
        </div>
        <div class="panel-body">
            <div class="col-xs-4">Anticipated Offer Term: <?php echo $value['PROP_OFFER_TERM'];?></div>            
            <div class="col-xs-4">Offer Status: <?php echo $value['PROP_OFFER_STATUS'];?></div>
            <div class="col-xs-4">Award Term: <?php echo $value['AWARD_TERM'];?></div>  
        </div>
    </div>
<?php
}
?>

<h3>Secondary Courses</h3>
<form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/addproposal/savePropSecCourse" method="post">
<?php

foreach ($priCourses as $value) {
    //This need to be coded once the login page is completed
    //$userid = $value['USERID'];
    //Temp userid

?>

<div class="container">
    <!--Proposal Header-->
    <div class="panel panel-green">
        <div class="panel-heading col-xs-12">
            <h3 class="col-xs-12">Primary Course Information</h3>
            <div class="col-xs-12" >Primary Sequence: <?php echo $value['PRI_SEQ_NUM'];?></div> 
            <div class="col-xs-3" >Institution: <?php echo $value['INSTITUTION'];?></div> 
            <div class="col-xs-3" >Career: <?php echo $value['CAREER'];?></div>
            <div class="col-xs-3">Subject: <?php echo $value['SUBJECT'];?></div>            
            <div class="col-xs-3">Catalog Number: <?php echo $value['CATALOG_NUM'];?></div>
            <div class="col-xs-12">Course Title: <?php echo $value['DESCR'];?></div>
            <?php if ($value['DESCR_TOPICS'] != null){
                echo '<div class="col-xs-12">Course Topics: '.$value['DESCR_TOPICS'].'</div>';
            }?>
        </div>
        
        <div class="panel-body col-xs-12">
            <h3 class="col-xs-12">Secondary Course Information</h3>
            <?php
                
            ?>
<!--           <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/addproposal/savePropSecCourse" method="post">-->
                <input type="hidden" name="propid" value="<?php echo $value['PROPID'];?>">
                
                <div class="form-group">

                    <div class="multi-field-wrapper">
                        <div class="multi-fields">
                            <div class="multi-field">
                                    <div class="panel panel-green">
                                        <input type="hidden" name="pri_seq_num[]" value="<?php echo $value['PRI_SEQ_NUM'];?>">
                                        <div class="panel-heading col-xs-12">
                                            <h3 class="col-xs-12">Enter Secondary Course Information</h3>
                                            <div class="form-group">
                                                <fieldset class="col-xs-2 selectContainer">
                                                    <label class="control-label" for="prop_budget_requested">Institution</label>
                                                    <select id="INSTITUTION" class="form-control col-md-3" name="institution[]">
                                                        <!--Dynamically adding term values to dropdown-->

                                                         <?php 
                                                        foreach ($institution as $array) { ?>
                                                                <option value="<?php echo $array['INSTITUTION'];?>"><?php echo $array['INSTIT_DESCR'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </fieldset>

                                                <fieldset class="col-xs-2 selectContainer">
                                                    <label class="control-label" for="prop_budget_requested">Career</label>
                                                    <select id="ACAD_CAREER" class="form-control" name="career[]">
                                                        <!--Dynamically adding career values to dropdown-->
                                                         <?php 
                                                        foreach ($career as $array) { ?>
                                                                <option value="<?php echo $array['ACAD_CAREER'];?>"><?php echo $array['DESCR'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>                                
                                                </fieldset>
                                                <fieldset class="col-xs-4">
                                                    <label class="control-label " for="SUBJECT">Subject</label>
                                                    <input name="subject[]" id="SUBJECT" type="text" class="form-control input-sm">
                                                </fieldset>
                                                <fieldset class="col-xs-4">     
                                                    <label class="control-label" for="CATALOG_NUM">Catalog Number</label>   
                                                    <input name="catalog_num[]"id="CATALOG_NUM" type="text" class="form-control">
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <fieldset class="form-group col-xs-12"> 
                                                    <label class="control-label" for="CATALOG_NUM">Course Title</label>   
                                                    <input name="descr[]" id="DESCR" type="text" class="form-control">
                                                    <label class="control-label" for="DESCR_TOPICS">Course Topic</label>   
                                                    <input name="descr_topics[]" id="DESCR_TOPICS" type="text" class="form-control">
                                                </fieldset>
                                                <fieldset class="form-group col-xs-12">
                                                    <label class="control-label" for="LONG_DESCR">Course Description</label>   
                                                    <textarea name="long_descr" rows="4" class="form-control" ></textarea>
                                                </fieldset>                             
                                            </div>

                                            <div class="form-group">
                                                <fieldset class="col-xs-2 selectContainer">
                                                    <label class="control-label" for="COURSE_STATUS">Course Status</label>
                                                    <select id="COURSE_STATUS" class="form-control" name="course_status[]">
                                                        <!--Dynamically adding course_status values to dropdown-->
                                                         <?php 
                                                        foreach ($course_status as $array) { ?>
                                                                <option value="<?php echo $array['COURSE_STATUS'];?>"><?php echo $array['COURSE_STATUS_DESCR'];?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select> 
                                                </fieldset>
                                                <fieldset class="col-xs-2 selectContainer">
                                                    <label class="control-label" for="sec_crse_budget">Requested Budget</label>
                                                    <div class=" input-group">
                                                        <span class="input-group-addon">$</span>
                                                        <input name="sec_crse_budget" type="text" pattern="^\d*(\.\d{2}$)?" class="form-control" aria-label="Amount (to the nearest dollar)">

                                                    </div>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>

                    <button type="button" class="remove-field btn btn-block">Remove</button>

                    </div>

                        </div>

                        <button type="button" class="add-field btn btn-default">Add Primary Course</button>

                    </div>

                    <!-- Form Buttons: Submit, Reset -->
 

                </div>
<!--            </form>-->
        </div>
    </div>
    
</div>   
<button type="submit" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
<?php
}
?>    
</form>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($subject);



?>

<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});    
</script>
