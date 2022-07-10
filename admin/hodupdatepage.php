<?php
session_start();
include "include/connection.php";
$hid=$_GET['hid'];
$cmd="select * from hodreg where hid='$hid'";
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
            <h1>Edit HOD</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">Edit HOD</li>
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
                <h3 class="card-title">Edit HOD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="hodupdatequery.php" method="POST">
                 
				 <div class="card-body">
				 <div class="form-group">
                    <label for="exampleInputEmail1">HOD ID <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="hid" value="<?php echo $row['hid']; ?>" readonly />
                  </div>
				 
				  
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="fname" value="<?php echo $row['fname']; ?>" required/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name <label style="color: red;">*</label> :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="lname" value="<?php echo $row['lname']; ?>" required/>
                  </div>

                  

                  <div class="form-group">
                  <label for="exampleInputEmail1"> Branch  <label style="color: red;">*</label> :</label><br/>
                   <select class='form-control' name="branch">
								<option>select</option>
									<?php 
									include "include/connection.php";
									$sql= "select * from branch";
									$result1=mysqli_query($con,$sql);
									while($row1=mysqli_fetch_array($result1))
									{
										echo "<option value='".$row1['bname']."'>".$row1['bname']."</option>";
									}
									//mysqli_close($con);
								?>	
								</select>
                </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">E-Mail <label style="color: red;">*</label> :</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $row['email']; ?>" required/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No <label style="color: red;">*</label> :</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="mn" value="<?php echo $row['mobile']; ?>" maxlength="10" required/>
                  </div>

                  
    
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
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
