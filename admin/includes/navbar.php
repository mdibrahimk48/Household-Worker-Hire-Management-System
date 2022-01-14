<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo"  style="background:green">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>H</b>WH</span>
    <!-- logo for regular state and mobile devices -->
	<span><b>HWH</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="background:green">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
		  		<img src="../images/icon.png" alt="Icon" height="50">

    <div class="navbar-custom-menu"  style="background:#AED6F1">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <b><span class="hidden-xs"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span></b>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="background:#401E09">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p> <b>Name: 
                <?php echo $admin['firstname'].' '.$admin['lastname']; ?></br>
				 
                <small>Registration Date: <?php echo date('M. Y', strtotime($admin['created_on'])); ?></small>
              </p>
            </li>
            <li class="user-footer" style="background:#85929E">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-info btn-flat" id="admin_profile"><b>ACCOUNT</b></a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-info btn-flat"><b>LOG OUT</b></a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>