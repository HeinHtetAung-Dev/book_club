<?php
$db['db_host']='localhost';
  $db['db_user']='root';
  $db['db_pass']='';
  $db['db_name']='project_db';
  

  foreach ($db as $key => $value) {
    // code...
    define(strtoupper($key),$value);
  }
  $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  if(!$conn){
    die("Database Failed".mysqli_error($conn));
  }
?>
<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=pyidaungsu' />
<style>
  .mmwebfont{
    font-family:Pyidaungsu!important;
  }
</style>