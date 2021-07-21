<?php 
   require_once('header.php');
 ?>
      <div class="mainSlide owl-carousel">
         <?php 
            foreach ($newPosts as $key => $value) {
          ?>
            <div class="item">
            <article class="img-post bg-image entry-xg" data-image-src="public/images/newPost/<?= $value['thumbnail'] ?>">
               <div class="entry-content">
                  <header>
                     <h3><a href="#"><?= $value['description'] ?></a></h3>
                  </header>
                  <footer>
                     <div class="post-meta clearfix">
                        <div class="post-meta-content no-avatar">
                           <span class="date"><?= $value['title'] ?></span>
                        </div>
                     </div>
                  </footer>
               </div>
            </article>
         </div>
         <?php } ?>
      </div>
      <section id="page" class="container">
         <div class="row">
            <div class="col-sm-8 main-content clearfix">
               <div class="inner-wrap">
                  <hr data-symbol="LATEST POST">
                  <?php foreach ($fPost as $key => $value) {
                     # code...
                   ?>
                  <article class="post">
                     <div class="post-media">
                        <a href="#">
                        <img alt class="img-responsive" src="public/images/postImg/<?= $value['thumbnail'] ?>"></a>
                        <!-- <span class="cat-tag interior"><?= $value['title'] ?></span> -->
                     </div>
                     <header>
                        <!-- blog post header -->
                        <h2><a href="#"><?= $value['title'] ?></a></h2>
                     </header>
                     <div class="post-content">
                        <p><?= $value['content'] ?></p>
                     </div>
                  
                  </article>

                  <?php } ?>
                  <div class="row">
                     
                     <?php 
                        foreach ($sPost as $key => $value) {
                      ?>
                      <div class="col-sm-6">
                        <article class="post">
                           <div class="post-media">
                              <a href="#">
                              <img alt class="img-responsive" src="public/images/postImg/<?= $value['thumbnail'] ?>">
                              </a>
                           </div>
                           <header>
                              <!-- blog post header -->
                              <h4><a href="#"><?= $value['title'] ?></a></h4>
                           </header>
                           <div class="post-content">
                              <p><?= $value['content'] ?></p>
                           </div>
                        </article>
                     </div>
                     <?php } ?>
                  </div>
                  <!-- / row -->
                  <article class="post">
                     <div class="post-media">
                        <div id="slider" class="flexslider">
                           <ul class="slides">
                           <?php 
                              foreach ($heros as $key => $value) {
                                 
                            ?>
                              <li>
                                 <img class="img-responsive" alt src="public/images/heros/<?= $value['thumbnail'] ?>">
                              </li>
                           <?php } ?>
                           </ul>
                        </div>
                        <!--/slider -->
                        <div id="carousel" class="flexslider">
                           <ul class="slides">
                              <?php 
                              foreach ($heros as $key => $value) {
                                 
                            ?>
                              <li>
                                 <img class="img-responsive" alt src="public/images/heros/<?= $value['thumbnail'] ?>">
                              </li>
                           <?php } ?>
                           </ul>
                        </div>
                     </div>
                     <header>
                        <h2><?= $th['title'] ?></h2>
                     </header>
                     <div class="post-content">
                        <p><?= $th['content'] ?></p>
                     </div>
                  </article>
                  <hr data-symbol="LATEST POST">
                      <div class="col-sm-12">
                        <article class="post">
                           <div class="post-media">
                              <a href="#">
                              <img alt class="img-responsive" src="public/images/postImg/<?= $chap['thumbnail'] ?>">
                              </a>
                           </div>
                           <header>
                              <!-- blog post header -->
                              <h3><a href="#"><?= $chap['title'] ?></a></h3>
                           </header>
                           <div class="post-content">
                              <p><?= $chap['content'] ?></p>
                           </div>
                        </article>
                     </div>
               </div>
               <!-- /inner wrap -->
            </div>
            <div class="col-sm-4">
               <aside class="sidebar">
                  <div class="widget widget-serach">
                     <div class="row">
                        <div class="col-sm-12">
                           <hr data-symbol="SECTION">
                           <ul class="social">
                              <li><a href="https://www.facebook.com/LienquanMobile" class="social-btn social-facebook" title="Facebook"><i class="ti-facebook"></i></a>
                              </li>
                              <li><a href="https://lienquan.garena.vn/" class="social-btn social-google" title="Google+"><i class="ti-google"></i></a>
                              </li>
                           </ul>
                           <p class="small">Theo dõi ngay!</p>
                        </div>
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- / widget search -->
                  <div class="widget widget-best-read">
                     <div class="row">
                        <div class="col-sm-12">
                           <hr class="mBtm-50 mTop-30" data-symbol="BEST READ">
                        </div>
                        <div class="col-sm-12">
                           <div class="best-read owl-carousel">
                              <div class="item" data-hash="1">
                                 <ul class="widget-list">
                                 <h3>Danh mục gần đây</h3>
                                    <?php 
                                       foreach ($fileCate as $key => $value) {
                                          # code...
                                       
                                     ?>
                                    <article class="small-post">
                                          <div class="post-media">
                                             <a href="#">
                                             <img alt class="img-responsive" src="public/images/categoriesImg/<?= $value['thumbnail'] ?>">
                                             </a>
                                          </div>
                                          <div class="post-meta-content">
                                             <header>
                                                <!-- blog post header -->
                                                <h3><?= $value['name'] ?></h3>
                                             </header>
                                             <span class="categories-links"><?= $value['description'] ?></span>
                                          </div>
                                    </article>
                                    <?php } ?>
                                 </ul>
                              </div>
                              <!-- /.item -->
                        </div>
                        <!-- / col -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /widget -->
               
                  
                  <!-- /widget categories -->
                  <div class="widget widget-tabs">
                     <div class="row">
                        <div class="col-sm-12">
                           <div role="tabpanel" id="tabs" class="tabbable responsive">
                              <!-- Nav tabs -->
                              <h3>Bài viết gần đây</h3>
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active" id="home">
                                 <?php foreach ($filePost as $key => $value) {
                                    # code...
                                  ?>
                                    <article class="small-post">
                                       <div class="post-media">
                                          <a href="#">
                                          <img alt class="img-responsive" src="public/images/postImg/<?= $value['thumbnail'] ?>">
                                          </a>
                                       </div>
                                       <div class="post-meta-content">
                                          <header>
                                             <!-- blog post header -->
                                             <h3><a href="#"><?= $value['title'] ?></a></h3>
                                          </header>
                                          <span class="categories-links">Ngày đăng:<?= $value['created_at'] ?></span>
                                       </div>
                                    </article>
                                    <?php } ?>
                                 </div>
                                 <!-- /tab content -->
                                 <div role="tabpanel" class="tab-pane" id="profile">
                                    <article class="small-post comment-post">
                                       <div class="post-avatar">
                                          <span class="online-indikator offline"></span>
                                          <a href="#">
                                          <img alt class="img-responsive img-circle pull-left" src="images/avatar-1.jpg">
                                          </a>
                                       </div>
                                       <div class="post-meta-content">
                                          <header>
                                             <!-- blog post header -->
                                             <h4><a href="#">Lovely Small Apartment in Paris Mixing</a></h4>
                                          </header>
                                          <span class="categories-links">Posten in:
                                          <a href="#" rel="category tag">furniture</a></span>
                                          <span class="date"><i class="ti-calendar"></i><time datetime="2009-09-04T16:13:40-07:00">1:40 PM today</time></span>
                                          <div>
                                             <fieldset class="rating">
                                                <input type="radio" id="star-5" name="rating" value="5">
                                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star-4half" name="rating" value="4 and a half">
                                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star-4" name="rating" value="4">
                                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star-3half" name="rating" value="3 and a half">
                                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star-3" name="rating" value="3">
                                                <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star-2half" name="rating" value="2 and a half">
                                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star-2" name="rating" value="2">
                                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star-1half" name="rating" value="1 and a half">
                                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star-1" name="rating" value="1">
                                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf-" name="rating" value="half">
                                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                          </div>
                                       </div>
                                    </article>
                                    <!-- / comment post -->
                                    <article class="small-post comment-post">
                                       <div class="post-avatar">
                                          <span class="online-indikator"></span>
                                          <a href="#">
                                          <img alt class="img-responsive img-circle pull-left" src="images/avatar-2.jpg">
                                          </a>
                                       </div>
                                       <div class="post-meta-content">
                                          <header>
                                             <!-- blog post header -->
                                             <h4><a href="#">Lovely Small Apartment in Paris Mixing</a></h4>
                                          </header>
                                          <span class="categories-links">Posted in:
                                          <a href="#" rel="category tag">furniture</a></span>
                                          <span class="date"><i class="ti-calendar"></i><time datetime="2009-09-04T16:13:40-07:00">1:40 PM today</time></span>
                                          <div>
                                             <fieldset class="rating">
                                                <input type="radio" id="star5" name="rating" value="5">
                                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4">
                                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3">
                                                <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2">
                                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1">
                                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="starhalf" name="rating" value="half">
                                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                          </div>
                                       </div>
                                    </article>
                                    <!-- / comment post -->
                                 </div>
                                 <div role="tabpanel" class="tab-pane" id="messages">
                                    <article class="post">
                                       <div class="post-media">
                                          <a href="#">
                                          <img alt class="img-responsive" src="images/blog-img-12.jpg">
                                          </a>
                                       </div>
                                       <header>
                                          <!-- blog post header -->
                                          <h4><a href="#">40 Small Bedrooms Ideas To Make Your Home Look Bigger</a></h4>
                                       </header>
                                       <footer>
                                          <!-- blog post footer -->
                                          <div class="post-meta clearfix">
                                             <div class="post-meta-content no-avatar">
                                                <span class="categories-links">Published in:
                                                <a href="#" rel="category tag">Design</a>
                                                </span>
                                             </div>
                                             <!-- /meta conetnt -->
                                          </div>
                                       </footer>
                                    </article>
                                    <article class="post">
                                       <div class="post-media">
                                          <a href="#">
                                          <img alt class="img-responsive" src="images/blog-img-11.jpg">
                                          </a>
                                       </div>
                                       <header>
                                          <!-- blog post header -->
                                          <h4><a href="#">40 Small Bedrooms Ideas To Make Your Home Look Bigger</a></h4>
                                       </header>
                                       <footer>
                                          <!-- blog post footer -->
                                          <div class="post-meta clearfix">
                                             <div class="post-meta-content no-avatar">
                                                <span class="categories-links">Published in:
                                                <a href="#" rel="category tag">Design</a>
                                                </span>
                                             </div>
                                             <!-- /meta conetnt -->
                                          </div>
                                       </footer>
                                    </article>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.row -->
                  </div>
               </aside>
            </div>
         </div>
      </section>
      <!--  Start Bottom post sarousel -->

      <!-- end: Bottom post sarousel -->
      <!-- /#page end -->

<?php 
   require_once('footer.php');
 ?>
      
