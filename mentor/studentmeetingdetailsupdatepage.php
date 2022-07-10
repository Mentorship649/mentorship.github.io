<?php
session_start();
include "include/connection.php";
$enrollment=$_GET['enrollment'];
$cmd="select * from studentmeetingdetails where enrollment='$enrollment'";
$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
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
            <h1>Edit Student Meeting Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mentorhome.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Student Meeting Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Student Meeting Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method = "POST" action = "studentmeetingupdatequery.php">
                <div class="card-body">
                  
				   <div class="form-group">
                    <label for="exampleInputPassword1">Enrollment :</label>
                    <input type="text" name ="enrollment" value="<?php echo $row['enrollment']; ?>" class="form-control" readonly required/>
                  </div>
				  
                <div class="form-group">
                    <label for="exampleInputPassword1">First Name <label style="color: red;">*</label> :</label>
                    <input type="text" name ="fname" value="<?php echo $row['fname']; ?>" class="form-control"  required/>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name <label style="color: red;">*</label> :</label>
                    <input type="text" name ="lname" value="<?php echo $row['lname']; ?>" class="form-control"   required/>
                  </div>
				  
				  
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth <label style="color: red;">*</label> :</label>
                    <input type="text" name ="datebirth" value="<?php echo $row['datebirth']; ?>" class="form-control" required/>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Gender <label style="color: red;">*</label> :</label><br/>
                    <h5> 
					<input type="radio"  name="gender" value="Male"> Male<br>
					<input type="radio"  name="gender" value="Female"> Female<br>
					<input type="radio"  name="gender" value="Other"> Other </h5>
                  </div>
				  
				  <div class="form-group">
                  <label for="exampleInputEmail1"> Branch  <label style="color: red;">*</label> :</label><br/>
                   <select class='form-control' name="branch">
								<option>select</option>
									<?php 
									
									$sql1= "select * from branch";
									$result1=mysqli_query($con,$sql1);
									while($row1=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row1['bname']."'>".$row1['bname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1"> Batch  <label style="color: red;">*</label> :</label><br/>
                    <select class='form-control' name="batch">
								<option>select</option>
									<?php 
									
									$sql2= "select * from batch";
									$result2=mysqli_query($con,$sql2);
									while($row2=mysqli_fetch_array($result2))
									{
										echo "<option value='".$row2['batchname']."'>".$row2['batchname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1"> Year Of Admission  <label style="color: red;">*</label> :</label><br/>
                   <select class='form-control' name="admission">
								<option>select</option>
									<?php 
									include "include/connection.php";
									$sql3= "select * from yearofadmission";
									$result3=mysqli_query($con,$sql3);
									while($row3=mysqli_fetch_array($result3))
									{
										echo "<option value='".$row3['yname']."'>".$row3['yname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile <label style="color: red;">*</label> :</label>
                    <input type="text" name ="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" required/>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">Email <label style="color: red;">*</label> :</label>
                    <input type="text" name ="email" value="<?php echo $row['email']; ?>" class="form-control" required/>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Student Mid Exam Marks <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" value="<?php echo $row['midsem']; ?>" id="exampleInputEmail1" name="midsem"  placeholder="Enter Mid Exam Marks" required/>
                  </div>
				  
				<div class="form-group">
                    <label for="exampleInputEmail1">Student SPI <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" value="<?php echo $row['spi']; ?>" id="exampleInputEmail1" name="spi"  placeholder="Enter student SPI" required/>
                  </div>
                 
				<div class="form-group">
                    <label for="exampleInputEmail1">Student CGPA <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" value="<?php echo $row['cgpa']; ?>" id="exampleInputEmail1" name="cgpa"  placeholder="Enter student CGPA" required/>
                  </div>
				  
				<div class="form-group">
                    <label for="exampleInputEmail1">Student Attendance  <label style="color: red;">*</label> :</label><br/>
                    <input type="radio"  name="attendance" value="above70%"> Above 70%<br>
					<input type="radio"  name="attendance" value="below70%"> Below 70%<br>
                 </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Student Behaviour  <label style="color: red;">*</label> :</label><br/>
                    <h5> <input type="radio"  name="behaviour" value="Good">Good<br>
					<input type="radio"  name="behaviour" value="Bad"> Bad<br>
					<input type="radio"  name="behaviour" value="Average"> Average </h5>
                  </div>
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1">Problem <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" value="<?php echo $row['problem']; ?>" id="exampleInputEmail1" name="problem"  placeholder="Write Problem Here..." required>
                  </div>
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Student Meeting Schedule <label style="color: red;">*</label> :</label>
                    <input type="datetime-local" value="<?php echo $row['ms']; ?>" class="form-control" id="exampleInputEmail1" name="ms"  required/>
                  </div>
				
				  

                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" value = "add" class="btn btn-primary">Update</button>&emsp;&emsp;&emsp;
				  <button type="reset" name="reset" class="btn btn-danger">Cancel</button>

                </div>
              </form>
            </div>
            <!-- /.card -->
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
