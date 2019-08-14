    <body>
        
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                         <h1 style="color:white; font-size:50px; font-family:Hobo Std;"><img src="images/logo.png" style="height:120px; width:110px;">Book Club</img></h1>    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="topbar-links">
                                                <?php 
                                                if(isset($_SESSION['username']))
                                                {
                                                    $a = $_SESSION['username'];
                                                    ?>
                                                <div class="dropdown" style="width:80px; margin-left:90%;">
                                                        <a href="" class="dropdown-toggle" data-toggle ="dropdown"><?php echo $a;?><span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="include/logout.php">Logout</a></li>
                                                            <?php
                                                            if ($_SESSION['role']=='admin') {?>
                                                                <li><a href="admin/index.php">dashboard</a></li>
                                                                
                                                            <?php
                                                             } 
                                                            ?>
                                                            
                                                        </ul>
                                                </div>
                                                <?php }else{ ?>
                                                    <a href="../Project_4/ggwp.php"><i class="fa fa-lock"></i>Login / Register</a>
                                                <?php }?>

                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li></li>
                                        <li class=""><a href="index2.php">Home</a></li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Categories</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="book_history.php">History</a></li>
                                                <li><a href="book_translate.php">Translate</a></li>
                                                <li><a href="book_love.php">Love</a></li>
                                                <li><a href="book_technology.php">Tehnology</a></li>
                                                 <li><a href="book_knowledge.php">Knowledge</a></li>
                                                  <li><a href="book_hartha.php">Har Tha</a></li>
                                                   

                                            </ul>
                                        </li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                </div>
            </div>
        </header>
        <!-- End: Header Section -->