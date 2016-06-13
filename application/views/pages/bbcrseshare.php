<?php
var_dump($priInstitution); 
var_dump($secInstitution);?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<script language='JavaScript' type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Display Page</title>
</head>
<!--
<form method="POST" action="<?php echo base_url();?>index.php/test/arraytest">
<select id="priInstition" name="PriInstitution" oninput='getPriStrm(this.value)'>
    <option value=""></option>
    <?php foreach ($priInstitution as $instit){ ?>
    <option value="<?php echo $instit['INSTITUTION']; ?>" <?php echo set_select('PriInstitution',$instit['INSTITUTION']);?>><?php echo $instit['INSTITUTION']; ?></option>
    <?php } ?>
</select>

<select id="priStrm1" name="PriStrm" oninput='getPriSubject(this.value)'></select>

<select id="priSubject1" name="PriSubject" oninput='getPriCatalogNum(this.value)'></select>

<select id="priCatalogNum1" name="PriCatalogNum" oninput="getPriSectionNum(this.value)"></select>

<select id="priSectionNum1" name="PriSectionNum"></select>

<!--Secondary Shared courses-->
<!--
<select id="secInstition" name="SecInstitution" oninput='getSecStrm(this.value)'>
    <option value=""></option>
    <?php foreach ($secInstitution as $instit){ ?>
    <option value="<?php echo $instit['INSTITUTION']; ?>" <?php echo set_select('SecInstitution',$instit['INSTITUTION']);?>><?php echo $instit['INSTITUTION']; ?></option>
    <?php } ?>
</select>

<select id="secStrm" name="SecStrm" oninput='getSecSubject(this.value)'></select>

<select id="secSubject" name="SecSubject" oninput='getSecCatalogNum(this.value)'></select>


<select id="secCatalogNum" name="SecCatalogNum" oninput="getSecSectionNum(this.value)"></select>

<select id="secSectionNum" name="SecSectionNum"></select>

<button onclick="testarray">testarray</button>
    <input type="submit"/>    
</form>
-->
<div id="myDiv"></div>

