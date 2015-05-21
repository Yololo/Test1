<?php
$username = "root";
$password = "";
$host = "localhost:3307";
$dbname = "noq";

/* $conn=mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db($dbname) or die("cannot select DB"); */

$conn = mysqli_connect($host, $username, $password, $dbname) or die (mysqli_error());
?>
