<header class="main-header" >
  <nav style="background:green" class="navbar navbar-static-top" >
    <div class="container">
      <div class="navbar-header" >
		<img src="images/icon.png" alt="Icon">
        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-right" id="navbar-collapse" >
        <ul class="nav navbar-nav">
          <li style="font:300px"><a href="index.php"><b>HOME</b></a></li>
          <li><a href="about_us.php"><b>SERVICE</b></a></li>
          <li><a href="contact_us.php"><b>OTHERS NEED</b></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>WORKER CATEGORY</b><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" style="background:#CCD1D1">
              <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
            </ul>
          </li>
        </ul>
        <form method="POST" class="navbar-form navbar-left" action="search.php">
          <div class="input-group">
              <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search Worker" required>
              <span class="input-group-btn" id="searchBtn" style="display:none;">
                  <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
              </span>
          </div>
        </form>
      </div></br></br>
	  
	  
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-shopping-cart"></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu" >
              <li class="header" style="background:#CCD1D1"><b>There are <span class="cart_count"></span> Worker's for Hiring!</b></li>
              <li>
                <ul class="menu" id="cart_menu" style="background:#CCD1D1"></ul>
              </li>
              <li class="footer" ><a href="cart_view.php" style="background:#CCD1D1"><b><big>CLICK FOR VIEW BASKET</big></b></a></li>
            </ul>
		  <li class="footer"><a href="#"><b>CALL 02594</b></a></li>
          </li>
		    

		  
          <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="User Image">
                    <span class="hidden-xs"><b>'.$user['firstname'].' '.$user['lastname'].'</b></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header" style="background:#401E09">
                      <img src="'.$image.'" class="img-circle" alt="User Image">

                      <p><b>
                        '.$user['firstname'].' '.$user['lastname'].'</b>
                        <small><b>Registration Date: '.date('M. Y', strtotime($user['created_on'])).'</b></small>
                      </p>
                    </li>
                    <li class="user-footer" style="background:#85929E">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-info btn-flat"><b>ACCOUNT</b></a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-info btn-flat"><b>LOG OUT</b></a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
				<li><a href='signup.php'><b>REGISTRATION</b></a></li>
                <li><a href='login.php'><b>LOGIN</b></a></li>
              ";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>