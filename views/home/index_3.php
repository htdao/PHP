<?php 
    require_once('header.php');
 ?>
    <section id="page" class="container">
        <div class="row">
            <div class="col-sm-8 main-content clearfix">
                <div class="inner-wrap">
                    <h2>Danh mục</h2>
                    <hr data-symbol="CATEGORIE PAGE">
                    
                    <?php foreach ($categories as $key => $value) {
                        # code...
                     ?>
                    
                    <article class="img-post bg-image entry-sm" data-image-src="public/images/categoriesImg/<?= $value['thumbnail'] ?>">
                        <div class="entry-content">
                            <header>
                                <!-- blog post header -->
                                <h3><a href="#"><?= $value['name'] ?></a></h3>
                            </header>
                            <footer>
                                <!-- blog post footer -->
                                <div class="post-meta clearfix">
                                    <div class="post-meta-content no-avatar">
                                        <span class="date"><?= $value['description'] ?></span>
                                    </div>
                                    <!-- /meta conetnt -->
                                </div>
                            </footer>
                        </div>
                    </article>
                    <?php } ?>

                    
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
                                
                                    <?php 
                                       foreach ($categories as $key => $value) {
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
                     </div>



                     <!-- /widget tabs -->
                  </aside>
            </div>
        </div>
    </section>
    <!--  Start Bottom post sarousel -->

    <!-- end: Bottom post sarousel -->




    <!-- /#page end -->
    <?php require_once('footer.php') ?>