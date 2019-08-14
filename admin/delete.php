  <?php
    ob_start();
  include_once "include/conn.php";

          if(isset($_GET['delete'])){
            $book_id = $_GET['delete'];
            echo "$book_id";
            $query = "DELETE FROM book WHERE b_id = $book_id";
            $result = mysqli_query($con,$query);
            if($result){
                  header('location:view_all_book.php');
          }else{
            echo "fail";
          }
          }
  ?>