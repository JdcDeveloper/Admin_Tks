<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- cargar jquery al principio y scripts principales -->

  <!-- jQuery 3 -->
  <script src="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/jquery/dist/jquery.min.js"></script>





  <!-- Datatable js -->
  <script src="<?php echo Yii::app()->request->baseUrl;?>/public/lib/js/jquery.dataTables.min.js"></script>

  
  <!-- sweet alert2 -->
  <!--  <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>public/lib/js/sweetalert2.min.js"></script>  -->

  <!--  <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>public/lib/js/sweetalert2.all.min.js"></script>  -->


  <!-- datepicker -->
  <script src="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/jquery-ui/jquery-ui.min.js"></script>


  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


  <!-- sweet alert2 -->
  <!--  <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>public/lib/js/sweetalert2.min.js"></script>  -->   

  <!--   <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>public/lib/js/sweetalert2.all.min.js"></script>  -->

  <!-- sweet alert2 -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->

  <!-- me funciono con estas cdn el sweet alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>



  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/dist/css/skins/_all-skins.min.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/morris.js/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


   <!--  agregando estilos del login -->

   <!-- iCheck -->
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/public/plugins/iCheck/square/blue.css">



   <!-- Table styles -->

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/public/lib/css/jquery.dataTables.min.css"> 


   <!--  sweet alert2 -->
   <!--   <link rel="stylesheet" type="text/css" href="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>public/lib/css/sweetalert2.min.css">  -->



   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



<!--  la url base para usarla con los js -->

<script type="text/javascript">

 

</script>



<script type="text/javascript">

   // import * as swal from sweetalert;

    // import swal from 'sweetalert2.all.min.js';

    // import * as swal from 'sweetalert';

      // import swal from '<?php //echo Yii::app()->request->baseUrl;?>public/lib/js/sweetalert2.all.min.js';

     



    // swal("Hola mundo!");


    // alert();

  </script>

  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


  <!--   <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>public/lib/js/sweetalert2.all.min.js"></script>  -->


<!-- <script>

// import swal from 'sweetalert';

import swal from 'sweetalert2.all.min.js';
  


</script> -->

<!-- <script>
  
    swal("Hola mundo!");

  </script> -->

</head>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">


   

    <!-- 	aqui divide con roll no logeado -->

     <!-- ******** por ahora saco esta parte para ver el color en el login *******-->
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">

    
   <!--  fin role --> 

       <!-- 	aqui divide con roll admin --> 

       <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>TKS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>Tks</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                          page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                          aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Make beautiful transitions
                      <small class="pull-right">80%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
            </ul>
          </li>
          <li class="footer">
            <a href="#">View all tasks</a>
          </li>
        </ul>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs"></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
             
              <small>Miembro desde </small>
            </p>
          </li>

          <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
                <!-- </li> -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="users/profile"" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="login/signout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>





    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="dashboard/area"><i class="fa fa-circle-o"></i> Area</a></li>
            <li> <a href="dashboard/area"><i class="fa fa-circle-o"></i> Map</a></li>
           <!--  <li ><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
          </ul>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>             
            </span>
          </a>
          <ul class="treeview-menu">
            <li> <a href="users/view"><i class="fa fa-circle-o"></i> View</a></li>
            <li> <a href="users/add"><i class="fa fa-circle-o"></i> Add</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clipboard"></i>
            <span>Projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
           
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- ************aqui es el color del contenido********************* -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard/area"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
      </ol>
    </section>

<!-- fin admin no logeado -->

 
  <!--  fin admin menu y sidebar -->


  <!-- Main content -->
  <section class="content">

<!-- 	el contenido a mostrar	 -->

	<?php echo $content; ?>


	      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>

  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-2019 <a href="https://github.com/JdcDeveloper" target="_blank">Desarrollador Jonathan Castro</a>.</strong> All rights
    reserved.
  </footer>


</div>

  
 
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
<!--  <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/jquery/dist/jquery.min.js"></script> -->

 <!-- jQuery UI 1.11.4 -->
<!--  <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/jquery-ui/jquery-ui.min.js"></script> -->
 
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->


<!-- google charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl;?>/public/js/charts.js"></script>   

<!-- Morris.js charts -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/raphael/raphael.min.js"></script>
<script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/morris.js/morris.min.js"></script> -->

<!-- Sparkline -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public//bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->

<!-- jQuery Knob Chart -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->

<!-- daterangepicker -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/moment/min/moment.min.js"></script>
<script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->

<!-- datepicker -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script> -->

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public/bower_components/fastclick/lib/fastclick.js"></script>


<!-- esta es la parte del sidebar para que funcione -->
<!-- AdminLTE App -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public/dist/js/adminlte.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/dist/js/pages/dashboard.js"></script> -->

<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/dist/js/demo.js"></script> -->


<!-- lo del login
 -->
<!-- iCheck -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public/plugins/iCheck/icheck.min.js"></script>


<script src="<?php echo Yii::app()->request->baseUrl;?>/public/js/table.js"></script>

<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/js/datepicker.js"></script>  -->



<!-- scripts main -->
<script src="<?php echo Yii::app()->request->baseUrl;?>/public/js/main.js"></script>


<!-- <script src="<?php //echo base_url();?><?php //echo Yii::app()->request->baseUrl;?>/public/js/charts.js"></script>    --> 


   
</body>
</html>




