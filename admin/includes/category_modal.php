<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h4 class="modal-title"><b><u> CRETAE NEW CATEGORY</u></b></h4></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label"><b>CATEGORY NAME: </b></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b><button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-"></i><b> SAVE</b></button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h4 class="modal-title"><b><u># CATEGORY EDIT FORM #</u></b></h4></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_edit.php">
                <input type="hidden" class="catid" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label"><b>NAME: </b></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_name" name="name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check--o"></i><b> UPDATE</b></button>
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
              <center><h4 class="modal-title"><b><u># DELETING #</u></b></h4></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>DELETE CATEGORY</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-"></i><b> DELETE</b></button>
              </form>
            </div>
        </div>
    </div>
</div>
