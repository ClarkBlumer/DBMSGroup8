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
    <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/addproposal/savePropPriCourse" method="post">
        <?php echo "Prop id: ".$value['PROPID']."\n";?>
        <input type="hidden" name="propid" value="<?php echo $value['PROPID']?>">
        
        <div class="form-group">
            <label class="control-label col-xs-3 col-md-3" for="instituion">Institution</label>
            <div class="col-xs-2 selectContainer">
                <select  id="institution" name="institution" class="form-control">
                    <!--Dynamically adding term values to dropdown-->
                    <?php 
                    foreach ($institution as $array) { ?>
                            <option value="<?php echo $array['INSTITUTION'];?>"><?php echo $array['INSTIT_DESCR'];?></option>
                    <?php
                    }
                    ?>
                </select>
             </div>



            <label class="control-label col-xs-3 col-md-3" for="career">Career</label>
            <div class="col-xs-2 selectContainer">
                <select  id="career" name="career" class="form-control">
                    <!--Dynamically adding term values to dropdown-->
                    <?php 
                    foreach ($career as $array) { ?>
                            <option value="<?php echo $array['ACAD_CAREER'];?>"><?php echo $array['DESCR'];?></option>
                    <?php
                    }
                    ?>
                </select>
             </div>
        </div>
        
        
        <div class="form-group">        
            <label class="control-label col-xs-3 col-md-3" for="subject">Subject</label>
            <div class="col-xs-2">
                <input id="subject" name="subject" type="text" class="form-control">
            </div>
        
            <label class="control-label col-xs-3 col-md-3" for="catalog_num">Catalog Number</label>
            <div class="col-xs-2">
                <input id="catalog_num" name="catalog_num" type="text" class="form-control">
            </div>
        </div>
        
        <div class="form-group">        
            <label class="control-label col-xs-3 col-md-3" for="descr">Course Title</label>
            <div class="col-xs-9">
                <input id="descr" name="descr" type="text" class="form-control">
            </div>
        </div>
        
        <div class="form-group">        
            <label class="control-label col-xs-3 col-md-3" for="descr_topics">Course Topic</label>
            <div class="col-xs-9">
                <input id="descr_topics" name="descr_topics" type="text" class="form-control">
            </div>
        </div>
        
                
                
                
                
            
  
        
        <button type="submit" class="btn btn-default">Submit</button>    
    </form>
</div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($subject);
var_dump($insertedProp);


?>

