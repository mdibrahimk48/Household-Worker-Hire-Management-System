<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$slug = $_GET['product'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
	    $stmt->execute(['slug' => $slug]);
	    $product = $stmt->fetch();
	}
	
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-12">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
					<div class="col-sm-12">
		            		<center><h1 class="page-header"><b><big><big><u><?php echo $product['prodname']; ?></u></big></big></b></h1></center>
		            		<h3><center><b>BDT - <?php echo number_format($product['price'], 2); ?>/HOUR</center></b></h3>
		            		<p><b><center>WORKER'S CATEGORY:</b> <a href="category.php?category=<?php echo $product['cat_slug']; ?>"><?php echo $product['catname']; ?></center></a></p>
					</div>
		            	<div class="col-sm-12">
		            		<center><img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="40%" height="30%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		</center>
		            	</div>
		            </div>
						<div class="col-sm-12">
		            		<h3><b>DETAILS ABOUT WORKER:</b></h3>
		            		<p><?php echo $product['description']; ?></p>
		            	</div>
						<form class="form-inline" id="productForm">
		            			<center><div class="form-group">
			            			<div class="input-group col-sm-7">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" style="background:#AED6F1" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="text" name="quantity" id="quantity" style="text-align:center; background:#ABEBC6" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" style="background:#F5833A" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div></br></br>
			            			<button type="submit" style="background:green" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i><b> <b>ADD TO BASKET</b></button>
			            		</div></center>
		            </form>
		            </br>
				    <div class="fb-comments" data-href="http://localhost/Household-Worker-Hire/products.php?product=<?php echo $slug; ?>" data-numposts="10" width="100%"></div> 
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
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
</body>
</html>