<?php include 'includes/session.php';
$conn = $pdo->open();
?>

<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">
			<?php
			if(isset($_POST["Submit"])){
				$txt=$_POST["amount"];
				$id=$_SESSION['user'];
				$Pid=$_SESSION["totalamout"];
			if($txt == ""){
				$txt="Cash On Delivery!";
			}
			$sql="INSERT INTO `checkout`( `userID`, `amount`, `transaction`) VALUES ('$id','$Pid','$txt')";
			if($conn->query($sql)){
				echo("Your Hire Is Confirmed!");
			}else{
				echo("Database Error");
			}
			}
			?>
	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<center><h1 class="page-header"><b><u><big><big><big>CHECKOUT</big></big></big></u></b></h1>
	        		<h3>Your Total Amount Is: <?=$_SESSION["totalamout"]?> BDT.</h3>
					<h3>BKash Account No: 01838300998 OR Select the "Cash On Delivery" Option.</h3></center>
					<center><h4><u>Transaction No:</u></h4></center>
	        		<div class="form-group">
	        			<center><form method="post" action="">
	        				<center><input type="text" name="amount" id="amount" class="form-control col-sm-6" onKeyUp="myFunction()" style="margin-bottom: 10px;"><center>
	        				<input type="checkbox" name="cash" id="myCheck" onclick="myFunction()" value="Cash On Delivery"> Cash On Delivery <br/>
	        				<center><button style="background:#EDBB99; margin-top: 10px;" disabled class="btn btn-primary" id="confirmBtn" type="submit" name="Submit" >SUBMIT</button></center>
	        			</form></center>
	        		</div>
 					<div>	
 					</div>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
<script>
 function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  var amount = $("#amount");
  // Get the output text
  var btn = $("#confirmBtn");
 
  // If the checkbox is checked, display the output text 
  if ((checkBox.checked == true) || (amount.val()!="" )){
    btn.removeAttr('disabled');
  } else {
    btn.attr('disabled','disabled');
  }
}
</script>
 
</body>
</html>