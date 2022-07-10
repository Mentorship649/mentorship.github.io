<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <div style=" padding-top: 70px;" class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-id-card fa-5x"></i></h3>
                  
                  <p>Enter your E-mail Address and User ID</p>
                  <div class="panel-body">
    
                    <form  action="sentmail.php" method="post">
    
	                   <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input name="enrollment" placeholder="Username/Enrollment" class="form-control" type="text" maxlength="12" required>
						</div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input name="email" placeholder="E-mail" class="form-control" type="email" required>
						</div>
                      </div>
					  
					  
					   
                     
					  
                      <div class="form-group">
					  <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Send</button>
                        
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>