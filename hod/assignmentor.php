<?php
include "include/connection.php";
session_start();	
$serial_number=1;				
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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Assign Mentor</li>
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
                        <h3 class="card-title">Select Batch to Assign Mentor</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <div class="form-group">
                                <select name="batch" class="form-control">
                                    <option>Batch</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2019">2019</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>

                            
                            <div class="form-group">
                                <input type="submit" name="find" value="Go" class="btn btn-primary" id="export" />

                            </div>
                        </form>
                        <section class="content">
<div class="col-md-2">
						<div class="form-group">
						
							<form action="final-assign-mentor1.php" method="post">
								<input type="submit" name="chn_enrollment" value="Assign All" class="btn btn-default"/>
							
						</div>
					</div>
                            <!-- Default box -->
							
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Mentor Details</h3>
                                </div>
								<br>
								
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
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
									if(isset($_POST['find']))
									{
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
										$serial_number=1;
										
									}
									else
									{
										$cmd="select * from studentreg where mentor='0'";
										$result= mysqli_query($con,$cmd) or die(mysqli_error($con));
									}
										
									?>

                                        <tbody>
                                            <tr>
                                                <?php
							while($row=mysqli_fetch_array($result))
							{
								$en=$row['enrollment'];
						?>
                                                <td><?php echo $serial_number ?><?php $serial_number=$serial_number+1?>
                                                </td>
                                                <td><?php echo $row['batch']; ?></td>
                                                <td><?php echo $row['branch']; ?></td>
                                                <td><?php echo $row['fname']; ?></td>
                                                <td><?php echo $row['lname']; ?></td>
                                                <td><input type="text" value="<?php echo $en; ?>" name="oldenrollment-temp[]" class="form-control" />						 					
																 					
												<input type="hidden" value="<?php echo $en;?>" name = "oldenrollment[]" class="form-control" /></td>
                                                <td>
												<select class='form-control' name="newenrollment[]">
													<option value="0">select</option>
														<?php 
														$sql= "select * from mentorreg";
														$res=mysqli_query($con,$sql);
														while($r=mysqli_fetch_array($res))
														{
															echo "<option value='".$r['fname']."'>".$r['fname']."</option>";
														}
														
													?>
													</select>
												</td>
                                            </tr>
                                            <?php
												}
											?>
                                        </tbody>
                                        <tfoot>

                                            <tr>

                                                <th>Sr. No.</th>
                                                <th>Batch</th>
                                                <th>Branch</th>

                                                <th>First Name</th>

                                                <th>Last Name</th>
                                                <th>Enrollment No.</th>
                                                <th>Select Faculty</th>
                                            </tr>

                                        </tfoot>
                                    </table>
									
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
						</form>
                        </section>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
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