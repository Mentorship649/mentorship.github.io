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
            <h1>Add Mentor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="form.php">Home</a></li>
              <li class="breadcrumb-item active">Add Mentor</li>
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
                <h3 class="card-title">Mentor Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="mentorquery.php" method="POST">

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
                    <label for="exampleInputEmail1">Mentor ID <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="mid" placeholder="Enter HOD ID" required/>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1"> Branch  <label style="color: red;">*</label> :</label><br/>
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
                    <label for="exampleInputEmail1">Mobile No <label style="color: red;">*</label> :</label>
                    <input type="TEXT" class="form-control" id="exampleInputEmail1" name="mn" maxlength="10" placeholder="Enter Mobile No" required/>
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputPassword1">E-Mail <label style="color: red;">*</label> :</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Enter Email Address" required/>
                  </div>

                 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password <label style="color: red;">*</label> :</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="pwd" placeholder="Enter Password" required/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password <label style="color: red;">*</label> :</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" name="conpwd" placeholder="Enter Confirm Password" required/>
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
