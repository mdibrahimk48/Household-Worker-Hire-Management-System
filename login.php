<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
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
	
<div  class="col-sm-20">
      <big><big><big><b><center>|| <a href="index.php"><i class="fa fa-home"></i> Home</a> ||
		<a href="signup.php"><i class="fa fa-sign-in"></i> Registration</a> ||</center></b></big></big></big>
		    	<u><h1 class="login-box-msg"><b>LOG IN FORM</b></h1></u>
    	<form action="verify.php" method="POST">
      		<div class="form-group has-feedback">
				<p><b>EMAIL:</b></p>
        		<input type="email" class="form-control" name="email" placeholder="eg - ibrahim16-326@diu.edu.bd" required>
      		</div>
          <div class="form-group has-feedback">
			<p><b>PASSWORD:</b></p>
            <input type="password" class="form-control" name="password" placeholder="Password...." required>
          </div>
		  <div align="right">
		        <b><a href="password_forgot.php">Forgotten Password?</a></b>
			</div>
      		<div class="row">
    			<div class="col-xs-20">
          			<center><button type="submit" class="btn btn-info btn-flat" name="login" style="margin-top: 10px"><b> LOG IN</b></button></center>
        		</div>
      		</div>
    	</form>

	  
	    <center><u><h2 class='box-title'><b>SOCIAL FEED</b></h2></u></center>
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
  	</div>
</div>

	
<?php include 'includes/scripts.php' ?>
</body>
</html>