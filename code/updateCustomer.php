<?php

session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['stats'];

include 'connection.php';

$query = mysqli_query($conn, "Update customer SET name='". $name ."' Where cusID='". $_SESSION['userID'] ."'");
$query1 = mysqli_query($conn, "Update customer SET phone='". $phone ."' Where cusID='". $_SESSION['userID'] ."'");
$query2 = mysqli_query($conn, "Update customer SET gender='". $gender ."' Where cusID='". $_SESSION['userID'] ."'");

if($query && $query1 && $query2)
{
	//echo "Success";
	header("Location: member.php");
}else {
	echo "Failed";
}

?>