<?php
	include 'connection.php';
	
	$resID = $_POST['id'];
	$tableType = 0;
	$peopleNum = $_POST['peopleNum'];

	if ($peopleNum<3){
		$tableType = 1;
	}
	else if ($peopleNum<7){
		$tableType = 2;
	}
	else{
		$tableType = 3;
	}

	$sql ="update seat set waiting = waiting + 1 where restaurantID={$resID} and tableID={$tableType}";
	mysqli_query($conn, $sql);
?>