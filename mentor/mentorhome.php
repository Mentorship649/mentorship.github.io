<?php
session_start();
if (isset($_SESSION["mentor"]))
{     $mentor=$_SESSION["mentor"];
include "include/connection.php";
$cmd1="select * from mentorreg where email='$mentor'";
$result1=mysqli_query($con,$cmd1) or die(mysqli_error($con));
while($row1=mysqli_fetch_array($result1))
{        $mname=$row1['fname'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mentorship</title>
  <?php
  include "include/link.php";
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 <?php
 include "include/nav.php";
 ?>
<?php
 include "include/sidebar.php";
 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mentorhome.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
         
		  
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
		    <div class="small-box bg-danger">
              <div class="inner">
			   <?php
				include "include/connection.php";
				$cmd="select count(topic) from meeting_details";
				$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
				$row=mysqli_fetch_array($result);
				$total = $row[0];				
                echo '<h3>'.$total.'<sup style="font-size: 20px"></h3>';
				mysqli_close($con);
				?>
				<p>Total Meetings</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a class="small-box-footer">Meeting Details </a>
            </div>
			</div>
			
			 <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			 <div class="small-box bg-danger">
              <div class="inner">
			   <?php
			     global $mname;
				 
				include "include/connection.php";
				$cmd="select count(enrollment) from studentreg where mentor='$mname'";
				$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
				$row=mysqli_fetch_array($result);
				$total = $row[0];				
                echo '<h3>'.$total.'<sup style="font-size: 20px"></h3>';
				mysqli_close($con);
				?>
				<p>Total Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a class="small-box-footer">Student Details </a>
            </div>
			</div>
			
          
		  
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "include/footer.php";
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
include "include/script.php";
}
else
{
	echo "<script>location.href='mentorloginpage.php';</script>";
}
?>

</body>
</html>
