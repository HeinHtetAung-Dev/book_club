<?php 
	$db['db_host']='localhost';
	$db['db_user']='root';
	$db['db_pass']='';
	$db['db_name']='project_db';

	foreach ($db as $key => $value)
	 {
	 	define(strtoupper($key),$value);
		# code...
	}
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if($con)
	{
		// echo "Connection Successfully";
	}else
	{
		// echo "Connection Failed";
	}
 ?>