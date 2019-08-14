2<?php require_once "include/category_header.php";?>

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
                                    $page_one=($page*5)-5;
                                }

                                $post_count_query="SELECT * FROM book WHERE b_name='$a'";
                                $find_count=mysqli_query($conn,$post_count_query);
                                $count=mysqli_num_rows($find_count);
                                $count=ceil($count/5);
                                ?>

                                
                                    <ul>
                                    <?php
                                    $q1 = "SELECT * FROM book WHERE b_catagory = 'Love' LIMIT $page_one,5";
                                    $b_category_love_result = mysqli_query($conn,$q1);
                                    while ($row = mysqli_fetch_assoc($b_category_love_result)) {
                                        $book_id = $row['b_id'];
                                        $b_name = substr($row['b_name'],0,100)."...";
                                        $b_description = substr($row['b_description'],0,200)."...";
                                        $b_release_year = $row['b_release_year'];
                                        $b_category = $row['b_catagory'];
                                        $b_image = $row['b_image'];
                                        $b_author = $row['b_author'];
                                        
                                         ?>
                                        <li style= "height:300px; width:240px;">
                                        <figure style= "height:300px; width:240px;" class="form-control">
                                            <a href="books-media-detail-v2.html">
                                                <img src="images/category/<?php echo $b_image?>" alt="Book" style= "height:300px; width:240px;">
                                            </a>
                                            <figcaption style= "height:300px; width:240px;">
                                                <header>
                                                    <h4><a href="books-media-detail-v2.html"><?php echo "$b_name";?></a></h4>
                                                    <p><strong>Author:</strong><?php echo "$b_author";?></p>
                                                    <p><strong>ISBN:</strong>  9781581573268</p>
                                                </header>
                                                <p><?php echo "$b_description";?></p>
                                                <div class="actions">
                                                    <ul>                       
                                                        <!-- <li class="button btn btn-group justified btn-xs"> -->
                                                            <a href="" class="text-center">Download</a>


                                                        <!-- </li> -->
                                                        <!-- <li class="button btn btn-group justified btn-xs"> -->
                                                            <a href="book_detail.php?book_id=<?php echo $book_id;?>" class="text-center">Read more</a>
                                                       <!--  </li> -->
                                                       
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>                                                
                                    </li>
                                    <?php
                                    }
                                     ?>
                            </div>
                            <nav class="navigation pagination text-center">
                                <h2 class="screen-reader-text">Posts navigation</h2>
                                <div class="nav-links">
                                    <ul class="pager">
                                    <?php 
                                        for($i=1 ; $i<=$count ; $i++)
                                            if($i==$page){
                                            echo "<li><a class='active_link' href='book_love.php?page=$i'>$i</a></li>";
                                            }else{
                                                 echo "<li><a href='book_love.php?page=$i'>$i</a></li>";
                                            }
                                     ?>
                                </ul>
                                </div>
                            </nav>
                        </div>

                    </div>
                </main>
            </div>
        </div>
        <br><br>

<?php require_once "include/category_footer.php";?>