<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>NoQ - Profile</title>
<!-- jQuery-->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<!--<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>-->
<!--//fonts-->

</head>
<body>
	<div class="header">
		<div class="header-left header-work">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li><a href="index.php" >HOME</a></li>
					<li><a href="list.php" class="black">RESTAURANTS</a></li>
					<?php
					if(empty($_SESSION['userID']))
					{?>
					<li><a href="register.php" class="black1">REGISTER</a></li>
					<li><a href="login.php" class="black2">LOGIN</a></li>
					<?php
					}
					?>
					<?php
					if(!empty($_SESSION['userID']))
					{?>
					<li class="active"><a href="member.php" class="black3">PROFILE</a></li>
					<li><a href="logout.php" class="black4">LOGOUT</a></li>
					<?php
					}
					?>
				</ul>
			</div>
			<ul class="social-in">
				<li><a href="#"><i> </i></a></li>
				<li><a href="#"><i class="gmail"> </i></a></li>
				<li><a href="#"><i class="twitter"> </i></a></li>
				<li><a href="#"><i class="pin"> </i></a></li>
				<li><a href="#"><i class="dribble"> </i></a></li>
				<li><a href="#"><i class="behance"> </i></a></li>
			</ul>
			<p class="footer-class">Powered by  <a href="#" target="_blank">CodeRunner&#169 </a> </p>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li><a href="index.php" >HOME</a></li>
					<li><a href="list.php" class="black">RESTAURANTS</a></li>
					<?php
					if(empty($_SESSION['userID']))
					{?>
					<li><a href="register.php" class="black1">REGISTER</a></li>
					<li><a href="login.php" class="black2">LOGIN</a></li>
					<?php
					}
					?>
					<?php
					if(!empty($_SESSION['userID']))
					{?>
					<li class="active"><a href="member.php" class="black3">PROFILE</a></li>
					<li><a href="logout.php" class="black4">LOGOUT</a></li>
					<?php
					}
					?>
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".top-nav-in ul").slideToggle(500, function(){
						});
					});

					function dopass()
					{
						var pass = document.getElementById("pass").value;
  						var repass = document.getElementById("pass1").value;

  						if(pass == ""){
  						alert ("New Password Should Not Be Empty !");
  						}else if(repass == ""){
  						alert ("Please Re-Type Your Password !");
  						}else if(pass != repass){
  						alert ("Please Type The Same Password !");
  						}else{
  						var myform = document.getElementById("passform");
  						myform.action = "updatePassword.php";
  						myform.submit();
  						}
					}

					function dobasic()
					{
						var name = document.getElementById("name").value;
						var phone = document.getElementById("phone").value;
						var checked = false, radios = document.getElementsByName("stats");
  
  						for(var i=0, radio; radio=radios[i]; i++){
  							if(radio.checked){
  								checked = true;
  								break;
  							}
  						}

  						if(name == ""){
  						alert ("Please Input Your Name !");
  						}else if(phone == ""){
  						alert ("Please Input Your Phone Number !");
  						}else if(!checked){
  						alert ("Please Choose Your Gender !");
  						}else{
  						//alert (name + phone + checked);
  						var myform = document.getElementById("basicform");
  						myform.action = "updateCustomer.php";
  						myform.submit();
  						}
					}
				</script>

			</div>
			<div class="clear"> </div>
		</div>
			<!---->
		<div class="content">
			<div class="work">
			<h1>Update Password</h1>
				<div class="grid-contact">
				<form id="passform" method="POST">
					New Password: 
					<div class="your-top">
						<input type="password" name="pass" id="pass" placeholder="New Password">
						<div class="clear"> </div>
					</div>
					Re-Type Password: 
					<div class="your-top">
						<input type="password" name="pass1" id="pass1" placeholder="Re-Type Password">								
						<div class="clear"> </div>
					</div>
					<br>
					<div class="grid-single-in">
					<input type="submit" name="submit" value="Update" onclick="dopass()">
					</div>
				</form>
				</div>
				
				<div class="clear"> </div>
			</div>

			<div class="work">
			<h1>Update Basic Info</h1>
				<div class="grid-contact">
				<form id="basicform" method="POST">
					Name: 
					<div class="your-top">
						<?php

						$query = mysqli_query($conn, "Select cusID, name from customer Where cusID='". $_SESSION['userID'] ."'");
						$row = mysqli_fetch_array($query);

						if($row[1]=="" || $row[1]==NULL)
						{
						?>
						<input type="text" name="name" id="name" placeholder="Please Insert Your Name">
						<?php
						}else {
						?>
						<input type="text" name="name" id="name" value="<?php echo $row[1] ?>">
						<?php
						}
						?>
						<div class="clear"> </div>
					</div>
					Phone: 
					<div class="your-top">
						<?php

						$query1 = mysqli_query($conn, "Select cusID, phone from customer Where cusID='". $_SESSION['userID'] ."'");
						$row1 = mysqli_fetch_array($query1);

						if($row1[1]=="" || $row1[1]==NULL)
						{
						?>
						<input type="text" name="phone" id="phone" placeholder="Please Insert Your Phone Number">	
						<?php
						}else {
						?>	
						<input type="text" name="phone" id="phone" value=<?php echo "{$row1[1]}" ?>>	
						<?php
						}
						?>						
						<div class="clear"> </div>
					</div>
					Gender:
					<br><br>
					<?php

					$query2 = mysqli_query($conn, "Select cusID, gender from customer Where cusID='". $_SESSION['userID'] ."'");
					$row2 = mysqli_fetch_array($query2);

					if($row2[1]=="" || $row2[1]==NULL)
					{
					?>
					<input type="radio" name="stats" id="radio4" class="css-checkbox" value="M"/>
					<label for="radio4" class="css-label radGroup2">Male</label> &nbsp;&nbsp;&nbsp;

					<input type="radio" name="stats" id="radio5" class="css-checkbox" value="F"/>
					<label for="radio5" class="css-label radGroup2">Female</label>
					<?php
					}else if($row2[1]=="M"){
					?>	
					<input type="radio" name="stats" id="radio4" class="css-checkbox" value="M" checked="checked" />
					<label for="radio4" class="css-label radGroup2">Male</label> &nbsp;&nbsp;&nbsp;

					<input type="radio" name="stats" id="radio5" class="css-checkbox" value="F"/>
					<label for="radio5" class="css-label radGroup2">Female</label>
					<?php
					}else {
					?>	
					<input type="radio" name="stats" id="radio4" class="css-checkbox" value="M"/>
					<label for="radio4" class="css-label radGroup2">Male</label> &nbsp;&nbsp;&nbsp;

					<input type="radio" name="stats" id="radio5" class="css-checkbox" value="F" checked="checked" />
					<label for="radio5" class="css-label radGroup2">Female</label>
					<?php
					}
					?>	

					<br><br>

					<div class="grid-single-in">
					<input type="submit" name="submit" value="Update" onclick="dobasic()">
					</div>
				</form>
				</div>
				
				<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
				<p class="footer-class-in">Copyright © 2015 Kappe Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>

	</div>
</body>
</html>


