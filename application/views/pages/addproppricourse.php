<?php

foreach ($insertedProp as $value) {
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
    <h3>Enter Proposed Primary Course</h3>
 <div class="form-group">
                    
        <div class="multi-field-wrapper">
            <div class="multi-fields">
                <div class="multi-field">
                    <div class="form-group">
                        <h3>Proposed Primary Course</h3>
                    </div>

                    <div class="form-group">                                            
                        <fieldset class="col-xs-2 selectContainer">
                            <label class="control-label" for="prop_budget_requested">Institution</label>
                            <select id="INSTITUTION" class="form-control" name="size">
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
                            <select id="ACAD_CAREER" class="form-control" name="size">
                                <!--Dynamically adding term values to dropdown-->
                                 <?php 
                                foreach ($career as $array) { ?>
                                        <option value="<?php echo $array['ACAD_CAREER'];?>"><?php echo $array['DESCR'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </fieldset>

                        <fieldset class="form-group col-md-3">                                                
                            <label class="control-label" for="SUBJECT">Subject</label>
                            <input id="SUBJECT" type="text" class="form-control input-sm">
                            <label class="control-label" for="CATALOG_NUM">Catalog Number</label>   
                            <input id="CATALOG_NUM" type="text" class="form-control">
                            <label class="control-label" for="CATALOG_NUM">Course Title</label>   
                            <input id="DESCR" type="text" class="form-control">
                            <label class="control-label" for="COURSE_TOPIC">Course Topic</label>   
                            <input id="COURSE_TOPIC" type="text" class="form-control">
                        </fieldset>

                    </div>
                    <fieldset class="form-group col-md-3">
                    <button type="button" class="remove-field btn btn-default">Remove</button>
                    </fieldset>

                </div>


            </div>
            <fieldset class="form-group col-md-3">
                <button type="button" class="add-field btn btn-default">Add Primary Course</button>
            </fieldset>
            </div>
            <fieldset class="form-group col-md-3">
                <button type="button" class="add-field btn btn-default">Add Primary Course</button>
            </fieldset>
        </div>

        <!-- Form Buttons: Submit, Reset -->

   
    <fieldset class="form-group col-md-3">
        <button type="submit" class="btn btn-default">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button> 
    </fieldset>
</div>
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