<?php 
  require_once('views/admin/header.php');

 ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bài Viết</h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tiêu đề</th>
                          <th>Lượt xem</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($posts as $value) { ?>
                          <tr>
                            <td> <?= $value['id'] ?> </td>
                            <td> <?= $value['title'] ?> </td>
                            <td> <?= $value['view_count'] ?> </td>
                            <td>
                              <a href="" class="btn btn-gradient-primary viewModal" data-id ='<?= $value['id'] ?>'>Xem</a>
                              <a href="?mod=post&act=edit&admin=admin&id=<?= $value['id'] ?>" class="btn btn-gradient-success">Sửa</a>
                              <a href="?mod=post&act=destroy&admin=admin&id=<?= $value['id'] ?>" class="btn btn-gradient-danger">Xóa</a>
                            </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal" tabindex="-1" id='modalViewCategory' role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 800px">
                      <div class="modal-header">
                        <h3 class="modal-title">Xem chi tiết</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>ID: <span id = 'idPost'></span></p>
                        <p>Tiêu Đề: <span id = 'titlePost'></span></p>
                        <p>Mô Tả: <span id = 'descriptionPost'></span></p>
                        <p>Slug: <span id = 'slugPost'></span></p>
                        <p>Nội dung: <span id = 'contentPost'></span></p>
                        <p>Lượt xem: <span id = 'view_countPost'></span></p>
                        <p>Ngày tạo: <span id = 'created_atPost'></span></p>
                        <p>Ảnh:</p>
                        <img style="height: 300px;width: 400px;" src="" id="thumbnailPost">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
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
                          url: '/php27.zent/Project/models/processPost.php?id='+id,
                          type:'get',
                          success: (response)=>{
                              var response = JSON.parse(response);
                              console.log(response)
                              $('#idPost').text(response.id);
                              $('#titlePost').text(response.title);
                              $('#descriptionPost').text(response.description);
                              $('#thumbnailPost').attr('src','public/images/postImg/'+response.thumbnail);
                              $('#contentPost').text(response.content);
                              $('#view_countPost').text(response.view_count);
                              $('#slugPost').text(response.slug);
                              $('#created_atPost').text(response.created_at);
                              $('#modalViewCategory').modal('show');
                          }
                      })
                  })
              })
          </script>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm bài viết</h4>
                    <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=post&act=store&admin=admin' method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" required="">
                      </div>
                      <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control file-upload-info" name="thumbnail" id="ANH_SP" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mô tả</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="description" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nội dung</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="content" required="">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Thêm</button>
                      <button class="btn btn-light">Hủy</button>
                    </form>
                  </div>
                </div>
              </div>
              </div>
          <?php 
          require_once('views/admin/footer.php');
           ?>