                    <div class="row">

                                <div class="col-md-9 col-md-push-3">

                                    <div class="books-list">
                                        <article> 
                                            <?php 
                                                   $query = "SELECT * FROM book ORDER BY download DESC LIMIT 3";
                                                    $result = mysqli_query($conn,$query);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $book_id = $row['b_id'];
                                                            $book_name = $row['b_name'];
                                                            $book_author = $row['b_author'];
                                                            $book_description = $row['b_description'];
                                                            $book_image = $row['b_image'];
                                                            $book_category = $row['b_catagory'];
                                                            $book_number=$row['book_number'];
                                                            $book_release_year = $row['b_release_year']; 
                                                 ?>
                                            <div class="single-book-box">                                                
                                                <div class="post-thumbnail">
                                                
                                                     <a href="../project_4/book_detail.php?b_id=<?php echo $book_id;?>"><img alt="Book" src="images/category/<?php echo $book_image;?>" style= "height:350px; width:250px;" class='form-control'></a>      
                                                </div><br>
                                                <div class="post-detail">
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h3 class="entry-title" style="font-size: 20px; font-family:Comic Sans MS;">
                                                                    <a href="../project_4/book_detail.php?b_id=<?php echo $book_id;?>"><?php echo "$book_name";?></a>
                                                                </h3><br>
                                                                <ul>
                                                                    <li><strong>Author :</strong><?php echo "$book_author";?></li>
                                                                    <li><strong>Book Number:</strong><?php echo $book_number;?></li>
                                                                        <li><strong>Release Year : </strong><?php echo $book_release_year;?></li>
                                                                     </ul>                                                                
                                                            </div>
                                                        </div>
                                                    </header>
                                                        <div class="entry-content">
                                                            <p class="mmwebfont"><?php echo $book_description;?></p>
                                                        </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="../project_4/book_detail.php?b_id=<?php echo $book_id;?>">Read More</a>
                                                    </footer>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <?php
                                          }
                                          ?>
                                        </article>
                                        
                                      </div>
                                    </div>
                                
