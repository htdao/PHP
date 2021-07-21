<?php 
   require_once('header.php');
 ?>
         <div class="container">
            <div class="row">
               <div id="grid-slider" class="flexslider">
                  <ul class="slides">
                     <li>
                        <?php foreach ($fPost as $value) {
                           # code...
                         ?>
                        <div class="col-sm-6">
                        <?php $img = $value['thumbnail'] ?>
                           <article class="img-post bg-image entry-lg" data-image-src="public/images/postImg/<?= $value['thumbnail'] ?>" style="background-image: url('public/images/postImg/<?= $img ?>')">
                              <div class="entry-content">
                                 <header>
                                    <!-- blog post header -->
                                    <h3><a href="#"><?= $value['title'] ?></a></h3>
                                 </header>
                                 <footer>
                                    <!-- blog post footer -->
                                    <div class="post-meta clearfix">
                                       <div class="post-meta-content no-avatar">
                                          <span class="date"><?= $value['created_at'] ?></span>
                                       </div>
                                       <!-- /meta conetnt -->
                                    </div>
                                 </footer>
                              </div>
                           </article>
                        </div>
                        <?php } ?>

                        <!-- /col 6 -->
                        <?php foreach ($tPost as $key => $value) {
                           # code...
                         ?>
                        <div class="col-sm-3">
                        <?php $img4 = $value['thumbnail'] ?>
                           <article class="img-post bg-image entry-lg" data-image-src="public/images/postImg/<?= $value['thumbnail'] ?>" style="background-image: url('public/images/postImg/<?= $img4 ?>')">
                              <div class="entry-content">
                                 <header>
                                    <!-- blog post header -->
                                    <h3><a href="#"><?= $value['title'] ?></a></h3>
                                 </header>
                                 <footer>
                                    <!-- blog post footer -->
                                    <div class="post-meta clearfix">
                                       <div class="post-meta-content no-avatar">
                                          <span class="date"><?= $value['created_at'] ?></span>
                                       </div>
                                       <!-- /meta conetnt -->
                                    </div>
                                 </footer>
                              </div>
                           </article>
                        </div>
                        <?php } ?>

                        <!-- /col 6 -->
                        <div class="col-sm-3">
                           <div class="row">
                              <?php foreach ($sPost as $key => $value) {
                                 # code...
                              ?>
                              <div class="col-sm-12">
                               <?php $img5 = $value['thumbnail'] ?>
                                 <article class="img-post bg-image entry-sm" data-image-src="public/images/postImg/<?= $value['thumbnail'] ?>" style="background-image: url('public/images/postImg/<?= $img5 ?>')">
                                    <div class="entry-content">
                                       <header>
                                          <!-- blog post header -->
                                          <h3><a href="#"><?= $value['title'] ?></a></h3>
                                       </header>
                                       <footer>
                                          <!-- blog post footer -->
                                          <div class="post-meta clearfix">
                                             <div class="post-meta-content no-avatar">
                                                <span class="date"><?= $value['created_at'] ?></span>
                                             </div>
                                             <!-- /meta conetnt -->
                                          </div>
                                       </footer>
                                    </div>
                                 </article>
                              </div>
                              <?php } ?>
                              <!--/.col 12 -->
                              
                              <!--/.col 12 -->
                           </div>
                           <!--/.inner row -->
                        </div>
                        <!-- /col 6 -->
                     </li>
                     <li>
                     <?php foreach ($tPost as $key => $value) {
                        # code...
                      ?>
                        <div class="col-sm-6">
                        <?php $img2 = $value['thumbnail'] ?>

                           <article class="img-post bg-image entry-lg" data-image-src="public/images/postImg/<?= $value['thumbnail'] ?>" style="background-image: url('public/images/postImg/<?= $img2 ?>')">
                              <div class="entry-content">
                                 <header>
                                    <!-- blog post header -->
                                    <h3><a href="#"><?= $value['title'] ?></a></h3>
                                 </header>
                                 <footer>
                                    <!-- blog post footer -->
                                    <div class="post-meta clearfix">
                                       <div class="post-meta-content no-avatar">
                                          <span class="date"><?= $value['created_at'] ?></span>
                                       </div>
                                       <!-- /meta conetnt -->
                                    </div>
                                 </footer>
                              </div>
                           </article>
                        </div>
                        <?php } ?>
                        <!-- /col 6 -->
                        <div class="col-sm-6">
                           <div class="row">
                           <?php $img3 = $value['thumbnail'] ?>

                              <?php foreach ($sPost as $key => $value) {
                        # code...
                      ?>
                              <div class="col-sm-12">
                                 <article class="img-post bg-image entry-sm" data-image-src="public/images/postImg/<?= $value['thumbnail'] ?>" style="background-image: url('public/images/postImg/<?= $img3 ?>')">
                                    <div class="entry-content">
                                       <header>
                                          <!-- blog post header -->
                                          <h3><a href="#"><?= $value['title'] ?></a></h3>
                                       </header>
                                       <footer>
                                          <!-- blog post footer -->
                                          <div class="post-meta clearfix">
                                             <div class="post-meta-content no-avatar">
                                                <span class="date"><?= $value['created_at'] ?></span>
                                             </div>
                                             <!-- /meta conetnt -->
                                          </div>
                                       </footer>
                                    </div>
                                 </article>
                              </div>
                              <?php } ?>
                              <!-- /col 12 -->
                              
                              <!-- /col 12 -->
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <!--/.row -->
            </div>
            <!--/.container -->
         </div>
         <section id="page" class="container">
            <div class="row">
               <div class="col-sm-8 main-content clearfix">
                  <div class="inner-wrap">
                     <hr data-symbol="LATEST POST">
                     <!-- <div id="grid" class="container"> -->
                     <div class="kodo-container">
                        <div class="row row-isotope">
      
                          <div class="row">
                     
                     <?php 
                        foreach ($post as $key => $value) {
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
                           
                           <!-- /.item -->
                        </div>
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
                                 <h3>Bài viết</h3>
                                    <?php 
                                       foreach ($post as $key => $value) {
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
                                                <h3><?= $value['title'] ?></h3>
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
                     </div>



                     <!-- /widget tabs -->
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