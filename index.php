<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body style="background:green" class="hold-transition skin-blue layout-top-nav">
<div style="background:white" class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	
	
	 	        		<div style="background:white" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <center><img src="images/banner1.jpg" alt="First slide" height="400" width="100%"></center>
		                  </div>
		                  <div class="item">
		                    <center><img src="images/banner2.jpg" alt="Second slide" height="400" width="100%"></center>
		                  </div>
		                  <div class="item">
		                    <center><img src="images/banner3.jpg" alt="Third slide" height="400" width="100%"></center>
		                  </div>
						  <div class="item">
		                    <center><img src="images/banner4.jpg" alt="Fourth slide" height="400" width="100%"></center>
		                  </div>
						  <div class="item">
		                    <center><img src="images/banner5.jpg" alt="Fifth slide" height="400" width="100%"></center>
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
					<center>
					<div class="col-sm-12">
					<h1>“We promise to deliver the right skilled worker, in the right place, at the right time and for the right price.”</h1>
					<p><i><h4>Our workers are available to work anywhere within the Dhanmondi Area from Dhaka. 
					We can also supply general workers here once we’ve been given the adequate time and notice required. 
					This Household Worker Hire company can help minimise your overheads and let us take the headache out of your household work issues. </h4></i></P>
					</div>
					</center>
	  <div class="content-wrapper">
	    <div class="container">
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
		<div class="col-sm-9">		
			<b><center><h1> YOUR SERVICE ASSISTANT FOR HOME WORK </h1></center></b>
			<b><center><h4> DAMAGE COVERAGE || BEST PRICE || 24/7 SUPPORT || SERVICE RATING </h4></center></b>
	    </div>
		
		<div class="col-sm-3">		
			<center><h3> PLUMBING & SANITARY </h3></center>
			<center><img src="images/pansS.png" height="100" width="80%"></center>
			<center><p> Plumbing Products Repair and Checking</p></center>
			<center><p> Sanitary Solution and Cheking</p></center>
	    </div> 
		<div class="col-sm-3">		
			<center><h3> ELECTRIC REPAIR</h3></center>
			<center><img src="images/eRepair.png" height="100" width="80%"></center>
			<center><p> Electric Products Repair and Checking</p></center>
			<center><p> Installation Solution and Cheking</p></center>
	    </div> 
		<div class="col-sm-3">		
			<center><h3> GAS STOVE/BURNER </h3></center>
			<center><img src="images/gasStove.png" height="100" width="80%"></center>
			<center><p> Gas Stove Cleaning and Change</p></center>
			<center><p> Gas Stove Component Change</p></center>
	    </div> 	


		<div class="col-sm-3">		
			<center><h3> HOME CLEANING </h3></center>
			<center><img src="images/homeClean.png" height="100" width="80%"></center>
			<center><p> Bathroom Deep Cleaning</p></center>
			<center><p> Kitchen/Floor Deep Cleaning</p></center>
	    </div> 
		<div class="col-sm-3">		
			<center><h3> WALL PAINTING</h3></center>
			<center><img src="images/wallPainting.png" height="100" width="80%"></center>
			<center><p> Plastic or Normal Painting</p></center>
			<center><p> Art Painting or Wall Design</p></center>
	    </div> 
		<div class="col-sm-3">		
			<center><h3> MAID HIRE </h3></center>
			<center><img src="images/maid.png" height="100" width="80%"></center>
			<center><p> Permanent Maid Hire for Home Work</p></center>
			<center><p> Temporary Maid Hire for Home Work</p></center>
	    </div>



		<div class="col-sm-3">		
			<center><h3> HOUSE SHIFTING </h3></center>
			<center><img src="images/houseShifting.png" height="100" width="80%"></center>
			<center><p> Budget Office Shifting</p></center>
			<center><p> Home Farniture and Component Shifting</p></center>
	    </div> 
		<div class="col-sm-3">		
			<center><h3> FAARNITURE REPAIR</h3></center>
			<center><img src="images/woodWorker.png" height="100" width="80%"></center>
			<center><p> Door/Window Wood Repair</p></center>
			<center><p> Farniture Repair</p></center>
	    </div> 
		<div class="col-sm-3">		
			<center><h3> OTHERS WORK </h3></center>
			<center><img src="images/need.png" height="100" width="80%"></center>
			<center><p> Post Your Message or Need</p></center>
			<center><p> Post Request For Fequired Worker</p></center>
	    </div>		
		
		
		
	      <!-- Main content 
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>

		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        </div>
	      </section>-->
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>