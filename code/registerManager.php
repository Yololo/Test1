<?php
	session_start();
	if(isset($_POST["submit"])){

	if(!empty($_POST['user']) && !empty($_POST['pass'])) {
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		include 'connection.php';
		
		$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
		$numrows=mysql_num_rows($query);
		if($numrows==0)
		{
		$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

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