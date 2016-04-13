
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
                    <div class="table">
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Institution</th>
                                    <th>Career</th>
                                    <th>Subject</th>
                                    <th>Catalog Number</th>
                                    <th>Title</th>
                                    <th>Topic</th>
                                    <th>Description</th>
                                    <th>Course Status</th>
                                    <th>Requested Course budget</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>                                        
                                        <select class="form-control" name="size">
                                            <!--Dynamically adding term values to dropdown-->
                                            <?php 
                                            foreach ($institution as $array) { ?>
                                                    <option value="<?php echo $array['INSTITUTION'];?>"><?php echo $array['INSTIT_DESCR'];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control" name="size">
                                            <!--Dynamically adding term values to dropdown-->
                                            <?php 
                                            foreach ($career as $array) { ?>
                                                    <option value="<?php echo $array['ACAD_CAREER'];?>"><?php echo $array['DESCR'];?></option>
                                            <?php
                                            }
                                            
                                            ?>
                                        </select>                                    
                                    </td>
                                    <td>john@example.com</td>
                                    <th>Institution</th>
                                    <th>Career</th>
                                    <th>Subject</th>
                                </tr>
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


<?php
   var_dump($offer_term);
   var_dump($career);
   

