
<?php 

$username= $password="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	function clean_input($field){
		$field=trim($field);
		$field=stripslashes($field);
		$field=htmlspecialchars($field);
		return $field;
	}

	$username=clean_input($POST['username']);
	$password=clean_input($POST['password']);

	if(isset($username) && $username != " "  && isset($password) && $password!=""){

	}
	else
	{
		echo "You must fill username and password";
	}

}




?>



<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<style >
		
		.btn{

			margin:4px 100px;
			padding: 5px;


		}
	</style>
</head>

<body>

	<form action="<php  echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		
	<div claaa=form-row> 
		<label>Username : </label>
		<input type="text" name="username" placeholder="Full Name"  value=""><br/><br/>
	     <label>Password : </label>
		<input type="password" name="password" placeholder="Enter password" value=""><br><br/>
	</div>

	<div class="btn">
		<input type="submit" name="submit" value="SUBMIT">
	</div>

	</form>

</body>
</html>