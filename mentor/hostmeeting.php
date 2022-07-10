<?php
session_start();
if(!isset($_SESSION['mentor']))
{
    header('location:mentorloginpage.php');
}
include "include/connection.php";
// fecth faculty name
$email=$_SESSION['mentor'];
$cmd1="select fname,lname from mentorreg where email='$email'";
$result2=mysqli_query($con,$cmd1) or die(mysqli_error($con));
$row2=mysqli_fetch_array($result2);
$faculty=$row2['fname'].' '.$row2['lname'];

//$cmd2="select * from subject_details where sub_faculty='$faculty'";
//$result3=mysqli_query($con,$cmd2) or die(mysqli_error($con));
/*if(isset($_POST['meeting_submit']))
{
    $start=$_POST['surl'];
    $join=$_POST['jurl'];
    $id = $_POST['meetingid'];
    $passcode=$_POST['passcode'];
    $cmd="insert into meeting_details(start_url,join_url,meeting_id,passcode) values('$start','$join','$id','$passcode')";
    $result= mysqli_query($con,$cmd) or die(mysqli_error($con));
    if($result)
    {
        echo "<script>alert('Meeting Details Added Sucessfully');</script>";
		echo "<script>location.href='hostmeeting.php';</script>";
    }
    else
    {
        echo "<script>alert('Meeting Details Added Fail);</script>";
		    echo "<scrip>location.href='hostmeeting.php';</script>";
    }
}*/

?>
<!DOCTYPE html>
<html>
<head>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
/*$(document).ready(function(){
    $("button").click(function(){
      var countryId = $("#txtStartDate").val();
    alert(countryId);
    });
    
    
});*/
</script>
</head>
<?php
include "include/link.php";
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

<?php
include "include/nav.php";
include "include/sidebar.php";
?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Host Meeting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">host meeting</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Host Meeting</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
          
                <!-- /.card-body-->
                <div class="card-footer">
                <div id="box">
                <h2>Click button to Create a new meeting </h2>
              </div>
              <form action="create-meeting.php" method="POST">
               <div class="form-group col-md-12">
                   <!-- <label for="exampleInputEmail1">Subject</label>
                    <input type="text" name="topic" class="form-control" id="topic1">-->
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Topic Name</label>
                    <input type="text" class="form-control input-lg" placeholder="Enter Topic Name"  name="topic" id="txtTopic" required /> 
                 
                        <br />
                      <div class="input-group date form_datetime" id="StartDate">
                      <input type="datetime-local" onchange="checkDate()" class="form-control input-lg" placeholder="From"  name="SDate" id="txtStartDate" data-date-format="dd-mm-yyyy" required /> 
                     </div>
                        <br />
                    <button type="submit" id="createmeeting" name="submit" class="btn btn-primary">Create Meeting</button>
                  
                  </div>
                </form>

            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
	<script>
 function checkDate() {
    var selectedText = document.getElementById('txtStartDate').value;
    var selectedDate = new Date(selectedText).toLocaleString();
    var now = new Date().toLocaleString();
	
	
    if (selectedDate < now) {
     alert("Date must be in the future");
	 document.getElementById("txtStartDate").value = "";
    }
  }
</script>
    <?php
include "include/script.php";
include "include/footer.php";?>
</body>

</html>