<?php
session_start();
include "include/connection.php";
//$cmd1="select * from mentorreg";
//$result= mysqli_query($con,$cmd1) or die(mysqli_error($con));
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
            <h1>Assign Mentor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="hodhome.php">Home</a></li>
              <li class="breadcrumb-item active">Assign Mentor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
			<div class="row">
			<div class="col-md-6">
				<form action="" method="post">
					
					<div class="col-md-12">
						<div class="form-group">
							
							 <select class='form-control' name="batch">
								<option>select</option>
									<?php 
									
									$sql= "select * from batch";
									$result1=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row['batchname']."'>".$row['batchname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
							<!--<input class="form-control" type="text" name="en" placeholder="Enter Student's Enrollment">-->
						</div>
					</div>
					
					
	
					<div class="col-md-2">
	
						<div class="form-group">
							
							<input  type="submit" name="go" value="Go" class="btn btn-default" id="export"/>
							</form>
						
						</div>
					</div>
					
					
					<div class="col-md-2">
						<div class="form-group">
						
							<form action="final-assign-mentor.php" method="post">
								<input type="submit" name="chn_enrollment" value="Assign All" class="btn btn-default"/>
							
						</div>
					</div>
				
	
			</div>
			</div>
	
			<div class="container-fluid">
	
		

<br />
			<div class="row">
				<div class="col-lg-12">
					
					
					<table class="table-responsive table table-hover">
						<thead>
						  <tr>
							
							<th>Sr. No.</th>
							<th>Batch</th>
							<th>Branch</th>
						
							<th>First Name</th>
							
							<th>Last Name</th>
							<th>Enrollment No.</th>
							<th>Select Faculty</th>
						  </tr>
						</thead>
						<?php
						if(isset($_POST['go']))
						{                error_reporting();
										$batch=$_POST['batch'];
										
										
										$branch="";
										//echo $batch;
										if($batch)
										{
											$sel = "select * from studentreg where mentor='0' and batch='$batch' ORDER BY `enrollment` ASC";							
										}
													
										else
										{
											$sel = "select * from studentreg where mentor='0' ORDER BY `enrollment` ASC";
										}
										$result= mysqli_query($con,$sel) or die(mysqli_error($con));
										//$serial_number=1;
										
									}
									else
									{
										$cmd="select * from studentreg where mentor='0'";
										$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
									}
										
									?>
						<tbody>	
						<?php	
						$serial_number=1;
							while($row =mysqli_fetch_array($result))
							{
						?>
						
							<tr>
								<td><?php echo $serial_number ?><?php $serial_number=$serial_number+1?></td>
								<td><?php echo $row['batch']?></td>
								<td><?php echo $row['branch']?></td>
								<td><?php echo $row['fname']?></td>
								
								<td><?php echo $row['lname']?></td>
								<td><input type="text" value="<?php echo $row['enrollment'] ?>" name="oldenrollment-temp[]" class="form-control" disabled="disabled"/>						 					<input type="hidden" value="<?php echo $row['enrollment'] ?>" name = "oldenrollment[]" class="form-control" /></td>
								<td>
								<select class='form-control' name="newenrollment[]">
								<option value="0">select</option>
									<?php 
									$sql= "select * from mentorreg";
									$result1=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row['fname']."'>".$row['fname']."</option>";
									}
									//mysqli_close($con);
								?>
								</select>
								
   
								</td>
								
							</tr>
							
						<?php
							
							}
						?>

						</tbody>
					</table>
					
					
				</form>	



						
				</div> <!-- col- 12 -->
			</div> <!-- main row -->  
	</div> <!-- /.container-->
			
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