<script type="text/javascript">
    document.body.onload = createInputRow;
    
    var baseURL = "<?php echo base_url().'index.php/bbcrseshare/getPriInstitution/';?>";
    var selectedPriInstitution;
    var selectedPriTerm;
    var selectedPriSubject;
    var selectedPriCatalogNum;
    var selectedPriSectionNum;
    
    var selectedSecInstitution;
    var selectedSecTerm;
    var selectedSecSubject;
    var selectedSecCatalogNum;
    
    var param = [];
    var ajaxArray = [];
    
    var divCounter = 2;
    var selectCounter = 1;
    var postdata = [];
    
    function testarray(){

        $.ajax({
            url: '<?php echo base_url().'index.php/test/arraytest';?>',
            type: 'POST',
            dataType: 'json'
            
    });
    }
    
    function creatOption(e, result){
        console.log("Get element id: "+e.id);
                
        if (e.id == 'priStrm'+selectCounter || e.id == 'secStrm'+selectCounter){
            var ele = e;
            e.options.length = 0;
            e.insertBefore(new Option('',''),ele.firstChild);
            for (var i = 0; i < result.length; i++){
                e.options[i+1] = new Option(result[i].DESCRSHORT);
                e.options[i+1].value = result[i].STRM;
            }    
        } else {
            var ele = e;
            
            ele.options.length = 0;
            ele.insertBefore(new Option('',''),ele.firstChild);
            
            for (var i = 0; i < result.length; i++){
                
                var keys = Object.keys(result[i]);
                
                ele.options[i+1] = new Option(result[i][keys]);
                ele.options[i+1].value = result[i][keys];
            }
        }
    }
    
    function createInputRow(){
        // create a new div element 
      // and give it some content 
        var myDiv = document.getElementById("myDiv");


        var priInstitSelectList = document.createElement("select");
        priInstitSelectList.id = "priInstitution"+selectCounter;
        priInstitSelectList.name = "priInstitution";
        priInstitSelectList.addEventListener("input", function(){getPriStrm(this.value)});
        myDiv.appendChild(priInstitSelectList);
        console.log(priInstitSelectList.id);
    //Create and append the options
            $.ajax({
                //url: '<?php echo base_url().'index.php/bbcrseshare/getSharedCourseDropDownVal/';?>'+param,

                url: '<?php echo base_url().'index.php/bbcrseshare/getPriInstitution/';?>',
                type: 'POST',
                dataType: 'json',
                success: function(result){
                    console.log("JSON: ");
                    console.log(result);
                    priInstitSelectList.options.length = 0;
                    priInstitSelectList.insertBefore(new Option('',''),priInstitSelectList.firstChild);

                    for (var i = 0; i < result.length; i++){
                        console.log(result[i]);
                        console.log("Keys: "+Object.keys(result[i]));
                        var keys = Object.keys(result[i]);
                        console.log("Assign keys to keys: "+keys);
                        console.log("Key Value: "+result[i][keys]);

                        priInstitSelectList.options[i+1] = new Option(result[i][keys]);
                        priInstitSelectList.options[i+1].value = result[i][keys];
                    }                

                }
            });

        var priStrmSelect = document.createElement("select");
        priStrmSelect.id = "priStrm"+selectCounter;
        priStrmSelect.name = "priStrm";
        priStrmSelect.addEventListener("input", function(){getPriSubject(this.value)});

        myDiv.appendChild(priStrmSelect);

        var priSubjectSelect = document.createElement("select");
        priSubjectSelect.id = "priSubject"+selectCounter;
        priSubjectSelect.name = "priSubject";
        priSubjectSelect.addEventListener("input", function(){getPriCatalogNum(this.value)});


        myDiv.appendChild(priSubjectSelect);

        var priCatalogNumSelect = document.createElement("select");
        priCatalogNumSelect.id = "priCatalogNum"+selectCounter;
        priCatalogNumSelect.name = "priCatalogNum";
        priCatalogNumSelect.addEventListener("input", function(){getPriSectionNum(this.value)});

        myDiv.appendChild(priCatalogNumSelect);

        var priSectionNumSelect = document.createElement("select");
        priSectionNumSelect.id = "priSectionNum"+selectCounter;
        priSectionNumSelect.name = "priSectionNum";
        //priSectionNumSelect.addEventListener("input", function(){getPriSectionNum(this.value)});

        myDiv.appendChild(priSectionNumSelect);



        /*

        var priSubject = document.createElement("select");
        priStrmSelect.id = "priSubject";
        priStrmSelect.name = "priSubject";
        myDiv.appendChild(priSubject);
        */      

    }
    /*
    function ajaxCall(param){
        $.ajax({
            url: baseURL+
            
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("get Section JSON: ");
                console.log(result);
                creatOption(document.getElementById("priSectionNum"+selectCounter), result);

            }
        });        
    }
    */
    
    function getDropDownData(param){
    console.log("IN GET DROP DOWN DATA");
    console.log("   element ID: "+ param['priFieldID']+" alternate method: "+param.priFieldId);
    var test = [];
    console.log("Parameters");
    console.log(param);
    console.log('<?php echo base_url().'index.php/bbcrseshare/getDropDownData/';?>'+param)
    test['test1'] = "test1 value";
        $.ajax({
            
            url: '<?php echo base_url().'index.php/bbcrseshare/getDropDownData/';?>',
            method: 'POST',
            data: {param: param},
            dataType: 'json',
            success: function(result){
                console.log("ajax JSON: ");
                //console.log(test);
                console.log(result);
                //console.log("elementID: "+param['priFieldId']);
                //creatOption(document.getElementById(param.priFieldId), result);
                var errorPara = document.createElement("P");
                var errorText = document.createTextNode("Result array: ");
                var resultText = document.createTextNode(result);
                errorPara.appendChild(errorText);
                document.body.appendChild(errorPara);
                document.body.appendChild(resultText);


            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);

                console.log("elementID: "+param['priFieldId']);
                var errorPara = document.createElement("P");
                var errorText = document.createTextNode(jqXHR.responseText);
                errorPara.appendChild(errorText);
                document.body.appendChild(errorPara);
            }        
        });
        console.log("   OUT OF AJAX CALL");
    }
//Get primary terms based on institution selection   
    function getPriStrm(str){
        console.log("institution: "+str);
        selectedPriInstitution = str;
        priCourse = new Array();
        priCourse['INSTITUTION'] = selectedPriInstitution;
        param['priCourse'] = priCourse;
        
        priField = new Array();
        priField['STRM'] = 'STRM';
        priField['DESCRSHORT'] = 'DESCRSHORT';
            
        
        param['priField'] = priField;

        
        console.log("param array strm: ");
        console.log(param);
        
        //getDropDownData(param);
        
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getPriStrm/';?>'+selectedPriInstitution,
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("JSON: ");
                console.log(result);
                creatOption(document.getElementById("priStrm"+selectCounter), result);

            }
        });
        
    }

