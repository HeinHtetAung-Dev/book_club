 <?php session_start();?>
 <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo" style="text-align: left; font-size: 30px; font-family:Hobo Std; color:white;"><img src="image/logo.png" alt="" style="width: 90px; height:80px;">Book Club</div><br><br>
                    <ul style="font-family: Comic Sans MS;"> 
                        
                        <li></li>
                        <li></li>
                        <li><a href="../index2.php"><i class="ti-home"></i>Home Site</a></li>                       
                        <li><a href="index.php"><i class="ti-dashboard"></i>Dashboard</a></li>

                        <li><a class="sidebar-sub-toggle"><i class="ti-book"></i> Book <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="add_book.php">add_book</a></li>
                                <li><a href="view_all_book.php">view_all_book</a></li>
                            </ul>
                        </li>

                        <li><a href="category.php"><i class="ti-home"></i>Categories</a></li>                       
                        <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> User <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="add_user.php">add_user</a></li>
                                <li><a href="view_all_user.php">view_all_user</a></li>
                            </ul>
                        </li>

                        <li><a href="email.php"><i class="ti-comment"></i>Message</a></li>

                        <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
                    
                        <li><a href="logout.php"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
    </div>
        <!-- /# sidebar -->

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                         
                                    
                        
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar"><i class="ti-user"></i>  <?php echo $_SESSION['username'];?>
                                    </span>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
