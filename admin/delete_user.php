    <?php
    ob_start();
  include_once "include/conn.php";

          if(isset($_GET['delete'])){
            $user_id = $_GET['delete'];
            echo "$user_id";
            $query = "DELETE FROM user WHERE user_id = $user_id";
            $result = mysqli_query($con,$query);
            if($result){
                  header('location:view_all_user.php');
          }else{
            echo "fail";
          }
          }
  ?>