<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'email.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">
			  <p><b><a href="index.php">HOME</a> > CONTACT<b></p>	       
		  		<div class="col-sm-3">
	        		<?php include 'includes/sidebar2.php'; ?>
	        	</div>		   

			<div class="col-sm-9">
	      <!-- Main content -->
	      <section class="content">
		  
		  
	        <div class="row " style="margin: auto 0px; display: inline;" >
	        	<form class="form-group" style="width: 90%" method="post" action="" >
				<center><label><img src="images/contact-us.png" ></label></center></br>
	        		<label> YOUR NAME:</label>
	        		<input class="form-control" type="text" name="name" placeholder="eg. - Md. Ibrahim Khalil" required>
	        		<label> MOBILE NO:</label>
	        		<input class="form-control" type="mobile" name="mobile" placeholder="eg. - 8801737328916" required margin-top: 10px>
	        		<label> YOUR EMAIL:</label>
	        		<input class="form-control" type="email" name="email" placeholder="eg. - ibrahim16-326@diu.edu.bd" required margin-top: 10px>
					<label> ADDRESS:</label>
	        		<input class="form-control" type="text" name="text" placeholder="eg. - 43/V/1, Panthapath, Dhaka." required margin-top: 10px>
	        		<label> TOPIC:</label>
	        		<input class="form-control" type="text" name="sub" placeholder="eg. - Explain" required margin-top: 10px>
	        		<label> POST YOUR MESSAGE:</label>
	        		<textarea class="form-control" name="msg" placeholder="eg. - Your Message..............." required></textarea>
	        		<center><b><input type="submit" name="submit" value="   POST   " class="btn btn-info btn-flat" style="margin-top: 20px"></b></center>
	        	</form>
				
				
		<?php
			$conn = $pdo->open();
			if(isset($_POST["submit"])){
				$name=$_POST["name"];
				$email=$_POST["email"];
				$subject=$_POST["sub"];
				$msg=$_POST["msg"];
				
				$sql="INSERT INTO `contact`( `name`, `email`, `subject`, `comment`) VALUES ( '$name','$email','$subject','$msg')";
				if($conn->query($sql)){
					$to="shaharufs@gmail.com";
					$msg.="<br/> For any query: ".$email;
					sendmail($to,$subject,$msg);
					echo("<center> <b style='background-color:#ADD8E6; color:red'>Thanks. Your Message Submitted Successfully. We Will Contact With You!</b></center>");
					
				}else{
					echo("Database error");
				}
			
			}		
		?>
				
				
				
	        </div>
	      </section>
		  	</div>

	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>