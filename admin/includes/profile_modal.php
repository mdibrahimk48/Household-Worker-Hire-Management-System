<!-- Add -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<center><h2 class="modal-title"><b><u># PROFILE EDIT #</u></b></h2></center>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="email" class="col-sm-3 control-label">EMAIL ADDRESS: </label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="email" name="email" value="<?php echo $admin['email']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">PASSWORD: </label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter New Password.......">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">FIRST NAME: </label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $admin['firstname']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">LAST NAME: </label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $admin['lastname']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">PHOTO: </label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">CURRENT PASSWORD: </label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Enter Your Current Password......." required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check--o"></i><b> UPDATE</b></button>
            	</form>
          	</div>
        </div>
    </div>
</div>