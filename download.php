<?php include_once "include/db.php"; ?>
<?php session_start();?>
<?php

    if (isset($_GET['download']))
     {
       echo $book_id = $_SESSION['b_id'];
       echo $user_id = $_SESSION['user'];
        echo $book_category = $_SESSION['b_category'];
        echo $b_author = $_SESSION['b_author'];
    	echo $sql = "INSERT INTO download(book_id,user_id,catagory,author) VALUES ($book_id,$user_id,'$book_category','$b_author')";
    	$query_s_id = "SELECT * FROM book WHERE b_id = $book_id";
    	$s_result = mysqli_query($conn,$query_s_id);
    	while ($row = mysqli_fetch_assoc($s_result)) 
    	{ 
    		$b_pdf = $row['b_pdf'];
    		$download = $row['download'];
    	}
    	
    	$result = mysqli_query($conn,$sql);
    	$sql1 = "UPDATE book SET download=$download+1 WHERE b_id = $book_id";
    	$result1 = mysqli_query($conn,$sql1);
    	header("location:include/pdf/{$b_pdf}");

    }
?>