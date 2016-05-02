<div class="container">
<div>
    <button type="button" class="btn btn-info btn-lg col-xs-2" data-toggle="modal" data-target="#myProposalModal">Update Proposal</button>
</div>
<!-- Modal -->
<div id="myProposalModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Proposal</h4>
            </div>
            <div class="modal-body ">
                
                <div class="container">

                    <div class="col-lg-10">
                        <fieldset>
                            
                            <form class="form-horizontal" role="form" action="
                                <?php 
                                echo base_url();
                                if (!$propinfo){
                                ?>index.php/proposal/insert" method="post">
                                <input type="hidden" name="insert_by" value="FRIELJ">
                                <?php
                                } else {
                                ?>index.php/proposal/update" method="post">
                                <?php
                                }    
                                ?>
                                <input type="hidden" name="mod_by" value="FRIELJ">
                                <input type="hidden" name="propid" value="<?php echo $value['PROPID']?>">
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-3 col-md-3" for="submitted_by">Submitted By</label>
                                    <div class="col-xs-3 selectContainer">                        
                                        <select  class="form-control" name="submitted_by">
                                            <option value=""></option>
                                            <!--Dynamically adding term values to dropdown-->
                                            <?php 
                                            foreach ($dropdowns['submitted_by'] as $array) { 
                                                if ($array['USER_ID'] == $propinfo['SUBMITTED_BY']){?>
                                                    <option value="<?php echo $array['USER_ID'];?>" selected><?php echo $array['LAST_NAME'].", ".$array['FIRST_NAME'];?></option>
                                            <?php
                                                } else { ?>
                                                    <option value="<?php echo $array['USER_ID'];?>"><?php echo $array['LAST_NAME'].", ".$array['FIRST_NAME'];?></option>
                                            <?php
                                                }                                                
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="date-picker-2" class="control-label col-xs-3 col-md-3">Submit Date</label>
                                    <div class="controls col-xs-3">
                                        <div class="input-group">
                                            <input id="submit_date" name="submit_date" id="date-picker-2" type="text" class="date-picker" 
                                                <?php if (isset($propinfo['SUBMIT_DATE'])){?> value="<?php echo $propinfo['SUBMIT_DATE'];}?>"/>
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
                                            foreach ($dropdowns['offer_term'] as $array) { 
                                                if ($array['STRM'] == $propinfo['PROP_OFFER_TERM']){?>                                             
                                            <option value="<?php echo $array['STRM'];?>" selected><?php echo $array['DESCRSHORT'];?></option>
                                            <?php
                                                }else {?>
                                            <option value="<?php echo $array['STRM'];?>"><?php echo $array['DESCRSHORT'];?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!--Requested Budget-->
                                <div class="form-group">
                                    <label class="control-label col-xs-3 col-md-3" for="prop_budget_requested">Requested Budget</label>
                                    <div class="col-xs-2 input-group">
                                        <span class="input-group-addon">$</span>
                                        <input name="prop_budget_requested" type="text" pattern="^\d*(\.\d{2}$)?" class="form-control" aria-label="Amount (to the nearest dollar)" 
                                            <?php if ($propinfo['PROP_BUDGET_REQUESTED'] != null || $propinfo['PROP_BUDGET_REQUESTED'] != ''){?> value="<?php echo $propinfo['PROP_BUDGET_REQUESTED'];}?>">
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
                                                if ($array['OFFER_STATUS'] == $propinfo['OFFER_STATUS']){?>
                                                    <option value="<?php echo $array['OFFER_STATUS'];?> selected"><?php echo $array['OFFER_DESCR'];?></option>
                                            <?php
                                                } else {
                                            ?>
                                                }
                                                    <option value="<?php echo $array['OFFER_STATUS'];?>"><?php echo $array['OFFER_DESCR'];?></option>                                                    
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-3 col-md-3" for="award_term">Award Term</label>
                                    <div class="col-xs-2  selectContainer">
                                        <select id="awardTerm" class="form-control" name="award_term">
                                            <!--Dynamically adding term values to dropdown-->
                                            <option value=""></option>
                                            <?php 
                                            foreach ($dropdowns['offer_term'] as $array) { 
                                                if ($array['STRM'] == $propinfo['AWARD_TERM']){?>
                                                    <option value="<?php echo $array['STRM'];?>" selected><?php echo $array['DESCRSHORT'];?></option>
                                            <?php
                                                } else {
                                            ?>
                                                    <option value="<?php echo $array['STRM'];?>"><?php echo $array['DESCRSHORT'];?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!--Proposal Description-->
                                <div class="form-group">
                                    <label class="control-label col-xs-3 col-md-3" for="prop_descr">Proposal Description</label>
                                    <div class="col-xs-8 input-group">
                                        <textarea name="prop_descr" rows="4" class="form-control" ><?php echo $propclobtext;?></textarea>                         
                                    </div>
                                </div>



                               <button type="submit" class="btn btn-default">Submit</button>

                            </form>
                        </fieldset>
                        <div class="modal-footer">
            
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
                    </div>

                </div>                
                
                
                
                
                
            </div>
        </div>

    </div>
</div>    
</div>