<?php
	session_start();
	if(isset($_POST["submit"])){

	if(!empty($_POST['user']) && !empty($_POST['pass'])) {
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		include 'connection.php';

		$query=mysqli_query($conn, "SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
		
		if (mysqli_num_rows($query)==1)
		{
			$row=mysqli_fetch_assoc($query);
			$_SESSION['userID'] = $row['ID'];
			$_SESSION['userStatus'] = $row['status'];
			
			if ($row['status']==1)
			{
				header("Location: index.php");
			}
			else
			{
				header("Location: restaurant.php");
			}
		} else {
			header("Location: login.php");
		//echo "Invalid username or password!";
		}

	} else {
		//echo "All fields are required!";
	}
	}
?>