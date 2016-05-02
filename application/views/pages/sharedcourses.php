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
</div>
<?php
}

if (empty($result1)){
    echo "<h2>No Shared Primary Courses Entered</h2>";
    
} else {
    echo "<h3>Primary Courses</h3>";
    //put tables here
    echo $this->table->generate($result1);
}
?>

<label class="control-label" for="prop_budget_requested">Institution</label>
<div class="form-group">
    <div class="col-xs-6 selectContainer">
        <select id='Inst' class="form-control" name="Institution" oninput='getByInst(this.value)'>
            <option value=""></option>
            <!--Dynamically adding values to dropdown-->
            <?php
            foreach ($dropdowns['institution'] as $value){
                $temp = $value['INSTITUTION'];
                echo "<option value='$temp'>$temp</option>";
            }
            ?>
        </select>
    </div>
    <br><br><br>
    
    <div id="response"></div>
</div>

<?php
if (!empty($result1)){
    if (empty($result2)){
        echo "<h2>No Secondary Courses Entered</h2>";
    } else {
        echo "<h3>Secondary Courses</h3>";
        //put tables here
        echo $this->table->generate($result1);
        ?>
        <label class="control-label" for="prop_budget_requested">Institution</label>
    <div class="form-group">
        <div class="col-xs-6 selectContainer">
            <select id='Inst2' class="form-control" name="Institution2" oninput='getByInst2(this.value)'>
                <option value=""></option>
                <!--Dynamically adding values to dropdown-->
                <?php
                foreach ($dropdowns['institution'] as $value){
                    $temp = $value['INSTITUTION'];
                    echo "<option value='$temp'>$temp</option>";
                }
                ?>
            </select>
        </div>
        <br><br><br>

        <div id="response"></div>
    </div>
<?php
    }
    
} 
?>
<script>
function getByInst(str) {
    if (str == "") {
        document.getElementById("response").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("response").innerHTML = xmlhttp.responseText;
                echo(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET", "SharedCourses/getPriCourses?institution="+str, true);
        xmlhttp.send();
    }
}
</script>
