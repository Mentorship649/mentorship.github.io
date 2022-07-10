<?php
session_start();
include "include/connection.php";
$enrollment=$_SESSION['student'];
$cmd="select * from studentmeetingdetails where enrollment='$enrollment'";
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
            <h1>Student Meeting Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studenthome.php">Home</a></li>
              <li class="breadcrumb-item active">Student Meeting Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
	
    <section class="content" >

      <!-- Default box -->
      
     <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Student Meeting Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <?php
			  while($row=mysqli_fetch_array($result))
			{ ?>
                <table id="example1"  class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>FirstName</th>
					<td><?php echo $row['fname']; ?></td>
				 </tr>
				 
                   <tr>
					<th>LastName</th>
					<td><?php echo $row['lname']; ?></td>
				  </tr>
				  
				   <tr>
                    <th>Enrollment No</th>
					<td><?php echo $row['enrollment']; ?></td>
				</tr>
				 
				 <tr>
                    <th>Date of Birth</th>
					 <td><?php echo $row['datebirth']; ?></td>
				</tr>
				
				<tr>
					<th>Gender</th>
					<td><?php echo $row['gender']; ?></td>
				</tr>	
				
				<tr>
					<th>Branch</th>
					<td><?php echo $row['branch']; ?></td>
				</tr>	
				
				<tr>
					<th>Semester</th>
					<td><?php echo $row['semester']; ?></td>
				</tr>	
				
				<tr>
					<th>Batch</th>
					<td><?php echo $row['batch']; ?></td>
				</tr>	
				
				<tr>
					<th>Admission</th>
					<td><?php echo $row['admission']; ?></td>
				</tr>	
				
				<tr>
					<th>Mobile No.</th>
					<td><?php echo $row['mobile']; ?></td>
				</tr>	
				
				<tr>
                    <th>E-Mail</th>
					<td><?php echo $row['email']; ?></td>
				</tr>	
				
				<tr>
					<th>Mid Marks</th>
					<td><?php echo $row['midsem']; ?></td>
				</tr>

				<tr>
					<th>SPI</th>
					<td><?php echo $row['spi']; ?></td>
				</tr>	
				
				<tr>
					<th>CGPA</th>
					<td><?php echo $row['cgpa']; ?></td>
				</tr>	
				
				<tr>
					<th>Attendance</th>
					<td><?php echo $row['attendance']; ?></td>
				</tr>

                <tr>				
					<th>Behaviour</th>
					<td><?php echo $row['behaviour']; ?></td>
				</tr>	
				
				<tr>
					<th>Problem</th>
					<td><?php echo $row['problem']; ?></td>
				</tr>
 
                <tr> 
					<th>Meeting Schedule</th>
					<td><?php echo $row['ms']; ?></td>
				</tr>	
                   
				
                  </thead>
                  <tbody>
                  <tr>
							
							
							
                           
							
							
							
							
							
							
                           
							
							
							
							
							

							
					</tr>
						<?php
							}
						?>			  
                  </tbody>
                 
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
