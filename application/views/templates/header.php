
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

        <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
   
        <!--Loading CSS for UM System Header-->
        <link href="http://www.umsystem.edu/css/umsbar.css" rel="stylesheet" type="text/css" />
        
        <!--Loading Bootstrap CSS-->
        
        <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/plugins/morris.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url("assets/css/custom.css"); ?>" rel="stylesheet" type="text/css" />

        
        <!--Loading custom bootstrap css-->
        <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">

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
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Inter-Campus Course Share</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active"><a href="<?php echo base_url('index.php/getallproposals/index') ?>">Proposals</a></li>
                            <li><a href="<?php echo base_url('index.php/proposal')?>">Enter Proposal</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Charts/Reports<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="allCharts">All Charts</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li><a href="#">funding requested to campuses</a></li>
                                    <li><a href="#">funding awarded to campuses</a></li>
                                    <li><a href="#">courses delivered by primary campus</a></li>
                                    <li><a href="#">courses by discipline </a></li>
                                    <li><a href="#">enrollment of students per term</a></li>
                                </ul>
                            </li>



                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
              </nav>
        </div>
<!--End Course Share Menu Nav!!!-->




