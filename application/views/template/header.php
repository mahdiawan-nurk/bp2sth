<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
   <link href="<?=base_url();?>public/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url();?>public/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/css/zabuto_calendar.css"> -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>public/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>public/css/style.css" rel="stylesheet">
    <!-- <link href="<?=base_url();?>public/css/style-responsive.css" rel="stylesheet"> -->

    <script src="<?=base_url();?>public/js/chart-master/Chart.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?=base_url('/');?>" class="logo"><b>ARBORETUM BP2STH</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>