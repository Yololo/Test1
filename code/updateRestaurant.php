<?php

session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$ophour = $_POST['ophour'];
$address = $_POST['address'];
$description = $_POST['description'];

include 'connection.php';

$query = mysqli_query($conn, "Update restaurant SET name='". $name ."' Where resID='". $_SESSION['userID'] ."'");
$query1 = mysqli_query($conn, "Update restaurant SET phone='". $phone ."' Where resID='". $_SESSION['userID'] ."'");
$query2 = mysqli_query($conn, "Update restaurant SET opHour='". $ophour ."' Where resID='". $_SESSION['userID'] ."'");
$query3 = mysqli_query($conn, "Update restaurant SET address='". $address ."' Where resID='". $_SESSION['userID'] ."'");
$query4 = mysqli_query($conn, "Update restaurant SET description='". $description ."' Where resID='". $_SESSION['userID'] ."'");

if($query && $query1 && $query2 && $query3 && $query4)
{
	//echo "Success";
	header("Location: member.php");
}else {
	echo "Failed";
}

?>