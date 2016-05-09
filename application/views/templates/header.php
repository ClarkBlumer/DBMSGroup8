
<!DOCTYPE html>
<!--
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
        
        <!-- Load Google chart api -->
        
<!--PIE Chart: Primary Course Budget by Campus -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    
<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
  
    
   


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
                                    <li><a href="<?php echo base_url('index.php/graphs/allCharts') ?>">All Charts</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li><a href="<?php echo base_url('index.php/Reports/maxBudgetRequestedByCampus') ?>">Maximum funding requested by campus</a></li>
                                    <li><a href="<?php echo base_url('index.php/Reports/numberOfPendingProposalsByCampus') ?>">Number of pending proposals by campus</a></li>
                                    <li><a href="<?php echo base_url('index.php/Reports/numberOfAwardedProposalsByCampus') ?>">Number of awarded proposals by campus</a></li>
                                    <li><a href="<?php echo base_url('index.php/Reports/numberOfPendingProposalsByTerm') ?>">Number of proposals by term</a></li>
                                    <li><a href="<?php echo base_url('index.php/Reports/numberOfAwardedProposalsByTerm') ?>">Number of awarded proposals by term</a></li>
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




