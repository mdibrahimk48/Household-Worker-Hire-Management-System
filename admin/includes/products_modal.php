<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h2 class="modal-title"><b><span class="name"></span></b></h2></center>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew"">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" >
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h2 class="modal-title"><b><u># ADD NEW WORKER #</u></b></h2></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_add.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name" class="col-sm-1 control-label"><b>NAME: </b></label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>

                  <label for="category" class="col-sm-1 control-label"><b>CATEGORY: </b></label>

                  <div class="col-sm-5">
                    <select class="form-control" id="category" name="category" required>
                      <option value="" selected>SELECT ONE</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="price" class="col-sm-1 control-label"><b>PRICE: </b></label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>

                  <label for="photo" class="col-sm-1 control-label"><b>PHOTO: </b></label>

                  <div class="col-sm-5">
                    <input type="file" id="photo" name="photo">
                  </div>
                </div>
                <p><b>DETAILS OF WORKER: </b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="description" rows="10" cols="80" required></textarea>
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

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h2 class="modal-title"><b><span class="name"></span></b></h2></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label"><b>PHOTO: </b></label>

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