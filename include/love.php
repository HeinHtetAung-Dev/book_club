<?php include_once "db.php" ?>
<?php 

$query = "SELECT * FROM book WHERE b_catagory ='love' ORDER BY download DESC LIMIT 5";

$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_assoc($result)) {
	$b_id = $row['b_id'];
    $book_name = $row['b_name'];
    $book_author = $row['b_author'];
    $book_description = $row['b_description'];
    $book_image = $row['b_image'];
    $book_category = $row['b_catagory'];
    $book_release_year = $row['b_release_year'];
    ?>

    <li class="category-item ">
        <figure style="margin-left: 50px;margin-right: 50px;">
            <img src="images/category/<?php echo $book_image;?>" style= "height:300px; width:250px ;margin-bottom: 40px;" class='form-control'>
                <figcaption class="form-control" style="background-color:rgb(33,25,35); height: 300px; width: 240px;">
                                <div class="info-block" style="height: 120px; width:240px;">
                                    <h4 style="color:DodgerBlue; font-family:Comic Sans MS;font-size: 20px;"><?php echo "$book_name";?></h4><br>
                                    <span class="author"><strong>Author :</strong><?php echo "$book_author";?></span><br>
                                    <a href="book_detail.php?b_id=<?php echo $b_id;?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                </figcaption>
        </figure>
    </li>
<?php	
}
 ?>