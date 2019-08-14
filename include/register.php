<?php 
     include_once "db.php";
if (isset($_POST['register'])) 
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password =  mysqli_real_escape_string($conn,$_POST['password']);
	$db_email=NULL;
	$query = "SELECT * FROM users WHERE email='$email'";
	$status = 0;
	$register_result = mysqli_query($conn,$query);
	while ($row = mysqli_fetch_assoc($register_result)) {
		$db_email = $row['email'];
		
		}

		if ($db_email != $email)
		{
			$q1 = "INSERT INTO users(name,password,email) VALUES ('$username','$password','$email')";
			$res = mysqli_query($conn,$q1);
			
		}else{
			echo "Already Exist";
		}
}
?>
<form method="post" action="">
	<input type="text" name="username" >
	<input type="text" name="email">
	<input type="password" name="password">
	<input type="submit" name="register" value="register">
</form>