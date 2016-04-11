<!DOCTYPE html>
<html lang="en">

<head>
 


</head>

<body>

  <div id="wrapper">
    <!-- Navigation -->
   
    <div class="col-lg-12" id="tb">
      <h2>Proposal statistics </h2>
      <table  class="table table-bordered table-hover" style="width:100%">
        <thead>
          <tr>
            <th>Proposal Name</th>
            <th>Proposal ID</th>
            <th>Institution Name</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Proposal 1</td>
            <td>1265</td>
            <td>Institution Name</td>
            <td><a href="#">Details</a></td>
          </tr>
          <tr>
            <td>Proposal 2</td>
            <td>261</td>
            <td>Institution Name</td>
            <td> <a href="#">Details</a></td>
          </tr>
          <tr>
            <td>Proposal 3</td>
            <td>665</td>
            <td>Institution Name</td>
            <td><a href="#">Details</a></td>
          </tr>
          <tr>
            <td>Proposal 4</td>
            <td>9516</td>
            <td>Institution Name</td>
            <td><a href="#">Details</a></td>
          </tr>
          <tr>
            <td>Proposal 5</td>
            <td>23</td>
            <td>Institution Name</td>
            <td><a href="#">Details</a></td>
          </tr>
          <tr>
            <td>Proposal 6</td>
            <td>421</td>
            <td>Institution Name</td>
            <td><a href="#">Details</a></td>
          </tr>
          <tr>
            <td>Proposal 7</td>
            <td>1233</td>
            <td>Institution Name</td>
            <td><a href="#">Details</a></td>
          </tr>
        </tbody>
      </table>

    </div>

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

        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A pie chart of funding requested to campuses</h3>
              </div>
              <div class="panel-body">
                <div id="morris-donut-chart"></div>
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
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> A line chart of enrollment of students per tem in courses with the attribute of UMSCS</h3>
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



      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->





 

</body>

</html>
