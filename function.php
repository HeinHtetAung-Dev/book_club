<?php

function love_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'Love'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

function history_count(){
	GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'History'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

function science_count(){
	GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_catagory = 'science'";
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
$query = "SELECT * FROM book WHERE b_catagory = 'science'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

// function love_count(){
// 	GLOBAL $conn;
// $query = "SELECT * FROM book WHERE b_catagory = 'Love'";
// $result = mysqli_query($conn,$query);
// $count = mysqli_num_rows($result);
// return $count;
// }

function phaymyint_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'Phay Myint'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
return $count;
}

function khinhtoo_count(){
  GLOBAL $conn;
$query = "SELECT * FROM book WHERE b_author = 'khin khin htoo'";
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
        header('location:contact.html');
      
    }
   
  }else{
     header('location:book_love.php');
  }

}

class Level{
public function leven(){
  global $conn;
if (isset($_POST['search'])) {

    $author = strtolower($_POST['author']);
    $catalog = strtolower($_POST['catalog']);
    $in = strtolower($_POST['name']);

    if(isset($_POST['author']) && isset($_POST['name'])){
        $sql = "SELECT * FROM book WHERE b_name LIKE '%$in%' AND  b_author LIKE '%$author%'";
    }else if(isset($_POST['name'])){
        $sql = "SELECT * FROM book WHERE b_name LIKE '%$in%'";
    }
  $new_str='';
for ($z=0; $z <strlen($in); $z++) {
  if (!$this->special_chr($in[$z])) {
    $new_str.=$in[$z];

    # code...
  }

  
}

  $input = PorterStemmer::Stem($new_str);
  //echo "$input";
  // $sql = "SELECT * FROM book WHERE b_name LIKE '%$input%' ||  b_author LIKE '%$author%' || b_catagory LIKE '%$catalog%'";
 // $sql = "SELECT * FROM book WHERE b_author='$author' || b_catagory='$catalog'"; 
  
 // $sql="SELECT * FROM book";
  $result  = mysqli_query($conn,$sql);
  if (!$result) {
    echo "Something Wrong";
  }
  $i = 0;
  $d = 0;
  $gg[]='';
  $str[]='';
  $res_arr=array();
  while($words = mysqli_fetch_assoc($result)) {
  $word = strtolower($words['b_name']);
  $author= strtolower($words['b_author']);
  $changes = levenshtein($input, $word);
      
       $a = strlen($word);
       $b = strlen($input);
       

       if($a > $b){
          $c=$a;
       }else{
          $c=$b;
       }

       
       $gg[$i] = 1-($changes/$c);
       $str[$i] = [$word];
       $count = count($str);
       $i++;

       



}
   $o = 0;
   $l = max($gg);
       for ($n=0; $n <count($gg) ; $n++) { 
        if($l == $gg[$n])
        {
          $m[$o] = [$n];
          $o++;
        }
        
       }
        //print_r($m);
        for ($p=0; $p <count($m); $p++) {
         $q = $m[$p][0];
         // echo "<br>";
       
       // print_r($str[$q]);00
       

    
          # code...
        }

         //print_r($gg);
        return $res_arr[]=array('b_name'=>$str[$q],'b_author'=>$author);    
}
}
    public function special_chr($ch){
    $arr =['!','@','#','%',';','"','?','>','<','%','$','*','{','}','^','(',')','+','_','-','.',':','~','|','&'];

    $a=false;
    for ($i=0; $i < count($arr); $i++) {
       if($arr[$i]==$ch){
        $a=true;
       } 
        # code...
    }
    return $a;
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
