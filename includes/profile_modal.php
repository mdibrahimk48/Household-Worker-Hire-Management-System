<!-- Transaction History -->
<div class="modal fade" id="transaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h2 class="modal-title"><b><u># HIRING DETAILS #</u></b></h2></center>
            </div>
            <div class="modal-body">
              <p>
                HIRING DATE: <span id="date"></span>
                <span class="pull-right">TRANSACTION ID: <span id="transid"></span></span> 
              </p></br>
              <table class="table table-bordered" style="background:#CCD1D1">
                <thead style="background:#ABEBC6">
                  <th><b><big><center>NAME</center></big><b/></th>
                  <th><b><big><center>PRICE</center></big></b></th>
                  <th><b><big><center>HIRING HOUR</center></big></b></th>
                  <th><b><big><center>SUB TOTAL</center></big></b></th>
                </thead>
                <tbody id="detail">
                  <tr>
                    <td colspan="3" align="right"><b><center>TOTAL PRICE</center></b></td>
                    <td><span id="total"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-info btn-flat" data-dismiss="modal"><i class="fa fa-"></i><b> CLOSE</b></button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <center><h2 class="modal-title"><b><u># UPDATE YOUR ACCOUNT #</u></b></h2></center>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="profile_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label"><b>FIRST NAME: </b></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label"><b>LAST NAME: </b></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><b>EMAIL: </b></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"><b>PASSWORD: </b></label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label"><b>CONTACT INFO: </b></label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $user['contact_info']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label"><b>ADDRESS: <b/></label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="address" name="address" placeholder="eg. - 43/V/1, Panthapath, Dhaka"><?php echo $user['address']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label"><b>PHOTO: </b></label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label"><b>CURRENT PASSWORD: </b></label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Enter Your Current Password...." required>
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