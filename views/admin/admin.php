<?php 
  include_once ('views/admin/header.php');
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Trang chủ
              </h3>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Số Bài Viết <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?= $sumPost ?></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Tổng Lượt Xem <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?=$sumView?></h2>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Số Người Dùng <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?= $sumUser ?></h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bài viết mới nhất</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Người dùng </th>
                            <th> Tiêu đề </th>
                            <!-- <th> Description </th> -->
                            <th> Thời gian cập nhật </th>
                            <th> ID </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($posts as $post) { ?>
                          <tr>
                            <td class="py-1"><img src="public/images/userImg/<?= $post['avatar'] ?>"></td>
                            <td><?= $post['title'] ?></td>
                            <td><?= $post['created_at'] ?></td>
                            <td><?= $post['id'] ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Người dùng mới</h4>

                    <div class="row mt-3">
                      <div class="col-12 pr-1">
                        <!-- <img src="public/images/dashboard/img_1.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="public/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded" alt="image"> -->
                        <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Ảnh đại diện </th>
                            <th> ID </th>
                            <!-- <th> Description </th> -->
                            <th> Họ Tên </th>
                            <th> email </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user) { ?>
                          <tr>
                            <td class="py-1"><img src="public/images/userImg/<?=$user['avatar'] ?>"></td>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                      <!-- <div class="col-6 pl-1">
                        <img src="public/images/dashboard/img_2.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="public/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded" alt="image">
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Danh mục mới</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Tên danh mục </th>
                            <!-- <th> Description </th> -->
                            <th> created_at </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $value) { ?>
                          <tr>
                            <td> <?= $value['id'] ?> </td>
                            <td> <?= $value['name'] ?> </td>
                            <!-- <td> <?= $value['description'] ?> </td> -->
                            <td><?= $value['created_at'] ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
    <!-- End custom js for this page -->
<?php 
  include_once ('views/admin/footer.php');
?>
