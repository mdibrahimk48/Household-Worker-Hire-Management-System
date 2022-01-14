<?php include 'includes/session.php'; ?>
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
	            <?php
	       			
	       			$conn = $pdo->open();

	       			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM products WHERE name LIKE :keyword");
	       			$stmt->execute(['keyword' => '%'.$_POST['keyword'].'%']);
	       			$row = $stmt->fetch();
	       			if($row['numrows'] < 1){
	       				echo '<center><b><h1 class="page-header">No Data Found For: <i><u>'.$_POST['keyword'].'</u></i></h1></b></center>';
	       			}
	       			else{
	       				echo '<center><h1 class="page-header"><b><big>Search Results For: <i>'.$_POST['keyword'].'</b></big></i></h1></center>';
		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :keyword");
						    $stmt->execute(['keyword' => '%'.$_POST['keyword'].'%']);
					 
						    foreach ($stmt as $row) {
						    	$highlighted = preg_filter('/' . preg_quote($_POST['keyword'], '/') . '/i', '<b>$0</b>', $row['name']);
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4' style='background:#ABEBC6'></br>
	       								<div class='box box-solid' style='background:#CCD1D1'>
		       								<div class='box-body prod-body'>
											              <p><b>
															PRICE: ৳ ".number_format($row['price'], 2)."<span></span>
															<span class='pull-right'>FOR: 1 HOUR (Min.)<span></span></span></b> 
														  </p>
		       									<img src='".$image."' width='100%' height='200px' class='thumbnail'>
		       									<center><h3><b><u><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></u></b></h3></center>
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
							echo "Connection Problem: " . $e->getMessage();
						}
					}

					$pdo->close();

	       		?> 
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