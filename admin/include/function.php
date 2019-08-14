
<?php include_once "include/conn.php";?>
<?php
function history_count(){
	GLOBAL $con;
$query = "SELECT * FROM book WHERE b_catagory = 'History'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
echo "$count";
}


function technology_count(){
	GLOBAL $con;
$query = "SELECT * FROM book WHERE b_catagory = 'technology'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

function knowledge_count(){
	GLOBAL $con;
$query = "SELECT * FROM book WHERE b_catagory = 'Knowledge'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
echo "$count";
}

function love_count(){
	GLOBAL $con;
$query = "SELECT * FROM book WHERE b_catagory = 'Love'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}
function translate_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_catagory = 'Translate'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}
function hartha_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_catagory = 'Joke'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function lal_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Laetwinthr Saw Chit'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function phaymyint_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Phay Myint'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function myathantint_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Mya Than Tint'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function juu_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Jue'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}
function thoesaung_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Thoe Saung'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}
function khinhtoo_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Khin Khin Htoo'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}
function lynntheiknyunt_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Lynn Theik Nyunt'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function moemoe_count(){
  GLOBAL $con;
$query = "SELECT * FROM book WHERE b_author = 'Moe Moe (Inyar)'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function book_count(){
GLOBAL $con;
$query = "SELECT * FROM book ";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function user_count(){
GLOBAL $con;
$query = "SELECT * FROM users ";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}

function download_count(){
	GLOBAL $con;
$query = "SELECT SUM(download) FROM book GROUP BY download";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
echo "$count";
}
function category_count(){
	GLOBAL $con;
$query = "SELECT DISTINCT b_catagory FROM book";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
echo "$count";
}
function message_count(){
GLOBAL $con;
$query = "SELECT * FROM message ";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
return $count;
}
?>