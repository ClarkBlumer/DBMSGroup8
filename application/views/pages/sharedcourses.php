<!--
    Author: Robert Fink
    University of Missouri System Shared Courses Application
-->
<script>
    function pri_xref(tbl){
        var cells = tbl.cells;
        document.getElementById('priInst').innerHTML = cells[1].innerHTML;
        document.getElementById('priStrm').innerHTML = cells[7].innerHTML;
        document.getElementById('priClass').innerHTML = cells[5].innerHTML;
        
        document.getElementById('xref_priInst').value = cells[1].innerHTML;
        document.getElementById('xref_priStrm').value = cells[7].innerHTML;
        document.getElementById('xref_priClass').value = cells[5].innerHTML;
        
    }
    
    function sec_xref(tbl){
        var cells = tbl.cells;
        document.getElementById('secInst').innerHTML = cells[1].innerHTML;
        document.getElementById('secStrm').innerHTML = cells[8].innerHTML;
        document.getElementById('secClass').innerHTML = cells[6].innerHTML;
        
        document.getElementById('xref_secInst').value = document.getElementById('secInst').innerHTML;
        document.getElementById('xref_secStrm').value = document.getElementById('secStrm').innerHTML;
        document.getElementById('xref_secClass').value = document.getElementById('secClass').innerHTML;
    }
    
</script>


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
    echo "<table id='xrefTable' class='table table-hover'>";
    ?>
    <form id='xrefForm' action='<?php echo base_url();?>index.php/sharedcourses/insertSharedXREF' method='POST'>
        <input id='xref_priInst' type='hidden' name='xref_priInst'>;
        <input id='xref_priStrm' type='hidden' name='xref_priStrm'>;
        <input id='xref_priClass' type='hidden' name='xref_priClass'>;
        <input id='xref_secInst' type='hidden' name='xref_secInst'>;
        <input id='xref_secStrm' type='hidden' name='xref_secStrm'>;
        <input id='xref_secClass' type='hidden' name='xref_secClass'>;
    <?php
    echo "<h4>Click a primary and secondary course for X-REF insertion.</h4>";
    echo "<th></th><th>PRI_INSTITUTION</th><th>PRI_STRM</th><th>PRI_CLASS_NBR</th><th>SEC_INSTITUTION</th><th>SEC_STRM</th><th>SEC_CLASS_NBR</th>";
    echo "<tr><td><button type='submit' class='btn btn-success' form='xrefForm'>Submit</button></td><td id='priInst'></td><td id='priStrm'></td><td id='priClass'></td><td id='secInst'></td><td id='secStrm'></td><td id='secClass'></td></tr>";
    echo "</form></table>";
    echo "<hr>";
      
    //display the table
    echo "<table class='table table-hover'>";
    echo "<tr><th>DESCRSHORT</th><th>Institution</th><th>CRSE_ID</th><th>SUBJECT</th><th>CATALOG_NBR</th><th>CLASS_NBR</th><th>CLASS_SECTION</th><th>STRM</th></tr>";
    foreach ($result1 as $value){
        $value['PROPID'] = $this->session->PROPID;
        $institution = $value['INSTITUTION'];
        $crse_id = $value['PRI_COURSE_ID'];
        $subject = $value['SUBJECT'];
        $catalog_nbr = $value['CATALOG_NUM'];
        $class_nbr = $value['CLASS_NBR'];
        $class_section = $value['CLASS_SECTION'];
        $descrshort = $value['DESCR'];
        $strm = $value['STRM'];
        $propid = $value['PROPID'];

        echo "<tr onclick='javascript: pri_xref(this)'><td>$descrshort</td><td>$institution</td><td>$crse_id</td><td>$subject</td><td>$catalog_nbr</td><td>$class_nbr</td><td>$class_section</td><td>$strm</td></tr>";
        
    }
    echo "</table>";
    
}
?>

<label class="control-label" for="Institution">Primary Institution</label>
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
        echo "<h3>No Secondary Courses Entered</h3>";
?>
        <label class="control-label" for="Institution2">Secondary Institution</label>
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

                <div id="response2"></div>
            </div>
    <?php
    } else {
        echo "<h3>Secondary Courses</h3>";
 
        //display the table
        echo "<table class='table table-hover'>";
        echo "<tr><th>DESCRSHORT</th><th>Institution</th><th>PRI_CRSE_ID</th><th>SEC_CRSE_ID</th><th>SUBJECT</th><th>CATALOG_NBR</th><th>CLASS_NBR</th><th>CLASS_SECTION</th><th>STRM</th></tr>";
        foreach ($result2 as $value){
            $value['PROPID'] = $this->session->PROPID;
            $institution = $value['INSTITUTION'];
            $pri_crse_id = $value['PRI_COURSE_ID'];
            $sec_crse_id = $value['SEC_COURSE_ID'];
            $subject = $value['SUBJECT'];
            $catalog_nbr = $value['CATALOG_NUM'];
            $class_nbr = $value['CLASS_NBR'];
            $class_section = $value['CLASS_SECTION'];
            $descrshort = $value['DESCR'];
            $strm = $value['STRM'];
            $propid = $value['PROPID'];

            echo "<tr onclick='javascript: sec_xref(this)'><td>$descrshort</td><td>$institution</td><td>$pri_crse_id</td><td>$sec_crse_id</td><td>$subject</td><td>$catalog_nbr</td><td>$class_nbr</td><td>$class_section</td><td>$strm</td></tr>";
        }
            echo "</table>";
    ?>
        <label class="control-label" for="Institution2">Secondary Institution</label>
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

                <div id="response2"></div>
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

<script>
function getByInst2(str) {
    if (str == "") {
        document.getElementById("response2").innerHTML = "";
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
                document.getElementById("response2").innerHTML = xmlhttp.responseText;
                echo(xmlhttp.responseText);
            }
        };
        xmlhttp.open("GET", "SharedCourses/getSecCourses?institution="+str, true);
        xmlhttp.send();
    }
}
</script>
