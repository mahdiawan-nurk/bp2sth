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
        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="<?=base_url('index.php/welcome');?>"><img src="<?=base_url();?>public/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Administrator</h5>
                    
                  <li class="mt">
                      <a href="<?=base_url('index.php/welcome');?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Data Koleksi</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=base_url('index.php/DataKoleksiVegetasi');?>">Koleksi Vegetasi</a></li>
                          <li><a  href="buttons.html">Koleksi Pohon</a></li>
                        
                      </ul>
                  </li>
                   <li class="sub">
                      <a href="index.html">
                          <i class="fa fa-list"></i>
                          <span>Galery</span>
                      </a>
                  </li>
                   <li class="sub">
                      <a href="index.html">
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                  </li>
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?=$this->load->view($p);?>


      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url();?>public/js/jquery.js"></script>
    <script src="<?=base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>public/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?=base_url();?>public/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url();?>public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url();?>public/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>public/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?=base_url();?>public/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
