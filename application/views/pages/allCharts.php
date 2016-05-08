
  <div id="wrapper">
    <!-- Navigation -->
   
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->

        <!-- Morris Charts -->
        <div class="row">
          <div class="col-lg-12">
            <h2 class="page-header">Charts</h2>
            <p class="lead"> </a>.</p>
          </div>
        </div>
        <!-- /.row -->
        <div id="piechart" style="width: 900px; height: 500px;"></div>
        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A pie chart of funding requested to campuses</h3>
              </div>
              <div class="panel-body">
                <div id="donut-primary-budget-campus"></div>
                <div class="text-right">
                  <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		  
          <div class="col-lg-4">
            <div class="panel panel-red">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A pie chart of funding awarded to campuses </h3>
              </div>
              <div class="panel-body">
                <div id="morris-line-chart"></div>
                <div class="text-right">
                  <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
		 
            <div class="col-lg-4">
            <div class="panel panel-red">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Budged requested by each campus by semester </h3>
              </div>
              <div class="panel-body">
                <div id="morris-line-chart1"></div>
                <div class="text-right">
                  <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
            
            
            
	
		  
        </div>
        <!-- /.row -->
        <!-- /.row -->
	  
	   <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A pie chart of total requested by academic year and institution</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-moving-line-chart"></div>
                        </div>
                        <div class="text-right">
                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A line chart of enrollment of students per term in courses with the attribute of UMSCS</h3>
                    </div>
                    <div class="panel-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-bar-chart"></div>
                        </div>
                        <div class="text-right">
                            <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
         <?php
         echo "<script language='JavaScript'>\n"; 
         echo "var js_array = new Array();\n"; 
         $count = 0;
         
         foreach($fundRe as $array){ 
             $value = $array['FUNDRE']; $count1=$array['INSTIT'];
             
             echo "js_array['$count1'] = $value;\n";
             $count = $count +1; 
         }  
         echo "</script>\n"; 
 
         ?> 
        <br>
        <br>
        
        <?php
            echo "<script language='JavaScript'>\n";
            echo "var fundAw = new Array();\n";
            foreach ($fundAw as $array){$val = $array['BUDGETAWAR']; $key = $array['INSTIT'];
            echo "fundAw['$key'] = $val;\n";
            }
            echo "</script>\n";
        ?>  
       
        
        <script> var INSTITU = new Array; var KEYY = new Array();  var BUDGET=new Array(); </script>
        <?php $counter=1;  foreach($fundAw1 as $array){$ins = $array['INSTIT']; $kk = $array['OFTERM']; $budg = $array['FUNDRE']; ?>
         <script>
             index     = "<?php echo $counter; ?>";
          INSTITU[index] = "<?php echo $ins; ?>";
          KEYY[index]    ="<?php echo $kk; ?>";
          BUDGET[index]  ="<?php echo  $budg; ?>";  
        </script>
        <?php $counter++; }?>
      

        
        <script> var ACAD_YEAR = new Array; var INSTITAY = new Array();  var BUDGET_REQAYE=new Array(); </script>
        <?php $counter=1;  foreach($budRePerAcaYear as $array){$ins = $array['INSTIT']; $kk = $array['ACAD_YEAR']; $budg = $array['BUDGET_REQ']; ?>
         <script>
          index     = "<?php echo $counter; ?>";
          INSTITAY[index] = "<?php echo $ins; ?>";
          ACAD_YEAR[index]    ="<?php echo $kk; ?>";
          BUDGET_REQAYE[index]  ="<?php echo  $budg; ?>";  
        </script>
        <?php $counter++; }?>
      
	  
      </div>
      <!-- /.container-fluid -->

    </div>

  </div>





 
