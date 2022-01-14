<?php include 'includes/session.php'; ?>
<?php
  if(!isset($_GET['user'])){
    header('location: users.php');
    exit();
  }
  else{
    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
    $stmt->execute(['id'=>$_GET['user']]);
    $user = $stmt->fetch();

    $pdo->close();
  }

?>
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
        <b><?php echo $user['firstname'].' '.$user['lastname'].'`s Basket' ?></b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-"></i><b> HOME</b></a></li>
        <li>CUSTOMERS</li>
        <li class="active">BASKETS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <center><a href="#addnew" data-toggle="modal" id="add" data-id="<?php echo $user['id']; ?>" class="btn btn-info btn-flat"><b><i class="fa fa-plus"></i> NEW WORKERS</b></a>
              <a href="users.php" class="btn btn-info btn-flat"><i class="fa fa-arrow-"></i><b> CUSTOMERS PAGE</b></a></center>
            </div>
            <div class="box-body">
              <table id="" class="table table-bordered" style="background:#CCD1D1">
                <thead style="background:#ABEBC6">
                  <th><big><b><center>WORKERS NAME</center></b></big></th>
                  <th><big><b><center>REQUEST HOUR</center></b></big></th>
                  <th><big><b><center>ACTION</center></b></big></th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT *, cart.id AS cartid FROM cart LEFT JOIN products ON products.id=cart.product_id WHERE user_id=:user_id");
                      $stmt->execute(['user_id'=>$user['id']]);
                      foreach($stmt as $row){
                        echo "
                          <tr>
                            <td><center>".$row['name']."</center></td>
                            <td><center>".$row['quantity']."</center></td>
                            <td>
                              <center><button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-'></i><b> UPDATE</b></button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-'></i><b> DELETE</b></button></center>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
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
    <?php include 'includes/cart_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('#add').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getProducts(id);
  });

  $("#addnew").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

});

function getProducts(id){
  $.ajax({
    type: 'POST',
    url: 'products_all.php',
    dataType: 'json',
    success: function(response){
      $('#product').append(response);
      $('.userid').val(id);
    }
  });
}

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'cart_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.cartid').val(response.cartid);
      $('.userid').val(response.user_id);
      $('.productname').html(response.name);
      $('#edit_quantity').val(response.quantity);
    }
  });
}
</script>
</body>
</html>
