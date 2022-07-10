   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="adminhome.php" class="brand-link">
      <img src="dist/img/mentorship.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mentorship</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/adminlogo.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="adminhome.php" class="d-block"><?php echo $_SESSION["admin"]; ?></a>
        </div>
      </div>
	
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"  data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="adminhome.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
		  <li class="nav-header">HOD</li>
		  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                HOD
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="hodregpage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add HOD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="hoddisplay.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage HOD</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">Students</li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="studentregpage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="studentdisplay.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Students</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="studentlist.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Download Student List</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
	  
	  
    </div>
    <!-- /.sidebar -->
  </aside>