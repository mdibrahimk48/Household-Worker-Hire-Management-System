<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b>HIRING REQUEST</b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-"></i><b> HOME</b></a></li>
        <li class="active">HIRE REQUEST</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <div class="pull-right">
                <form method="POST" class="form-inline" action="sales_print.php">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right col-sm-8" id="reservation" name="date_range">
                  </div>
                  <button type="submit" class="btn btn-success btn-flat" name="print"><span class="glyphicon glyphicon-"></span><b> PRINT</b></button>
                </form>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered" style="background:#CCD1D1">
                <thead style="background:#ABEBC6">
                  <th class="hidden"></th>
                  <th><big><big><b><center>REQUEST NO.</center></b></big></big></th>
                  <th><big><big><b><center>CUSTOMER'S NAME</center></b></big></big></th>
                  <th><big><big><b><center>PAYMENT DETAILS</center></b></big></big></th>
                  <th><big><big><b><center>TOTAL AMOUNT</center></b></big></big></th>
                  <th><big><big><b><center>STANDING</center></b></big></big></th>
                  <th><big><big><b><center></center></b></big></big></th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
					
					if(isset($_POST["submit"])){
						$Pid=($_POST["ID"]);
						$sql3="UPDATE `checkout` SET   `role`=1 WHERE ID='$Pid'";
						if($conn->query($sql3)){
							echo("Delivered Confirmed");
						}else{
							echo("Database error");
						}
					}
					
					
					
					
					$sql="SELECT * FROM `checkout`";
                     $result = $conn->query($sql);
		//if($result->num_rows > 0){
				foreach($result as $row){
				$id=$row["ID"];
				$uid=$row["userID"];
				$amount=$row["amount"];
				$transaction=$row["transaction"];
				$role=$row["role"];
					?>
					<b><tr>
						<td><center>0<?=$id?></center></td>
					 
						<?php 
						$sql2="SELECT * FROM `users` WHERE id ='$uid' AND type =0";
					 $result1 = $conn->query($sql2);
					foreach($result1 as $row){
						$user=$row['email'];
					}
						?>
						<td><big><center><?=$user?></center></big></td>
						<td><center><?=$transaction?></center></td>
						<td><center><?=$amount?></center></td>
						<td><center><?php if($role==0){
							echo("Not Accepted Yet!");
						}else{
							echo("Request Accepted!");
						} ?></center></td>
							<td><center><form action="" method="post">
							<input type="hidden" value="<?=$id?>" name="ID">
							<b><input type="submit" name="submit" value="ACCEPT" class="btn btn-info btn-sm btn-flat" <?php if($role==1){?> disabled <?php } ?>></form></center></b></td>
					</tr></b>
					
					<?php
				}
                    $pdo->close();
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include '../includes/profile_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<!-- Date Picker -->
</body>
</html>
