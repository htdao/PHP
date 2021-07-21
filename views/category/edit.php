<?php 
  require_once('views/admin/header.php');

 ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2 class="page-title"> Thêm Danh Mục </h2>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Add new category</h4> -->
                    <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=category&act=update&admin=admin' method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
                        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="name" value="<?= $category['name'] ?>">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Danh mục cha</label>
                          <select class="form-control" name="parent_id" id="category">
                          <option value="Danh mục cha">Danh mục cha</option>
                          <?php foreach ($parents as $cate) { ?>
                              <option <?php if ($cate['id']==$category['parent_id']) {
                                  # code...
                                  echo "selected";
                              } ?> value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                          <?php } 
                          ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Ảnh</label>
                        <input  type="file" class="form-control file-upload-info" name="thumbnail" id="ANH_SP">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mô tả</label>
                        <input value="<?= $category['description'] ?>" type="text" class="form-control" id="exampleInputPassword4" placeholder="" name="description">
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