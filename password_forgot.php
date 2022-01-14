<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style="background:white">
<div class="login-box">
			<img src="images/icon.png" height="54">	
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body">
      <big><b><center>|| <a href="index.php"><i class="fa fa-home"></i> Home</a> ||
		<a href="login.php"><i class="fa fa-sign-in"></i> Log In</a> ||
		<a href="signup.php"><i></i> Registration</a> ||</center></b></big></br>
		    	<u><h3 class="login-box-msg"><b>FORGOT PASSWORD</b></h3></u>

    	<form action="reset.php" method="POST">
      		<div class="form-group has-feedback">
							<p><b>EMAIL:</b></p>
        		<input type="email" class="form-control" name="email" placeholder="eg - ibrahim16-326@diu.edu.bd" required>
      		</div>
      		<center><div class="row">
    			<div class="col-xs-12">
          			<center><button type="submit" class="btn btn-info btn-flat" name="reset" style="margin-top: 10px">
					<i class="fa fa-mail-forward"></i> POST</button></center>
        		</div>
      		</div></center>
					<center><u><h3 class='box-title'><b>SOCIAL FEED</b></h3></u></center>
	  	<center><div class='box-body'>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-social-icon btn-"><i class="fa fa-instagram"></i></a>
			<a class="btn btn-social-icon btn-"><i class="fa fa-youtube"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-pinterest"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-whatsapp"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-linkedin"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-twitter"></i></a>
	  	</div></center>
		<center><b><a>info@householdworkerhire.com</a></b></center>
    	</form>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>