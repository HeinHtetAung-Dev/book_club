<?php include_once "include/db.php";?>
<?php session_start();ob_start();
defined('DS') ? null:define('DS', DIRECTORY_SEPARATOR);
?>

<?php include_once "include_once/header.php"; ?>
<?php include_once "include_once/top_nav.php";?><br><br>

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Books & Media Listing</h2>
                    <span class="underline center"></span>
                
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Books & Media</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- End: Page Banner -->
        
<?php include_once "include_once/search.php";?>
                             <?php 
                                               if (isset($_GET['b_id'])) 
                                            { 
                                                $book_id = $_GET['b_id'];
                                                
                                                $query = "SELECT * FROM book WHERE b_id = $book_id";
                                                $book_detail =mysqli_query($conn,$query);
                                                while ($row = mysqli_fetch_assoc($book_detail)) 
                                                  {

                                                 $book_id = $row['b_id'];
                                                 $book_name = $row['b_name'];
                                                 $book_author = $row['b_author'];
                                                 $book_description = $row['b_description'];
                                                 $book_image = $row['b_image'];
                                                 $book_category = $row['b_catagory'];
                                                 $book_release_year = $row['b_release_year']; 
                                                 $book_language = $row['b_language'];
                                                 $book_number = $row['book_number'];
                                                 $book_pdf = $row['b_pdf'];
                                                 $_SESSION['b_id'] = $book_id;
                                                 $_SESSION['b_category'] = $book_category;
                                                 $_SESSION['b_author'] = $book_author;

                                                  }                                             
                                            }
                                         ?>
                            <div class="booksmedia-detail-box">
                                <div class="detailed-box">
                                    <div class="col-xs-12 col-sm-5 col-md-3">
                                        <div class="post-thumbnail">
                                        
                                            <img src="images/category/<?php echo $book_image;?>" alt="Book Image" style= "height:320px; width:230px;">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content">
                                            <h2 style="font-size: 30px; font-family:Comic Sans MS;">The Great Gatsby</h2><br>
                                            <p><strong>Author:</strong> <?php echo $book_author;?></p>
                                            <p><strong>Book Number:</strong> <?php echo $book_number;?></p>
                                            <p><strong>Release Year :</strong><?php echo $book_release_year;?></p>
                                            <p><strong>Format:</strong> PDF</p>
                                            <p><strong>Language Note:</strong><?php echo $book_language;?></p>
                                            <div class="actions">
                                                <ul style="size: 100px;">
                                                    <li></li>
                                                    <li >
                                                        <a href="contact.php" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Mail">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li></li>
                                                    <li></li>
                                                    <li>
                                                        <a href="index2.php" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li></li>
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3 ">
                                        <div class="post-right-content">
                                            <h4><u>Available now</u></h4>

                                            <p><strong>Email #:</strong> maykhathtan@gmail.com</p><br>
                                            <p><strong>Call #:</strong> +959-684860427</p><br><br>
                                            <a href="#." class="available-location">Availability by Location <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a><br>
                                              <?php

                                            if (!isset($_SESSION['username'])) {?>
                                                <a href="ggwp.php" class="btn btn-dark-gray" >Download</a>
                                            <?php   
                                            }elseif (isset($_SESSION['username']))
                                          { 
                                                ?>
                                                <form action="download.php" method="get">
                                                    <input type="submit" name="download" id="" value="Download" class="btn btn-dark-gray">    
                                                </form>
                                                <?php }?>
                                            
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <p><strong>Summary:</strong><?php echo $book_description;?> </p>
                                <br><br>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
      
<?php include_once "include_once/social.php";?>
<?php include_once "include_once/footer.php";?>