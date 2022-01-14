<?php include 'includes/session.php'; ?>
<?php
	$output = '';
	if(!isset($_GET['code']) OR !isset($_GET['user'])){
		$output .= '
			<b><center><div class="alert alert-danger">
                <h4><i class="icon fa fa-warning"></i> Error!</h4>
                Code to Activate Account not Found!
            </div></b></center>
            <center><b><h4>You may <a href="signup.php">Register</a> or back to <a href="index.php">Home Page</a>.</h4></b></center>
		'; 
	}
	else{
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE activate_code=:code AND id=:id");
		$stmt->execute(['code'=>$_GET['code'], 'id'=>$_GET['user']]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			if($row['status']){
				$output .= '
					<center><b><div class="alert alert-danger">
		                <h3><i class="icon fa fa-warning"></i> Error!</h3>
		                Account Already Activated!
		            </div></b></center>
		            <center><b><h4>You may <a href="login.php">Login</a> or back to <a href="index.php">Homepage</a>.</h4></b></center>
				';
			}
			else{
				try{
					$stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
					$stmt->execute(['status'=>1, 'id'=>$row['id']]);
					$output .= '
						<b><center><div class="alert alert-success">
			                <h3><i class="icon fa fa-check"></i> Success!</h3>
			                Account activated - Email: <b>'.$row['email'].'</b>.
			            </div></b></center>
			            <center><b><h4>You may <a href="login.php">Login</a> or back to <a href="index.php">Homepage</a>.</h4></b></center>
					';
				}
				catch(PDOException $e){
					$output .= '
						<b><center><div class="alert alert-danger">
			                <h4><i class="icon fa fa-warning"></i> Error!</h4>
			                '.$e->getMessage().'
			            </div></b></center>
			            <center><b><h4>You may <a href="signup.php">Register</a> or back to <a href="index.php">Home Page</a>.</h4></b></center>
					';
				}

			}
			
		}
		else{
			$output .= '
				<b><center><div class="alert alert-danger">
	                <h4><i class="icon fa fa-warning"></i> Error!</h4>
	                Cannot Activate Account! Wrong Code!
	            </div></b></center>
	            <center><b><h4>You may <a href="signup.php">Register</a> or back to <a href="index.php">Home Page</a>.</h4></b></center>
			';
		}

		$pdo->close();
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<?php echo $output; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>