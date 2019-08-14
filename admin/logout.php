<?php session_start(); ?>
<?php 
$_SESSION['username'] = NULL;
$_SESSION['role']=NULL;
header('location:../index2.php');
 ?>