<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mentor Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Mentor</b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="mentorquery.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
          
          <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Enter Captcha Code" required>
         <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-id-card" aria-hidden="true"></span>
            </div>
          </div>
		  </div>
        <div class="input-group mb-3">
          &emsp;<label>Captcha Code  :-  </label>&emsp;&emsp;
		  
		  <?php
			  session_start();
			  // Generate captcha code
			  $random_num    = md5(random_bytes(64));
			  $captcha_code  = substr($random_num, 0, 5);
			  // Assign captcha in session
			  
			  $_SESSION['CAPTCHA_CODE'] = $captcha_code;
		?>
		 <div class="form-group col-3">
		      
		  <input type="text" style="background-color: #a9a9a9"  class="form-control" Value = <?php echo "$captcha_code"; ?>  readonly >
		 
		</div>  
		
         <div class="col">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button><br/>
			
          </div>
		  <div class="col-12">
		    <button type="reset" name="cancel" class="btn btn-danger btn-block">Cancel</button>
          </div>
		   <div class="col-12">
		   <br/>
		   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="../" class="small-box-footer">Back To Home </a>
            </div> 
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        
      </div>
      <!-- /.social-auth-links -->

      
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
