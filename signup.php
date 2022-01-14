<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page" style="background:white">
<div class="register-box">
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
	  	<center><div class='box-body'>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-facebook"></i></a>
			<a class="btn btn-social-icon btn-"><i class="fa fa-instagram"></i></a>
			<a class="btn btn-social-icon btn-"><i class="fa fa-youtube"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-pinterest"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-whatsapp"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-linkedin"></i></a>
	    	<a class="btn btn-social-icon btn-"><i class="fa fa-twitter"></i></a>
	  	</div></center>
	
  	<div class="col-sm-30">
	      <big><big><big><b><center>|| <a href="index.php"><i class="fa fa-home"></i> Home</a> ||
		<a href="login.php"><i class="fa fa-sign-in"></i> LOG IN</a> ||</center></b></big></big></big>
		    	<u><h2 class="login-box-msg"><b>REGISTRATION FORM</b></h2></u>
    	<p class="login-box-msg"><b>Please fill out the information below to register as a new customer.</b></p>

    	<form action="register.php" method="POST" style="weidth=100%">
          <div class="form-group has-feedback">
		  	<p><b>FIRST NAME:</b></p>
            <input type="text" class="form-control" name="firstname" placeholder="eg - Ibrahim" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
          </div>
          <div class="form-group has-feedback">
		  	<p><b>LAST NAME:</b></p>
            <input type="text" class="form-control" name="lastname" placeholder="eg - Khalil" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
          </div>
      		<div class="form-group has-feedback">
		  	<p><b>EMAIL:</b></p>
        		<input type="email" class="form-control" name="email" placeholder="eg - ibrahim16-326@diu.edu.bd" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
      		</div>
          <div class="form-group has-feedback">
		  	<p><b>PASSWORD:</b></p>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <div class="form-group has-feedback">
		  	<p><b>CONFIRM PASSWORD:</b></p>
            <input type="password" class="form-control" name="repassword" placeholder="Confirm Password" required>
          </div>
          <center><?php
            if(!isset($_SESSION['captcha'])){
              echo '
                <di class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </di>
              ';
            }
          ?></center>

		  <div align="right">
		        <b><a href="login.php">Already Registered?</a></b>
			</div>

      		<center><div class="row">
    			<div class="col-xs-12">
          			<button type="submit" class="btn btn-info btn-flat" name="signup" style="margin-top: 20px"><b> SUBMIT</b></button>
        		</div>
      		</div></center>
    	</form>		
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>