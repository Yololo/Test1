<?php
$username = "root";
$password = "";
$host = "localhost";
$dbname = "noq";

$conn=mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db($dbname) or die("cannot select DB");
?>
