<?php include_once "include/db.php" ?>
<?php include_once "include_once/header.php";?>
<?php include_once "include_once/top_nav.php";?>
<?php include_once "include_once/slider.php";?>
<?php include_once "include_once/search.php";?>
<style>
.overlay {
  position: absolute;
  bottom: 0;
  background-color:gray;
  overflow: hidden;
  width: 82.2%;
  height: 0;
  transition: .5s ease;
}

.colum:hover .overlay {
  height: 92%;
}

.text
{
    top:50px;
}


</style>


                        <div class="booksmedia-fullwidth" >
                                <?php 
                                    if(isset($_GET['page'])) {
                                        $page = $_GET['page'];
                                    }else{
                                        $page='';
                                    }
                                    if($page=='' || $page==1){
                                        $page_one=0;

                                    }else{
                                        $page_one=($page*8)-8;
                                    }

                                    $post_count_query="SELECT * FROM book WHERE b_catagory='Joke' ";
                                    $find_count=mysqli_query($conn,$post_count_query);
                                    $count=mysqli_num_rows($find_count);
                                    $count=ceil($count/4);
                                ?>
                              <div class="container">
                                  <div class="row">
                                      <?php
                                      $q1 = "SELECT * FROM book WHERE b_catagory = 'Joke' LIMIT $page_one,8";
                                      $b_category_technology_result = mysqli_query($conn,$q1);
                                      while ($row = mysqli_fetch_assoc($b_category_technology_result)) {
                                          $b_id = $row['b_id'];
                                          $b_name = $row['b_name'];
                                          $b_description = $row['b_description'];
                                          $b_release_year = $row['b_release_year'];
                                          $b_category = $row['b_catagory'];
                                          $b_image = $row['b_image'];
                                          $b_author = $row['b_author'];
                                          $b_number=$row['book_number'];
                                          
                                      ?>

                                      <div class="col-md-3 colum">
                                          <img src="images/category/<?php echo $b_image?>" alt="Book" style=  "height:300px; width:240px;margin-bottom: 30px;">
                                            <div class="overlay" style="margin-bottom: 30px;">
                                                  <div class="text col-md-12">
                                                    <h4>
                                                          <a href="book_detail.php?b_id=<?php echo $b_id;?>"><?php echo substr($b_name,0,15);
                                                              echo strlen($b_name) > 10 ? '...' : '';
                                                          ?>
                                                              
                                                          </a>
                                                    </h4><br>
                                                    <p><strong>Author:</strong><?php echo "$b_author";?></p>
                                                    <p><strong>Book Number:</strong><?php echo $b_number;?></p>
                                                    <p><!-- <?php echo "$b_description";?> -->
                                                    <br>
                                                    <a href="book_detail.php?b_id=<?php echo $b_id;?>" class="btn btn_group"><h4>Read More</h4></a>
                                                    </p>   
                                                  </div>
                                            </div>
                                      </div>

                                      <?php 
                                          }
                                      ?>
                                  </div>
                              </div><br>
                              <nav class="navigation pagination text-center">
                                  <h2 class="screen-reader-text">Posts navigation</h2>
                                  <div class="pager">
                                          <?php 
                                              for($i=1 ; $i<=$count ; $i++)
                                                  if($i==$page){
                                                  echo "<li><a class='active_link' href='book_technology.php?page=$i'>$i</a></li>";
                                                  }else{
                                                       echo "<li><a href='book_technology.php?page=$i'>$i</a></li>";
                                                  }
                                           ?>
                                  </div>
                              </nav>
                        </div><br><br>
        <!-- End: Products Section -->




<?php include_once "include_once/social.php";?>
<?php include_once "include_once/footer.php";?>