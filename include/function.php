<?php

// function love_count(){
// 	GLOBAL $conn;
// $query = "SELECT * FROM book WHERE b_catagory = 'love'";
// $result = mysqli_query($conn,$query);
// $count = mysqli_num_rows($result);
// echo "$count";
// }

function history_count(){
	GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'History'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
echo "$count";
}


function technology_count(){
	GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'technology'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

function knowledge_count(){
	GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'Knowledge'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

function love_count(){
	GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'Love'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}
function translate_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'Translate'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}
function hartha_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'Joke'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function lal_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Laetwinthr Saw Chit'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function phaymyint_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Phay Myint'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function myathantint_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Mya Than Tint'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function juu_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Jue'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}
function thoesaung_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Thoe Saung'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}
function khinhtoo_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Khin Khin Htoo'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}
function lynntheiknyunt_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Lynn Theik Nyunt'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function moemoe_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Moe Moe (Inyar)'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function register($email,$password,$username)
{
                            GLOBAL $conn;
                            $db_email=NULL;
                            
                            $hash_password = password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));
                            $query = "SELECT * FROM users WHERE email='$email'";
                            $status = 0;
                            $register_result = mysqli_query($conn,$query);
                           while ($row = mysqli_fetch_assoc($register_result)) {
                           $db_email = $row['email'];
        
                           }

                           if ($db_email != $email)
                         {
                        $q1 = "INSERT INTO users(name,password,email) VALUES ('$username','$hash_password','$email')";
                        $res = mysqli_query($conn,$q1);
                        return $title ='success';
            
                        }else{
                          return $title='already Exist';
                           }
                      }
                    



function login($email,$password)
{
  GLOBAL $conn;
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($result)) {
    
    $db_username = $row['name'];
    $db_password = $row['password'];
    $db_email = $row['email'];
    $db_role = $row['role']; 
    # code...
  }
  if($db_email != $email && !password_verify($password,$db_password))
  {
    return 'Try Again';
  }elseif ($db_email == $email && password_verify($password,$db_password)) {
    $_SESSION['username'] = $db_username;
    $_SESSION['role'] = $db_role;
    if ($db_role == 'admin') 
    {
        header('location:contact.php');
      
    }
   
  }else{
     header('location:book_love.php');
  }

}

    
  




// function register($email,$username1,$password1){
// 	GLOBAL $conn;

//    if (isset($_POST['register'])) 
//    {
        
                                                            
//         $query = "SELECT * FROM users WHERE email='$email'";
//         $register_result = mysqli_query($conn,$query);
//         while ($row = mysqli_fetch_assoc($register_result))
//          {
//         $db_email = $row['email'];
                                                                
//          }

//           if ($db_email != $email)
//          {
//         $password = password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));
//         $q1 = "INSERT INTO users(name,password,email) VALUES ('$username','$password','$email')";
//         $res = mysqli_query($conn,$q1);
                                                                    
//            }else{
//          $title = "Already Exist";
//                  }
//          }

?>
