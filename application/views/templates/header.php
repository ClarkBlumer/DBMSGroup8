
<!--${doctype}
CS 4830: Group 8
CodeIgniter/BootStrap Template
-->
<html>
    <head>
        <meta charset="${project.encoding}">
        <title>UM Course Sharing</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Loading CSS for UM System Header-->
        <link href="http://www.umsystem.edu/css/umsbar.css" rel="stylesheet" type="text/css" />
        
        <!--Loading Bootstrap CSS-->
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" type="text/css" />
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        
        <!--Loading custom bootstrap css-->
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
		
		<!-- new style sheet -->
		
		<!--   -->
		
		
		<link href="<?php echo base_url('assets/newcss/css/sb-admin.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/newcss/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/newcss/css/plugins/morris.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/newcss/css/font-awesome.min.css'); ?>" rel="stylesheet">
		
		

				
    </head>
    <body>
        <!--Start UMS Header Bar-->
        <div class="umsheader">
            <div class="umsheaderlogo"><a href="http://www.umsystem.edu"><img src="/images/blank.gif" class="umsheaderlink"/></a></div>
            <!--<div class="umsheaderadvmolink"><a href="/about-us"><img src="images/advmo-logo.png" /></a></div>-->
            
        </div>
        <!--End UMS Header Bar-->
        
        <!--Start Course Share Menu Nav-->
        <div class="container">
            <div class="page-header">
                <h1>UM Intercampus Course Share</h1>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="myNavbar">
                        												
								<div class="btn-group" role="group" aria-label="...">
								<button type="button" class="btn btn-default"><a href="#">WebsiteName</a></button>
								  <button type="button" class="btn btn-default"><a href="#">Home</a></button>
								  <button type="button" class="btn btn-default"><a href="#">About</a></button>
								  <button type="button" class="btn btn-default"><a href="<?php echo base_url('index.php/addproposal')?>">Enter Proposal</a></button>
								  <div class="btn-group" role="group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Report and Graphs
									  <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
									  <li><a href="allCharts">All Charts</a></li>
									  <li><a href="#">A pie chart of funding requested to campuses</a></li>
									  <li><a href="#">A pie chart of funding awarded to campuses</a></li>
									  <li><a href="#">A bar chart of no of courses delivered by primary campus</a></li>
									  <li><a href="#">A pie chart of courses by discipline i.e nursing, civil engineering</a></li>
									  <li><a href="#">A line chart of enrollment of students per tem in courses with the attribute of UMSCS</a></li>
									</ul>
								  </div>
								</div>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
					
					
                </div>
              </nav>
        </div>
<!--End Course Share Menu Nav-->




