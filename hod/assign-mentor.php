<?php
session_start();
if(!isset($_SESSION['username']))
{
       header('location:../index.php');
}
include("../conn.php");
session_start();	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Assign Mentor</title>
<?php
		include("../include/link.php");
?>

<SCRIPT type="text/javascript">

    $(function () {

        // add multiple select / deselect functionality

        $("#selectall").click(function () {

            $('.name').attr('checked', this.checked);

        });
       

    });

</SCRIPT>
<script type="text/javascript">
	/*function disable()
	{
		document.getElementById("oldenrollment").disabled = true;
	}*/
</script>
</head>

<body style="background-color:#ffffff; background-repeat:no-repeat; background-position:inherit; color:black">

<?php
require_once("include/menu.php");
?>
<div class="container">
			<div class="row">
				<form action="" method="post" enctype="multipart/form-data">
					
					<div class="col-md-2">
						<div class="form-group">
							
							<select name="batch" class="form-control">	
								<option value="">Batch</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
							
							
							</select>
						</div>
					</div>
					
					
					
					
					
					<div class="col-md-4">
						<div class="form-group">
							
							<input type="text" name="search" class="form-control" placeholder="Search Here..."/>
						
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
	
		<a id="back2Top" title="Back to top" href="#">&#10148;</a>

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
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Enrollment No.</th>
							<th>Select Faculty</th>
						  </tr>
						</thead>
						<?php
						if(isset($_POST['go']))
						{
							$batch = $_POST['batch'];
							$mentor=$_POST['mentor'];
							$search = strtoupper($_POST['search']);	
							$u=$_SESSION['username'];
							$branch="07 COMPUTER ENGINEERING";
							//echo $search;				
							if($batch==null && $search==null)
							{
								$sel = "select * from smd_student_detail where  Stu_Branch='$branch' and mentor='0' ORDER BY `Stu_Student_Enrollment_No` ASC";							
							}
							elseif($search==null)
							{
								$sel = "select * from smd_student_detail where Stu_Batch='$batch' and  Stu_Branch='07 COMPUTER ENGINEERING' and mentor='0' ORDER BY `Stu_Student_Enrollment_No` ASC";
							
							}elseif($batch==null && $search==null)
							{
								$sel = "select * from smd_student_detail where mentor='$mentor' and  Stu_Branch='07 COMPUTER ENGINEERING' and mentor='0' ORDER BY `Stu_Student_Enrollment_No` ASC";
							}
							elseif($batch==null)
							{
								$sel = "select * from smd_student_detail where Stu_Student_Enrollment_No='$search' and  Stu_Branch='07 COMPUTER ENGINEERING' and mentor='0' ORDER BY `Stu_Student_Enrollment_No` ASC";
							}			
							else
							{
								$sel = "select * from smd_student_detail where Stu_Batch='$batch' and mentor='0' and  Stu_Branch='07 COMPUTER ENGINEERING' and (Stu_Student_Enrollment_No LIKE '%$search%' or Stu_Firstname LIKE '%$search%' or Stu_Middlename LIKE '%$search%' or Stu_Lastname LIKE '%$search%' or Stu_gender LIKE '%$search%' or Stu_Birth_Date LIKE '%$search%' or Stu_Category LIKE '%$search%' or Stu_Admission_Type LIKE '%$search%' or Stu_ACPC_Admitted_Seat LIKE '%$search%' or Stu_GUJCET_Roll_No LIKE '%$search%' or Stu_City LIKE '%$search%' or Stu_Parents_Phone_No LIKE '%$search%' or Stu_Student_Phone_No LIKE '%$search%' or Stu_Guardians_Phone_No LIKE '%$search%' or Stu_Telephone_No LIKE '%$search%' or Stu_Email LIKE '%$search%' or Stu_Barcode LIKE '%$search%' or Stu_Membar_Code LIKE '%$search%' or Stu_Admission_Category LIKE '%$search%') ORDER BY `Stu_Student_Enrollment_No` ASC";
							}						
					
									
					}	
						
						
						else
						{
							//$sel = "select * from smd_student_detail ORDER BY `Stu_Student_Enrollment_No` ASC";
						}					
						
							//$sel = "select * from smd_student_detail";
							$ex = $conn->query($sel);
							$_SESSION["excel"] = $sel;
							
							
							$serial_number=1;
						?>
						<tbody>	
						<?php	
						
							while($row = $ex->fetch_object())
							{
						?>
						
							<tr>
								<td><?php echo $serial_number ?><?php $serial_number=$serial_number+1?></td>
								<td><?php echo $row->Stu_Batch?></td>
								<td><?php echo $row->Stu_Branch?></td>
								<td><?php echo $row->Stu_Firstname ?></td>
								<td><?php echo $row->Stu_Middlename ?></td>
								<td><?php echo $row->Stu_Lastname ?></td>
								<td><input type="text" value="<?php echo $row->Stu_Student_Enrollment_No ?>" name="oldenrollment-temp[]" class="form-control" disabled="disabled"/>						 					<input type="hidden" value="<?php echo $row->Stu_Student_Enrollment_No ?>" name = "oldenrollment[]" class="form-control" /></td>
								<td>
								<select class='form-control' name="newenrollment[]">
								<option value="0">select</option>
									<?php 
									$sql= "select * from ce_mentor_list ORDER BY `mid` ASC";
									$result=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_array($result))
									{
										echo "<option value='".$row['shortname']."'>".$row['shortname']."</option>";
									}
									mysqli_close($con);
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
	
				<!-- Modal Start-->
					<div class="modal fade" id="myModal" role="dialog">
		
		
    
  					</div>
				<!-- Modal End -->
				
				
<?php
	require_once("../include/footer.php");
?>
        
</body>
</html>
<script type="text/javascript">
 $(document).on('click', '#getUser', function(e){  
  var uid = $(this).data('id');
  //alert(uid);
  $("#myModal").modal("show");
  	$.ajax
	({
      url: 'administrator-view-record2.php',
      type: 'POST',
	  data: {id:uid},
      dataType: 'html',
	  success:function(data)
	  {
		//alert("hi");
		$("#myModal").html(data);
		
		  
	  }  
	});
	  
}); 
 </script>

 
