
<div class="container">
    <div class="col-lg-10">
        <fieldset>
            <legend >Enter New Proposal</legend>
            <form class="form-horizontal" role="form">
                
                <!--Anticipated Offer Term-->
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="prop_offer_term">Anticipated Offer Term</label>
                    <div class="col-xs-2 selectContainer">
                        <select class="form-control" name="size">
                            <!--Dynamically adding term values to dropdown-->
                            <?php 
                            foreach ($offer_term as $array) { ?>
                                    <option value="<?php echo $array['STRM'];?>"><?php echo $array['DESCRSHORT'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <!--Requested Budget-->
                <div class="form-group has-success">
                    <label class="control-label col-xs-3 col-md-3" for="prop_budget_requested">Requested Budget</label>
                    <div class="col-xs-2 input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
                
                <!--Proposal Description-->
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="prop_budget_requested">Proposal Description</label>
                    <div class="col-xs-9 input-group">
                        <textarea rows="4" class="form-control" ></textarea> 
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="prop_budget_requested">Proposed Primare Courses</label>
                </div>
                    <div class="form-group">
                    
                    
                            <div class="multi-field-wrapper">
                                <div class="multi-fields">
                                    <div class="multi-field">
                                        <div class="form-group">                                            
                                            <fieldset class="col-xs-2 selectContainer">
                                                <label class="control-label col-xs-3 col-md-3" for="prop_budget_requested">Institution</label>
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
                                                <label class="control-label col-xs-3 col-md-3" for="prop_budget_requested">Career</label>
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

                                            <fieldset class="form-group">                                                
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
                                        
                                        <button type="button" class="add-field">Add field</button>
                                        <button type="button" class="remove-field">Remove</button>
                                    </div>
                                </div>
                            </div>
                    
                                
                            </tbody>
                        </table>
                    </div>                    
                </div>                  
                
                <!-- Form Buttons: Submit, Reset -->
                <button type="submit" class="btn btn-default">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </fieldset>
    </div>



    
</div>


