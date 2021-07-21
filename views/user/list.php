
<?php 
  require_once('views/admin/header.php');

 ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Người dùng</h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Ảnh </th>
                          <th> ID </th>
                          <th> Họ Tên </th>
                          <th> Email </th>
                          <th> Ngày tạo </th>
                          <th></th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        foreach ($users as $user) {
                       ?>
                        <tr>
                          <td class="py-1"><img src="public/images/userImg/<?= $user['avatar'] ?>"></td>
                          <td><?= $user['id'] ?></td>
                          <td> <?= $user['name'] ?> </td>
                          <td><?= $user['email'] ?></td>
                          <td><?= $user['created_at'] ?></td>
                          <td>
                              <a href="" class="btn btn-gradient-primary viewModal" data-id ='<?= $user['id'] ?>'>Xem</a>
                              <a href="?admin=admin&act=edit&mod=user&id=<?= $user['id'] ?>" class="btn btn-gradient-success">Sửa</a>
                              <a href="?admin=admin&act=destroy&mod=user&id=<?= $user['id'] ?>" class="btn btn-gradient-danger">Xóa</a>
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="modal" tabindex="-1" id='modalViewUser' role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 600px">
                      <div class="modal-header">
                        <h3 class="modal-title">Xem chi tiết</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>ID: <span id = 'idUser'></span></p>
                        <p>Họ Tên: <span id = 'nameUser'></span></p>
                        <p>Auth: <span id = 'auth'></span></p>
                        <p>Email: <span id = 'emailUser'></span></p>
                        <p>Avatar:</p>
                        <img style="height: 300px;width: 400px;" src="" id="avatarUser">
                        <p style="margin-top: 10px">Ngày tạo: <span id = 'created_atUser'></span></p>
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
                          url: '/php27.zent/Project/models/processUser.php?id='+id,
                          type:'get',
                          success: (response)=>{
                              var response = JSON.parse(response);
                              console.log(response)
                              $('#idUser').text(response.id);
                              $('#nameUser').text(response.name);
                              $('#auth').text(response.auth);
                              $('#emailUser').text(response.email);
                              $('#avatarUser').attr('src','public/images/userImg/'+response.avatar);
                              $('#created_atUser').text(response.created_at);
                              $('#modalViewUser').modal('show');
                          }
                      })
                  })
              })
          </script>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Thêm người dùng</h4>
                    <form enctype="multipart/form-data" class="forms-sample" action="index.php?admin=admin&mod=user&act=store" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Họ Tên</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="" name="email" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="" name="password" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Quyền</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="" name="auth" required="">
                      </div>
                      <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="file" class="form-control file-upload-info" name="avatar" id="ANH_SP" required="">
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