<?php
session_start();
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
            <h1>Add Student Meeting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="mentorhome.php">Home</a></li>
              <li class="breadcrumb-item active">Add Student Meeting</li>
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
                <h3 class="card-title">Add Student Meeting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="studentmeetingquery.php" method="POST">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fname" placeholder="Enter First Name" required/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="lname" placeholder="Enter Last Name" required/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Enrollment NO. <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="enrollment" placeholder="Enter Enrollment NO" required/>
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Birth <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="dob" placeholder="Enter Date Of Birth" required/>
                  </div>
				
				<div class="form-group">
                    <label for="exampleInputEmail1">Gender <label style="color: red;">*</label> :</label><br/>
                    <h5> <input type="radio"  name="gender" value="Male"> Male<br>
					<input type="radio"  name="gender" value="Female"> Female<br>
					<input type="radio"  name="gender" value="Other"> Other </h5>
                  </div>
				  
                  <div class="form-group">
                  <label for="exampleInputEmail1"> Student Branch  <label style="color: red;">*</label> :</label><br/>
                   <select class='form-control' name="branch">
								<option>select</option>
									<?php 
									include "include/connection.php";
									$sql= "select * from branch";
									$result1=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row['bname']."'>".$row['bname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1"> Student Semester  <label style="color: red;">*</label> :</label><br/>
                     <select class='form-control' name="semester">
								<option>select</option>
									<?php 
									
									$sql= "select * from semester";
									$result1=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row['semname']."'>".$row['semname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>
			
				
				<div class="form-group">
                  <label for="exampleInputEmail1"> Student Batch  <label style="color: red;">*</label> :</label><br/>
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
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1"> Year Of Admission  <label style="color: red;">*</label> :</label><br/>
                   <select class='form-control' name="admission">
								<option>select</option>
									<?php 
									include "include/connection.php";
									$sql= "select * from yearofadmission";
									$result1=mysqli_query($con,$sql);
									while($row=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row['yname']."'>".$row['yname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="mn" maxlength="10" placeholder="Enter Mobile No" required/>
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputPassword1">E-Mail <label style="color: red;">*</label> :</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter Email Address" required/>
                  </div>
				  
				<div class="form-group">
                    <label for="exampleInputEmail1">Student Mid Exam Marks <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="midsem"  placeholder="Enter Mid Exam Marks" required/>
                  </div>
				  
				<div class="form-group">
                    <label for="exampleInputEmail1">Student SPI <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="spi"  placeholder="Enter student SPI" required/>
                  </div>
                 
				<div class="form-group">
                    <label for="exampleInputEmail1">Student CGPA <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cgpa"  placeholder="Enter student CGPA" required/>
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
                    <textarea class="form-control" id="exampleInputEmail1" name="problem"  placeholder="Write Problem Here..." required></textarea>
                  </div>
				 
				 <div class="form-group">
                    <label for="exampleInputEmail1">Student Meeting Schedule <label style="color: red;">*</label> :</label>
                    <input type="datetime-local" class="form-control" id="exampleInputEmail1" name="ms"  required/>
                  </div>
				 
				 
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  &emsp;&emsp;&emsp;<button type="reset" class="btn btn-danger">Cancel</button>
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
