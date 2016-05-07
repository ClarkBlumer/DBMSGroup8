
  <div id="wrapper">
    <!-- Navigation -->
   
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->

        <!-- Morris Charts -->
        <div class="row">
          <div class="col-lg-12">
            <h2 class="page-header">Charts</h2>
            <p class="lead">these graph are under revising becaause they do not have the actual data, I will include that as soon as I get the data </a>.</p>
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
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>  A bar chart of no of courses delivered by primary campus</h3>
              </div>
              <div class="panel-body">
                <div id="morris-bar-chart"></div>
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
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A pie chart of courses by discipline i.e nursing, civil engineering</h3>
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
         
         foreach($fund as $array){ 
             $value = $array['FUNDRE']; $count1=$array['INSTIT'];
             
             echo "js_array['$count1'] = $value;\n";
             $count = $count +1; 
         }  
         echo "</script>\n"; 
 
         ?> 
 
        
        
	  
	  
	  
	  
	  
	  
      </div>
      <!-- /.container-fluid -->

    </div>

  </div>





 
