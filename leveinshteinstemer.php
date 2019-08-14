<?php include_once "include/db.php"; ?>
<?php
include_once "include_once/header.php";
include_once "include_once/top_nav.php";
include_once "include_once/slider.php";
include_once "include_once/search.php";
include_once "porter.php";
include_once "function.php"; ?>
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

<div class="booksmedia-fullwidth">
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

                                $post_count_query="SELECT * FROM book WHERE b_catagory='History'";
                                $find_count=mysqli_query($conn,$post_count_query);
                                $count=mysqli_num_rows($find_count);
                                $count=ceil($count/6);
                                


  $algo = new Level();
  $a= $algo->leven();
  foreach($a as $index=>$data){
    if($index == 'b_name'){
       $b_name=$data[0];
    }
    $author=$data;
  }
  // for ($i=0; $i <count($a); $i++)
  //  { 
  //   $dd[] = strlen($a[$i][0]);
  // }
  //    $b = min($dd);
  //    $c = array_search($b, $dd);
  //    $d = $a[$c][0];
  //    echo $d;
   $select_query = "SELECT * FROM book WHERE b_name = '$b_name' AND b_author LIKE '%$author%'";
   $result1 = mysqli_query($conn,$select_query);
   ?>
   <ul><?php
   while ($row = mysqli_fetch_assoc($result1))
    {
                                        $book_id=$row['b_id'];
                                        $b_name = substr($row['b_name'],0,100)."...";
                                        $b_description = substr($row['b_description'],0,150)."...";
                                        $b_release_year =$row['b_release_year'];
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
                                                             <a href="book_detail.php?b_id=<?php echo $book_id;?>" class="text-center">Read more</a>
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
                            
                        </div>

                    </div>
                </main>
            </div>
        </div>
        <br><br>
        <!-- End: Products Section -->

        <!-- Start: Footer -->
        <?php include_once "include_once/social.php";?>
        <?php include_once "include_once/footer.php";?>