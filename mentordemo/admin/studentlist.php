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
            <h1>Student List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">Add Student</li>
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
                <h3 class="card-title">Download student Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="fileselectquery.php" method="POST">

                <div class="card-body">
                   <div class="form-group">
		   <label for="exampleInputEmail1"> Select Batch  <label style="color: red;">*</label> :</label><br/>
                                  <select class='form-control' name="batch" required>
								<option value="" >------:select:--------</option>
								<option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?> </option>
									
								</select>
				   </div>
				   
				    <div class="form-group">
		   <label for="exampleInputEmail1"> Select Format <label style="color: red;">*</label> :</label><br/>
                                  <select class='form-control' name="format" required>
								<option value="">------:select:--------</option>
								<option value="pdf">.pdf</option>
								<option value="xlsx">.xlsx</option>
									
								</select>
				   </div>
				   
				   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				   &emsp;<button type="reset" class="btn btn-danger">Cancel</button>
                 <!-- <button type="submit" name="submit">Export Excel File</button>
				  
				  

    
                </div>
                 </form>
                <form role="form" action="studentlistexportpdf.php" method="POST">
                 <div class="card-body">
              <button type="submit" name="submit">Export pdf File</button>
			  </div>
			   </form>-->
             
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
