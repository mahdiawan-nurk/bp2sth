<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/public/pnotify/pnotify.custom.css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/matrix-media.css" />
<link href="<?php echo base_url();?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<!-- <script type="text/javascript" src="<?php echo base_url();?>public/assets/DataTables/media/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/DataTables/media/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/DataTables/media/css/jquery.dataTables.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/DataTables/media/css/dataTables.bootstrap.css">
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">ARBORETUM</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
   
    <li class=""><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Welcome <?=$this->session->userdata('user_name');?></span></a></li>
    
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">

  <a title="" href="<?=base_url();?>index.php/secure/logout" class="btn btn-inverse"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
  <!-- <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button> -->
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li ><a href="<?php echo base_url();?>index.php/welcome"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
  
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Data Koleksi</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url();?>index.php/datakoleksivegetasi">Koleksi Vegetasi</a></li>
        <li><a href="<?php echo base_url();?>index.php/datakoleksipohon">Koleksi Pohon</a></li>
       
      </ul>
    </li>
    
    <li><a href="<?php echo base_url();?>index.php/datagallery"><i class="icon icon-fullscreen"></i> <span>Galery</span></a></li>
    <li><a href="<?php echo base_url();?>index.php/admin"><i class="icon icon-fullscreen"></i> <span>User</span></a></li>
  
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->
<?=$this->load->view($p);?>
<!--Action boxes-->
  
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo base_url();?>public/assets/js/excanvas.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/matrix.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/matrix.interface.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/matrix.chat.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.validate.js"></script> 
<!-- <script src="<?php echo base_url();?>public/assets/js/matrix.form_validation.js"></script>  -->
<script src="<?php echo base_url();?>public/assets/js/jquery.wizard.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/matrix.popover.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>public/assets/js/matrix.tables.js"></script>
<script src="<?php echo base_url();?>assets/public/pnotify/pnotify.custom.js"></script>
<!-- <script src="<?php echo base_url();?>public/assets/js/jquery.min.js"></script>  -->
 <script src="<?php echo base_url();?>public/ckeditor1/ckeditor.js"></script>
<script src="<?php echo base_url();?>public/ckeditor1/config.js"></script>
<script src="<?php echo base_url();?>public/ckeditor1/adapters/jquery.js"></script> 


 

</body>
</html>
