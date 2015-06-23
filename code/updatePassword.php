<?php

session_start();

$pass = $_POST['pass'];

include 'connection.php';

$query = mysqli_query($conn, "Update login SET password='". $pass ."' Where ID='". $_SESSION['userID'] ."';");

if($query)
{
	//echo "Success";
	header("Location: member.php");
}else {
	echo "Failed";
}

?>