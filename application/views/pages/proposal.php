
<div class="container">

    <div class="col-lg-10">
        <fieldset>
            <legend >Enter New Proposal</legend>
            <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/proposal/insert" method="post">
                
                
                <input type="hidden" name="mod_by" value="FRIELJ">
                
                <input type="hidden" name="insert_by" value="FRIELJ">
                
                
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="submitted_by">Submitted By</label>
                    <div class="col-xs-2 selectContainer">                        
                        <select  class="form-control" name="submitted_by">
                            <option value=""></option>
                            <!--Dynamically adding term values to dropdown-->
                            <?php 
                            foreach ($dropdowns['submitted_by'] as $array) { ?>
                                    <option value="<?php echo $array['USER_ID'];?>"><?php echo $array['LAST_NAME'].", ".$array['FIRST_NAME'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="date-picker-2" class="control-label col-xs-3 col-md-3">Submit Date</label>
                    <div class="controls col-xs-3">
                        <div class="input-group">
                            <input id="submit_date" name="submit_date" id="date-picker-2" type="text" class="date-picker" />
                            <label for="date-picker-2" class="input-group-addon btn"><span class="glyphicon glyphicon-calendar"></span>

                            </label>

                        </div>
                    </div>
                </div>
                
                <!--Anticipated Offer Term-->
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="prop_offer_term">Anticipated Offer Term</label>
                    <div class="col-xs-2 selectContainer">                        
                        <select  class="form-control" name="prop_offer_term">
                            <option value=""></option>
                            <!--Dynamically adding term values to dropdown-->
                            <?php 
                            foreach ($dropdowns['offer_term'] as $array) { ?>
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
                        <input name="prop_budget_requested" type="text" pattern="^\d*(\.\d{2}$)?" class="form-control" aria-label="Amount (to the nearest dollar)">
                        
                    </div>
                </div>
                
                <!--Offer Status-->
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="prop_offer_status">Offer Status</label>
                    <div class="col-xs-2 selectContainer">
                        <select  id="propOfferStatus" name="prop_offer_status" class="form-control">
                            <!--Dynamically adding term values to dropdown-->
                            <?php 
                            foreach ($dropdowns['offer_status'] as $array) { 
                                if ($array['OFFER_STATUS'] == 'pend'){
                            ?>
                                    <option value="<?php echo $array['OFFER_STATUS'];?>" selected><?php echo $array['OFFER_DESCR'];?></option>
                            <?php
                                } else {
                            ?>
                                    <option value="<?php echo $array['OFFER_STATUS'];?>"><?php echo $array['OFFER_DESCR'];?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
             
                    <label class="control-label col-xs-3 col-md-3" for="award_term">Award Term</label>
                    <div class="col-xs-2 selectContainer">
                        <select id="awardTerm" class="form-control" name="award_term">
                            <!--Dynamically adding term values to dropdown-->
                            <option value=""></option>
                            <?php 
                            foreach ($dropdowns['offer_term'] as $array) { ?>
                                    <option value="<?php echo $array['STRM'];?>"><?php echo $array['DESCRSHORT'];?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <!--Proposal Description-->
                <div class="form-group">
                    <label class="control-label col-xs-3 col-md-3" for="prop_descr">Proposal Description</label>
                    <div class="col-xs-9 input-group">
                        <textarea name="prop_descr" rows="4" class="form-control" ></textarea>                         
                    </div>
                </div>
                
                
                
               <button type="submit" class="btn btn-default">Submit</button>
                
            </form>
        </fieldset>
    </div>
    
</div>
