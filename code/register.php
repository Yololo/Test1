<!doctype html>
<html>
<head>
<title>Register</title>
</head>
<body>

<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Registration Form</h3>
<form action="" method="POST">
Username: <input type="text" name="user"><br />
Password: &nbsp;<input type="password" name="pass"><br />
<input type="radio" name="stat" value="1"> Customer<br>
<input type="radio" name="stat" value="2"> Restaurant<br> 	
<input type="submit" value="Register" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$stat=$_POST['stat'];
	
	include 'connection.php';
	
	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."' AND status='".$stat."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password,status) VALUES('$user','$pass','$stat')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>