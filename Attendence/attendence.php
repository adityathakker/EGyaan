<?php
session_start();
$user=$_SESSION['uname'];
if($user=="")
{
  header('Location: index.php');
}
if($user=="")
{
  header('Location: index.php');
}
include("dbcon.php");
                  $u=mysqli_query($con,"Select * From Teacher where TeacherEmail='$user'");
                  while($row= mysqli_fetch_array($u))
                  {
                    $usr=$row['TeacherFname']." ".$row['TeacherLname'];
		    $TeacherId=$row['TeacherId'];
                    $BatchId=$row['BatchId'];
                  }
		/*$batchname=mysqli_query($con,"SELECT BatchName FROM Batch WHERE BatchId='$BatchId'");
		while($namerow=mysqli_fetch_array($batchname))
		{
			$branch=$namerow['BatchName'];
		}*/
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Attendence</title>
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

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/skins/skin-yellow-light.min.css">

    <style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#eventForm .form-control-feedback {
    top: 0;
    right: -15px;
}
</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
  <body class="hold-transition skin-yellow-light sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="TeacherDashboard.php" class="logo">
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
                  <img src="D_Logo/avatar5.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $usr ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="D_Logo/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $usr;
                      echo "<br>";
                  $c=mysqli_query($con,"Select * From TeacherCourse where TeacherId='$TeacherId'");
                  echo "Course: ";
                  while($row=mysqli_fetch_array($c))
                  {
                    
                    $course=$row['CourseId'];
                    $get_name=mysqli_query($con,"SELECT CourseName FROM Course WHERE CourseId='$course'");
                    while($c_row=mysqli_fetch_array($get_name))
                    {
                      $course=$c_row['CourseName']; 
                    }
                    echo "|$course| ";
                  }
                  ?>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
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
              <img src="D_Logo/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $usr?></p>
              <!-- Status -->
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            
            
            
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
              </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Attendence:
          </h1>
          
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
          <div class=col-xs-5 date>
          <?php
          date_default_timezone_set("Asia/Calcutta");
          $date=date('Y/m/d');
          
        echo '<label class="col-xs-12 control-label">Date of submission:</label>
        
            <div class="input-group input-append date" id="datePicker">';
                echo "<input type=text class=form-control name=date id=date value='$date' />";
                echo '<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            
        </div>';
          echo "<div class=table-responsive>";
          ?>
          </div>
</div>
<div class=col-xs-12>
<div class="form-group"><br>
<label for="menu1">Select Branch:</label><br>
<select class="tb5" name="branch" onchange="showList(this.value)">
  <option value="">Select Branch..</option>
<?php
include("dbcon.php");
$result = mysqli_query($con,"SELECT * FROM TeacherCourse WHERE TeacherId='$TeacherId'");
while($row = mysqli_fetch_array($result))
{
$id=$row['CourseId'];
$course_name=mysqli_query($con,"SELECT * FROM Course WHERE CourseId='$id'");
while($crow=mysqli_fetch_array($course_name))
{
  $cname=$crow['CourseName'];
  $BatchId=$crow['BatchId'];
$batchname=mysqli_query($con,"SELECT BatchName FROM Batch WHERE BatchId='$BatchId'");
		while($namerow=mysqli_fetch_array($batchname))
		{
			$name=$namerow['BatchName'];
		}
}

echo "<option value=$id>$cname- $name</option>";
}
?>
</select><br><br>
<!-- </form> -->
<!-- <button type="submit" class="btn btn-success">Select</button> -->
<div id="txtHint">Select Branch..</div>


          </section>
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

    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


  <script>
  function myFunction() {
    var x;
    if (confirm("Do you want to continue") == true) {
        
    } else {
        event.preventDefault() ;
        
    }
    //document.getElementById("demo").innerHTML = x;
}
// $(document).ready(function() {
//     $('#datePicker')
//         .datepicker({
//             format: 'mm/dd/yyyy'
//         })
//         .on('changeDate', function(e) {
//             // Revalidate the date field
//             $('#eventForm').formValidation('revalidateField', 'date');
//         });

//     $('#eventForm').formValidation({
//         framework: 'bootstrap',
//         icon: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             name: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The name is required'
//                     }
//                 }
//             },
//             date: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The date is required'
//                     },
//                     date: {
//                         format: 'MM/DD/YYYY',
//                         message: 'The date is not a valid'
//                     }
//                 }
//             }
//         }
//     });
// });
</script>
<script>

function showList(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "Select Branch..";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtHint").innerHTML = xhttp.responseText;
    }
  }
  document.getElementById("txtHint").innerHTML = xhttp.responseText;
  xhttp.open("GET", "attendence_list.php?cuid="+str+"&date="+document.getElementById('date').value, true);
  xhttp.send();
}

$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'yyyy/mm/dd'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            // $('#eventForm').formValidation('revalidateField', 'date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});

</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
