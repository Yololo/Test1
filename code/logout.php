<?php 
session_start();
unset($_SESSION['userID']);
unset($_SESSION['userStatus']);
session_destroy();
header("location:index.php");
?>
