<?php
	include 'connection.php';
	//$resID = $_SESSION['resID'];
	$resID = 1;
	$tableType = $_POST['tableType'];

	if ($_POST['tableStatus']==1)
	{
		$sql ="update seat set occupied = occupied + 1 where restaurantID={$resID} and tableID={$tableType}";
		mysqli_query($conn, $sql);
		
		$sql ="update seat set waiting = waiting - 1 where restaurantID={$resID} and tableID={$tableType}";
		mysqli_query($conn, $sql);
	}
	else
	{
		$sql ="update seat set occupied = occupied - 1 where restaurantID={$resID} and tableID={$tableType}";
		mysqli_query($conn, $sql);
	}
	header("Location: http://localhost/web/noq/restaurant.php");
?>