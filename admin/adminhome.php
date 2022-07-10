<?php
include "include/connection.php";
session_start();
if(isset($_SESSION["admin"]))
{
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
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
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
            <div class="small-box bg-info">
              <div class="inner">
			  
                <p>Total Batch</p>
              </div>
              
            </div>
          </div>
		  
		  
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
			 
                <p>Total Semester</p>
              </div>
              
            </div>
          </div>
		  
		  
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
			  <?php
				include "include/connection.php";
				$cmd="select count(fname) from hodreg";
				$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
				$row=mysqli_fetch_array($result);
				$total = $row[0];				
                echo '<h3>'.$total.'<sup style="font-size: 20px"></h3>';
				mysqli_close($con);
				?>
                <p>Total HOD</p>
              </div>
              
            </div>
          </div>
		  
		   <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
			  <?php
				include "include/connection.php";
				$cmd="select count(fname) from studentreg";
				$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
				$row=mysqli_fetch_array($result);
				$total = $row[0];				
                echo '<h3>'.$total.'<sup style="font-size: 20px"></h3>';
				mysqli_close($con);
				?>
                <p>Total Students</p>
              </div>
             
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
else{
	echo "<script>location.href='loginpage.php';</script>";
  }
?>

</body>
</html>
