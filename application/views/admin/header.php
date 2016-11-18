
<?php if(empty($_SESSION['admin_id'])){

 	redirect('admin/logout');

}?>
<!DOCTYPE html>
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
            </button>
            <a class="navbar-brand" href="index.html"> 
                <span style="margin-top:-10px">Autosharing Admin</span></a>

            <!-- user dropdown starts -->
            <!-- user dropdown ends -->
            <!-- theme selector starts -->
<div class="btn-group pull-right theme-container animated tada">

                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				
                    <i class="glyphicon glyphicon-tint"></i><span class="hidden-sm hidden-xs"><a href="<?php echo base_url();?>index.php/admin/logout">LogOut</a></span>
					
					<span class="caret"> </span>
				 
			    </button>
                
          </div>
            <!-- theme selector ends -->
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
						<li><a class="ajax-link" href="index.html"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
						</li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/userList"><i class="glyphicon glyphicon-eye-open"></i><span> User List </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/carList"><i class="glyphicon glyphicon-list-alt"></i><span> Car List </span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/ridelist"><i class="glyphicon glyphicon-eye-open"></i>Ride List <span></span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/bookingList"><i class="glyphicon glyphicon-font"></i><span>Booking List</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/Admin/about_us_page"><i
                                    class="glyphicon glyphicon-edit"></i>Manage About Us<span></span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/Admin/query_list"><i class="glyphicon glyphicon-picture"></i><span> Queries</span></a>
                        </li>
                      
                        <li><a class="ajax-link" href="<?php echo base_url();?>index.php/admin/send_mail_page"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Send Mail</span></a></li>
                       
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
</div>
        <!--/span-->
        <!-- left menu ends -->