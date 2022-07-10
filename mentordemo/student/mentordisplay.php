<?php
session_start();
include "include/connection.php";
$enrollment1=$_SESSION['student'];

$cmd1="select * from studentreg where enrollment='$enrollment1'";
$result1= mysqli_query($con,$cmd1) or die(mysqli_error($con));
while($row1=mysqli_fetch_array($result1))
{   $mentorname=$row1['mentor'];
}
$cmd="select * from mentorreg where fname='$mentorname'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Your Mentor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studenthome.php">Home</a></li>
              <li class="breadcrumb-item active">Your Mentor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
     <div class="card">
              <div class="card-header">
                <h3 class="card-title">Your Mentor Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>FirstName</th>
                    <th>LastName</th>
                    <th>Mentor ID</th>
                    <th>Branch</th>
					<th>Mobile No.</th>
                    <th>E-Mail</th>
					
                    
				</tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php
							while($row=mysqli_fetch_array($result))
							{
						?>
							<td><?php echo $row['fname']; ?></td>
							<td><?php echo $row['lname']; ?></td>
							<td><?php echo $row['mid']; ?></td>
                            <td><?php echo $row['branch']; ?></td>
							<td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                           
							</tr>
						<?php
							}
						?>			  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>FirstName</th>
                    <th>LastName</th>
                    <th>Mentor ID</th>
                    <th>Branch</th>
					<th>Mobile No.</th>
                    <th>E-Mail</th>
					
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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
?>

</body>
</html>
