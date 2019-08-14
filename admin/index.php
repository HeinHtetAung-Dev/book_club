<?php include_once "include/admin_header.php"; ?>
    
    <body>
   <?php include_once "include/function.php";?>
        <?php include_once "include/admin_nav.php";?>
     
        <div class="content-wrap">

            <div class="main">
                <div class="container-fluid">

                    <section id="main-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-book color-success border-success"></i></div>
                                        <div class="stat-content dib">
                                            <div class="stat-text">Total Book</div>
                                            <div class="stat-digit"> <span><?php echo book_count();?> 
                                                                 </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div>
                                        <div class="stat-content dib">
                                            <div class="stat-text">User</div>
                                            <div class="stat-digit"> <span><?php echo user_count();?> 
                                                                 </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i></div>
                                        <div class="stat-content dib">
                                            <div class="stat-text">Category</div>
                                            <div class="stat-digit"> <span><?php echo category_count();?> 
                                                                 </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="stat-widget-one">
                                        <div class="stat-icon dib"><i class="ti-comments color-danger border-danger"></i></div>
                                        <div class="stat-content dib">
                                            <div class="stat-text">Notification</div>
                                            <div class="stat-digit"> <span><?php echo message_count();?> 
                                                                 </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!--   <div class="row"> -->
                              <!--   <div class="col-lg-12">
                                  <div class="card">
                                    <div class="card-title">
                                      <h4>Bar Chart</h4>
                                    </div>
                                    <div class="flot-container">
                                      <div id="flotBar"></div>
                                    </div>
                                  </div> -->
                                  <!-- /# card -->
                              <!--   </div> -->
                              <!-- /# card -->
                            <!-- </div> -->
                    </section>
                </div>
            </div>
        </div>
        
<?php include_once"include/admin_footer.php";?>