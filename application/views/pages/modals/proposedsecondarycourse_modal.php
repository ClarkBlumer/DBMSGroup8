<div class="container">
    
        <div class="col-xs-6">
    <button type="button" class="btn btn-info btn-md col-xs-6" data-toggle="modal" data-target="#mySecModal">Click To Enter Secondary Course</button>
        </div>
    <div class="col-xs-6"></div>
<!-- Modal -->
<div id="mySecModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Enter Secondary Course</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/proposalcourses/insertsecondarycourse" method="post">
                    <input type="hidden" name="PRI_SEQ_NUM" value="<?php echo $privalue['PRI_SEQ_NUM'];?>"
                    <div class="panel panel-green">
                        <div class="panel-heading col-xs-12">
                            <div class="form-group">
                                <fieldset class="col-xs-3 selectContainer">
                                    <label class="control-label" for="prop_budget_requested">Institution</label>
                                    <select id="INSTITUTION" class="form-control col-md-3" name="institution">
                                        <!--Dynamically adding term values to dropdown-->

                                         <?php 
                                        foreach ($dropdowns['institution'] as $value) { ?>
                                                <option value="<?php echo $value['INSTITUTION'];?>"><?php echo $value['INSTIT_DESCR'];?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </fieldset>

                                <fieldset class="col-xs-3 selectContainer">
                                    <label class="control-label" for="prop_budget_requested">Career</label>
                                    <select id="ACAD_CAREER" class="form-control" name="career">
                                        <!--Dynamically adding career values to dropdown-->
                                         <?php 
                                        foreach ($dropdowns['career'] as $array) { ?>
                                                <option value="<?php echo $array['ACAD_CAREER'];?>"><?php echo $array['DESCR'];?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>                                
                                </fieldset>
                                <fieldset class="col-xs-3">
                                    <label class="control-label " for="SUBJECT">Subject</label>
                                    <input name="subject" id="SUBJECT" type="text" class="form-control input-sm">
                                </fieldset>
                                <fieldset class="col-xs-3">     
                                    <label class="control-label" for="CATALOG_NUM">Catalog Number</label>   
                                    <input name="catalog_num" id="CATALOG_NUM" type="text" class="form-control">
                                </fieldset>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <fieldset class="form-group col-xs-12"> 
                                    <label class="control-label" for="CATALOG_NUM">Course Title</label>   
                                    <input name="descr" id="DESCR" type="text" class="form-control">
                                    <label class="control-label" for="DESCR_TOPICS">Course Topic</label>   
                                    <input name="descr_topics" id="DESCR_TOPICS" type="text" class="form-control">
                                </fieldset>
                                <fieldset class="form-group col-xs-12">
                                    <label class="control-label" for="LONG_DESCR">Course Description</label>   
                                    <textarea name="long_descr" rows="4" class="form-control" ></textarea>
                                </fieldset>                             
                            </div>

                            <div class="form-group">
                                <fieldset class="col-xs-3 selectContainer">
                                    <label class="control-label" for="COURSE_STATUS">Course Status</label>
                                    <select id="COURSE_STATUS" class="form-control" name="course_status">
                                        <!--Dynamically adding course_status values to dropdown-->
                                         <?php 
                                        foreach ($dropdowns['course_status'] as $array) { ?>
                                                <option value="<?php echo $array['COURSE_STATUS'];?>"><?php echo $array['COURSE_STATUS_DESCR'];?></option>
                                        <?php
                                        }
                                        ?>
                                    </select> 
                                </fieldset>
                                <fieldset class="col-xs-4 selectContainer">
                                    <label class="control-label" for="pri_crse_budget">Requested Budget</label>
                                    <div class=" input-group">
                                        <span class="input-group-addon">$</span>
                                        <input name="sec_crse_budget" type="text" pattern="^\d*(\.\d{2}$)?" class="form-control" aria-label="Amount (to the nearest dollar)">

                                    </div>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>    
</div>

