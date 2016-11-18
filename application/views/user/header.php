<?php if(empty($_SESSION['user_id'])){

 	redirect('main_template/logout');

}?><!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url(); ?>assets/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url(); ?>assets/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
<style>

.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

</style>

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            <a class="navbar-brand" href="<?php echo base_url();?>/index.php/home"> 
                <span>Autosharing</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> User Dashboard</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="<?php echo base_url(); ?>/index.php/home"><i class="glyphicon glyphicon-road btn btn-info btn-sm"></i> Find a Ride</a></li>
                <li><a href="<?php echo base_url(); ?>/index.php/user/offerRidePage"><i class="glyphicon glyphicon-road btn btn-info btn-sm"></i> Offer a Ride </a> </li>
               <!--  <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>-->
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                       <!-- <li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li> -->
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User"><i class="glyphicon glyphicon-eye-open"></i><span> Edit Profile</span></a>
                        </li>
                       
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/uploadePhotoPage"><i class="glyphicon glyphicon-eye-open"></i><span> Photos</span></a>
                        </li>
                         <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/postalAddressPage"><i class="glyphicon glyphicon-eye-open"></i><span> Postal address</span></a>
                        </li>
                       
                       <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/carPage"><i class="glyphicon glyphicon-eye-open"></i><span> Car</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/verificationPage"><i class="glyphicon glyphicon-eye-open"></i><span> Verification</span></a>
                        </li>
                          <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/carDetailsPage"><i class="glyphicon glyphicon-eye-open"></i><span> Car Details</span></a>
                        </li>
						  <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/rideOffered"><i class="glyphicon glyphicon-eye-open"></i><span> Ride Offered</span></a>
                        </li>
                        </li>
						  <li><a class="ajax-link" href="<?php echo base_url();?>index.php/User/inbox"><i class="glyphicon glyphicon-eye-open"></i><span> Inbox</span></a>
                        </li>
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->