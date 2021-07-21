<?php 
  require_once('views/admin/header.php');

 ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2 class="page-title"> Update User </h2>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Add new category</h4> -->
                    <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=user&act=update&admin=admin' method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
                        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="<?= $user['name'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="" name="email" value="<?= $user['email'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="" name="password" value="<?= $user['password'] ?>" require="">
                      </div>
                      <div class="form-group">
                        <label>Avatar</label>
                        <input type="file" class="form-control file-upload-info" name="avatar" id="ANH_SP">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <?php 
          require_once('views/admin/footer.php');
           ?>