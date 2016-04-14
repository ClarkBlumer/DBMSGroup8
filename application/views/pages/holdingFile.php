<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                                        <button type="button" class="remove-field btn btn-default">Remove</button>
                                        
                                    </div>
                                    
                                    
                                </div>
                                <button type="button" class="add-field btn btn-default">Add Primary Course</button>
                            </div>
                        
                        <!-- Form Buttons: Submit, Reset -->
                        <button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>  
