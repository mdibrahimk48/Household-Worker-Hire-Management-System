<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">
			  <p><b><a href="index.php">HOME</a> > SERVICE<b></p>		
			  		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <center><img src="images/banner1.jpg" alt="First slide" height="300" width="100%"></center>
		                  </div>
		                  <div class="item">
		                    <center><img src="images/banner2.jpg" alt="Second slide" height="300" width="100%"></center>
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
				
				
				<div class="col-sm-3">
	        		<?php include 'includes/sidebar2.php'; ?>
	        	</div>		
		<div class="col-sm-9">		
			<center><h1> ABOUT OUR SERVICES </h1></center>
	    </div>
		<div class="col-sm-3">		
			<h3> PLUMBERS </h3>
			<center><img src="images/plumberIcon.png" height="200"></center>
			<p align="justify"> At this Worker Hire company all our plumbers need to be fully qualified and hold 
			a valid Plumbing license (Certificate III in Plumbing) or the international equivalent. 
			Our experienced plumbers can help you to complete your household work within budget and on time. 
			We can supply plumbers with commercial, residential, industrial, civil and roof plumbing experience. Hire >>><a href="#"> Plumber</a></p>
	    </div> 
		<div class="col-sm-3">		
			<h3>ELECTRICIAN</h3>
			<center><img src="images/electricianIcon.png" height="200"></center>
			<p align="justify">At this Worker Hire company all our electricians are fully qualified, hold a valid electrical licence 
			(or international equivalent). We can also supply trade assistants to support 
			electricians you may have been working on site already. We monitor the performance of our electricians to 
			ensure that they work to the high standards we expect from them. Hire >>><a href="#"> Electrician</a></p>
	    </div> 
		<div class="col-sm-3">		
			<h3> HOUSE KEEPING </h3>
			<center><img src="images/housekeepingIcon.png" height="200"></center>
			<p align="justify"> At this Worker Hire company all our housekeeper need to be fully qualified and hold 
			a valid housekeeping service or the international equivalent. 
			Our experienced housekeeping can help you to complete your household work within budget and on time. 
			We can supply plumbers with commercial, residential and industrial housekeeping experience. Hire >>><a href="#"> House Keeper</a></p>
	    </div> 		
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>