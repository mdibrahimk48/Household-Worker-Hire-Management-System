<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h2 class="modal-title"><b><u><i>Add New User</i></u></b></h2></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">EMAIL ADDRESS: </label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">PASSWORD: </label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">FIRST NAME: </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">LAST NAME: </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">ADDRESS: </label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">CONTACT DETAILS: </label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">UPLOAD PHOTO: </label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-"></i><b> SAVE</b></button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_delete.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <p>DELETE USER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal" background="red"<i class="fa fa-"></i><b> CLOSE</b></button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-"></i><b> DELETE</b></button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check--o"></i><b> UPDATE</b></button>
              </form>
            </div>
        </div>
    </div>
</div> 


<!-- Activate -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Activating...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_activate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <p>ACTIVATE USER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Activate</button>
              </form>
            </div>
        </div>
    </div>
</div> 


     