<?php include_once "include/admin_header.php";?>

<body>
    <?php
        include_once "include/admin_nav.php";
    ?>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          
          <!-- /# row -->
          <div class="main-content">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="compose-email">
                      <div class="mail-box">
                       <!--  <aside class="sm-side">
                          <div class="user-head">
                            <a class="inbox-avatar" href="javascript:;">
                                  <img src="assets/images/user.jpg" alt="">
                                                    </a>
                            <div class="user-name">
                              <h5><a href="#">john doe</a></h5>
                              <span><a href="#">example@gmail.com</a></span>
                            </div>
                          </div>
                        </aside> -->
                        <aside class="lg-side">
                          <div class="inbox-head">
                            <h3 class="input-text">Message</h3>
                          <!--   <form action="#" class="pull-right position">
                              <div class="input-append inner-append">
                                <input type="text" class="sr-input" placeholder="Search Mail">
                                <button class="btn sr-btn append-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                            </form> -->
                          </div>
                          <div class="mail-option">
                            <div class="chk-all chk-group">
                              <input type="checkbox" class="mail-checkbox mail-group-checkbox" id="checkAll" />
                              <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini all m-l-10" aria-expanded="false">All<i class="fa fa-angle-down "></i></a>
                                <ul class="card-option-dropdown dropdown-menu">
                                  <li><a href="#"> None</a></li>
                                  <li><a href="#"> Read</a></li>
                                  <li><a href="#"> Unread</a></li>
                                </ul>
                              </div>
                            </div>

                            <div class="btn-group">
                              <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                            <i class=" fa fa-refresh"></i>
                                                        </a>
                            </div>
                            <div class="btn-group hidden-phone">
                              <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false"> More<i class="fa fa-angle-down "></i></a>

                              <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"><i class="ti-pencil"></i> Mark as Read</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i>Spam</a></li>
                                <li><a href="#"><i class="ti-trash"></i>Delete</a></li>
                              </ul>
                            </div>
                            <div class="btn-group">
                              <a data-toggle="dropdown" href="#" class="btn mini blue">Move to<i class="fa fa-angle-down "></i></a>
                              <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#">Draft</a></li>
                                <li><a href="#">Spam</a></li>
                                <li><a href="#"> Delete</a></li>
                              </ul>
                            </div>

                            <ul class="unstyled inbox-pagination pagination-list">
                              <li><span>1-50 of 234</span></li>
                              <li>
                                <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                              </li>
                              <li>
                                <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                              </li>
                            </ul>
                          </div>
                            <div class="table-responsive">
                              <table class="table table-inbox table-hover table-responsive">
                                <tbody>
                                  <?php 
                                               
                                                $query="SELECT * FROM message";
                                                $result=mysqli_query($con,$query);
                                                if(!$result){
                                                 die("Query Failed".mysqli_error($result));
                                                            } 

                                                while($row=mysqli_fetch_assoc($result)){?>
                                  <tr>
                                    <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                    <td class="view-message dont-show" style="width: 200px;"><?php echo $row['email']; ?> </td>
                                    <td class="view-message" style="width: 800px;"><?php echo $row['msg']; ?></td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right" style="width: 120px;"><?php echo $row['date']; ?></td>
                                  </tr>
                                <?php }?>
                                </tbody>
                              </table>
                            </div>
                        </aside>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "include/admin_footer.php";?>