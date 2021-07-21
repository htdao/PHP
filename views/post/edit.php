<?php 
  require_once('views/admin/header.php');

 ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2 class="page-title"> Sửa Bài Viết </h2>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Add new category</h4> -->
                    <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=post&act=update&admin=admin' method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>" >
                        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="<?= $post['title'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control file-upload-info" name="thumbnail" id="ANH_SP">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mô tả</label>
                        <input type="text" class="form-control" name="description" value="<?= $post['description'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nội dung</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="content" value="<?= $post['content'] ?>">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Cập nhật</button>
                      <button class="btn btn-light">Hủy</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <?php 
          require_once('views/admin/footer.php');
           ?>