<?php
session_start();
$user=$_SESSION['uname'];
if($user=="")
{
  header('Location: index.php');
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminDashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../AdminLTE/dist/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/skins/skin-yellow-light.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
a:link {
    color: black;
}

a:visited {
    color: black;
}


/* mouse over link */
a:hover {
    color: #f39c12;
}
</style>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-yellow-light sidebar-mini" link="#f39c12">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img class="img-responsive" src="D_Logo/E.jpg" width=35 height=60 /></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><img class="img-responsive" src="D_Logo/Logo.png" height=50 width=130/></b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="D_Logo/avatar.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="D_Logo/avatar.png" class="img-circle" alt="User Image">
                    <p>
                      Admin
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="D_Logo/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <!-- Status -->
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
              </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            DASHBOARD
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Students</span>
                  <span class="info-box-number"><?php
                  include("dbcon.php");
                  error_reporting(0);
                  $i=0;
                  $result = mysqli_query($con,"SELECT COUNT(StudentId) FROM Student");
                  while($row = mysqli_fetch_array($result))
                    {
                      $c=$row['COUNT(StudentId)'];
                    }
                    if($c==0)
                      echo "0";
                    else
                    echo $c;
                    ?>
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Teachers</span>
                  <span class="info-box-number"><?php
                  include("dbcon.php");
                  error_reporting(0);
                  $i=0;
                  $result = mysqli_query($con,"SELECT COUNT(TeacherId) FROM `Teacher`");
                  while($row = mysqli_fetch_array($result))
                    {
                      $c=$row['COUNT(TeacherId)'];
                    }
                    if($c==0)
                      echo "0";
                    else
                    echo $c;
                    ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Batches</span>
                  <span class="info-box-number"><?php
                  include("dbcon.php");
                  error_reporting(0);
                  $i=0;
                  $result = mysqli_query($con,"SELECT COUNT(BatchId) FROM Batch");
                  while($row = mysqli_fetch_array($result))
                    {
                      $c=$row['COUNT(BatchId)'];
                    }
                    if($c==0)
                      echo "0";
                    else
                    echo $c;
                    ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-blue"><i class=" fa fa-book"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Courses</span>
                  <span class="info-box-number"><?php
                  include("dbcon.php");
                  error_reporting(0);
                  $i=0;
                  $result = mysqli_query($con,"SELECT COUNT(CourseId) FROM `Course`");
                  while($row = mysqli_fetch_array($result))
                    {
                      $c=$row['COUNT(CourseId)'];
                    }
                    if($c==0)
                      echo "0";
                    else
                    echo $c;
                    ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><hr><!-- /.row -->
          <!-- Your Page Content Here -->
          <div class="box"><br>
          <div class="row">
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="Batch.php"><image src="../Resources/icons/team.png" height=100 width=88><br><h4>Manage Batch
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="Course.php"><image src="../Resources/icons/computer.png" height=100 width=88><br><h4>Manage Course
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="Select_Batch_Teacher.php"><image src="../Resources/icons/teacher.png" height=100 width=88><br><h4>Manage Teacher
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="Student.php"><image src="../Resources/icons/graduate.png" height=100 width=88><br><h4>Manage Student
	      </a></center>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="branch_timetable_view.php"><image src="../Resources/icons/schedule.png" height=100 width=88><br><h4>Manage Timetable
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="read_Notice.php"><image src="../Resources/icons/loudspeaker.png" height=100 width=88><br><h4>Manage Notice Board
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="result.php"><image src="../Resources/icons/grades.png" height=100 width=88><br><h4>Manage Results
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="branch_syllabus.php"><image src="../Resources/icons/newspaper.png" height=100 width=88><br><h4>Manage Syllabus
	      </a></center>
            </div>
          </div><hr>
          <div class="row">
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="view_attendence.php"><image src="../Resources/icons/hands.png" height=100 width=88><br><h4>Manage Attendance
	      </a></center>
            </div>
            <div class="col-md-3 col-sm=6 col-xs-6">
              <center><a href="fees.php"><image src="../Resources/icons/coins.png" height=100 width=88><br><h4>Manage Fees
	      </a></center>
            </div>
        </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <i>Using Technology For Learning</i>
        </div>
        <!-- Default to the left -->
        <strong>EGyaan</strong>
      </footer>
      <!-- Control Sidebar -->
        <!-- Tab panes -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.4 -->
    <script src="../AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../AdminLTE/dist/js/app.min.js"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
