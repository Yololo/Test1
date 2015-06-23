<?php
	
	if(isset($_POST["submit"])){

	
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$status = $_POST['stats'];
		
		include 'connection.php';
		
		$query=mysqli_query($conn, "SELECT * FROM login WHERE username='".$user."'");
		
		if(mysqli_num_rows($query) == 0)
		{
		
		$sql="INSERT INTO login(username,password,status) VALUES('".$user."', '".$pass."', '".$status."')";

		if(mysqli_query($conn, $sql))
		{
			header("Location: login.php");
		}else {
			header("Location: register.php");
		}

		}else {
			header("Location: register.php");
		}

		
	}
?>