//get primary subject based on institution and term
    function getPriSubject(str){
        selectedPriTerm = encodeURIComponent(str);
        //selectedPriTerm = str;
        priCourse = [];
        priCourse['INSTITUTION'] = selectedPriInstitution;
        priCourse['STRM'] = selectedPriTerm;
        param['priCourse'] = priCourse;
        
        priField = [];
        priField['SUBJECT'] = 'SUBJECT';
        
        param['priField'] = priField;
        
        param['priFieldId'] = document.getElementById("priSubject"+selectCounter).id;

        console.log("param array subject: ");
        console.log(param);
        getDropDownData(param);
/*
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getPriSubject/';?>'+selectedPriInstitution+'/'+selectedPriTerm,
            //url: '<?php echo base_url().'index.php/test/arraytest';?>',
            type: 'POST',
            dataType: 'json',
            
            success: function(result){
                console.log("JSON: ");
                console.log(result);
                creatOption(document.getElementById("priSubject"+selectCounter), result);
     
            }
        });
*/        
    }

//get primary catalog numbers based on institution, term and subject
    function getPriCatalogNum(str){
        
        selectedPriSubject = encodeURIComponent(str);
        //selectedPriSubject = str;
        priCourse = new Array();
        priCourse['INSTITUTION'] = selectedPriInstitution;
        priCourse['STRM'] = selectedPriTerm;
        priCourse['SUBJECT'] = selectedPriSubject;
        param['priCourse'] = priCourse;
        priField = new Array();
        priField['CATALOG_NBR'] = 'CATALOG_NBR';
        
        param['priField'] = priField;
        console.log("param array subject: ");
        console.log(param);

        $.ajax({
            //url: uri_dec,
            url: '<?php echo base_url().'index.php/bbcrseshare/getPriCatalogNum/';?>'+selectedPriInstitution+'/'+selectedPriTerm+'/'+selectedPriSubject,
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("JSON: ");
                console.log(result);
                creatOption(document.getElementById("priCatalogNum"+selectCounter), result);

            }
        });
    }
    
//get primary section based n institution, term, subject and catalog number
    function getPriSectionNum(str){
        selectedPriCatalogNum = encodeURIComponent(str);
        priCourse = new Array();
        priCourse['INSTITUTION'] = selectedPriInstitution;
        priCourse['STRM'] = selectedPriTerm;
        priCourse['SUBJECT'] = selectedPriSubject;
        priCourse['CATALOG_NBR'] = selectedPriCatalogNum;
        param['priCourse'] = priCourse;
        priField = new Array();
        priField['CLASS_SECTION'] = 'CLASS_SECTION';
        
        param['priField'] = priField;
        console.log("param array section: ");
        console.log(param);
     
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getPriSectionNum/';?>'+selectedPriInstitution+'/'+selectedPriTerm+'/'+selectedPriSubject+'/'+selectedPriCatalogNum,
            
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("get Section JSON: ");
                console.log(result);
                creatOption(document.getElementById("priSectionNum"+selectCounter), result);

            }
        });
    }
    
    function getSecStrm(str){
        console.log(str);
        selectedSecInstitution = encodeURIComponent(str);
     
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getPriStrm/';?>'+str,
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("JSON: ");
                console.log(result);
                creatOption(document.getElementById("secStrm"), result);
            }
        });
    }
    
    function getSecSubject(str){
        selectedSecTerm = encodeURIComponent(str);
        console.log("institution: "+selectedSecInstitution+" strm: "+str);
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getSecSubject/';?>'+selectedSecInstitution+'/'+selectedSecTerm,
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("JSON: ");
                console.log(result);
                creatOption(document.getElementById("secSubject"), result);
                
                
            }
        });
    }
    
    function getSecCatalogNum(str){
        selectedSecSubject = encodeURIComponent(str);
        console.log(selectedSecSubject);
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getSecCatalogNum/';?>'+selectedSecInstitution+'/'+selectedSecTerm+'/'+selectedSecSubject,
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("JSON: ");
                console.log(result);
                creatOption(document.getElementById("secCatalogNum"), result);
                
            }
        });
    }
    
    //get primary section based n institution, term, subject and catalog number
    function getSecSectionNum(str){
        selectedSecSection = encodeURIComponent(str);
        console.log(selectedSecSection);
        $.ajax({
            url: '<?php echo base_url().'index.php/bbcrseshare/getSecSectionNum/';?>'+selectedSecInstitution+'/'+selectedSecTerm+'/'+selectedSecSubject+'/'+selectedSecSection,
            
            type: 'POST',
            dataType: 'json',
            success: function(result){
                console.log("get Section JSON: ");
                console.log(result);
                creatOption(document.getElementById("secSectionNum"), result);

            }
        });
    }


</script>

<?php
//echo $this->table->generate($bbCrseSharePri);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>