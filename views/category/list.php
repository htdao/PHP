<?php 
  require_once('views/admin/header.php');

 ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Danh mục </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Tên danh mục </th>
                            <th> Mô tả </th>
                            <th> Ngày tạo </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $value) { ?>
                          <tr>
                            <td> <?= $value['id'] ?> </td>
                            <td> <?= $value['name'] ?> </td>
                            <td> <?= $value['description'] ?> </td>
                            <td><?= $value['created_at'] ?></td>
                            <td>
                              <a href="" class="btn btn-gradient-primary viewModal" data-id ='<?= $value['id'] ?>'>Xem</a>
                              <a href="?admin=admin&act=edit&mod=category&id=<?= $value['id'] ?>" class="btn btn-gradient-success">Sửa</a>
                              <a href="?admin=admin&act=destroy&mod=category&id=<?= $value['id'] ?>" class="btn btn-gradient-danger">Xóa</a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                </div>
                <div class="modal" tabindex="-1" id='modalViewCategory' role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 600px">
                      <div class="modal-header">
                        <h3 class="modal-title">Xem chi tiết</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>ID: <span id = 'idCategory'></span></p>
                        <p>Tên: <span id = 'nameCategory'></span></p>
                        <p>Danh Mục Cha: <span id = 'nameCategoryParent'></span></p>
                        <p>Mô Tả: <span id = 'descriptionCategory'></span></p>
                        <p>Ảnh:</p>
                        <img style="height: 300px;width: 400px;" src="" id="thumbnailCategory">
                        <p style="margin-top: 10px">Slug: <span id = 'slugCategory'></span></p>
                        <p>Ngày tạo: <span id = 'created_atCategory'></span></p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
              </div>
              <script type="text/javascript">
              $(document).ready(function(){
                  $('.table').on('click','.viewModal',function(e){
                      e.preventDefault()
                      let id = $(this).attr('data-id');
                      console.log('fghj')

                      $.ajax({
                          url: '/php27.zent/Project/models/process.php?id='+id,
                          type:'get',
                          success: (response)=>{
                              var response = JSON.parse(response);
                              console.log(response)
                              $('#idCategory').text(response.id);
                              $('#nameCategory').text(response.name);
                              $('#descriptionCategory').text(response.description);
                              if (response.parent_id==null) {
                                  $('#nameCategoryParent').text('Là danh mục cha')
                              }else{
                                  $('#nameCategoryParent').text(response.parent_id)
                              }
                              $('#thumbnailCategory').attr('src','public/images/categoriesImg/'+response.thumbnail);
                              $('#slugCategory').text(response.slug);
                              $('#created_atCategory').text(response.created_at);
                              $('#modalViewCategory').modal('show');
                          }
                      })
                  })
              })
          </script>
              </div>
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm danh mục</h4>
                    <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=category&act=store&admin=admin' method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="name" required="">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Danh mục cha</label>
                          <select class="form-control" name="parent_id" id="category">
                          <option value="NULL">Danh mục cha</option>
                          <?php foreach ($parents as $cate) { ?>
                              <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                          <?php } 
                          ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control file-upload-info" name="thumbnail" id="ANH_SP" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mô tả</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="" name="description" required="">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2" required="">Thêm</button>
                      <button class="btn btn-light">Hủy</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php 
          require_once('views/admin/footer.php');
           ?>