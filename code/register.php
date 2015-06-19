<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<html>

<title>New Tab</title>
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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

<body>
	<div class="header">
	<!---->
		<div class="header-left">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li><a href="index.php" >HOME</a></li>
					<li><a href="login.php" class="black4" > LOGIN</a></li>
					<li class="active" ><a href="register.php" class="black4" >REGISTER</a></li>
				</ul>
			</div>
			
			<p class="footer-class">Powered by  <a href="http://w3layouts.com/" target="_blank">CodeRunner&#169 </a> </p>
		</div>
		<!---->
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li><a href="index.php" >HOME</a></li>
					<li><a href="login.php" class="black4" > PROFILE</a></li>
					<li class="active" ><a href="register.php" class="black4" >REGISTER</a></li>
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".top-nav-in ul").slideToggle(500, function(){
						});
					});
			</script>

			</div>
			<div class="clear"> </div>
		</div>
			<!---->
			
			<div class="content">
			<div class="contact">
				<h1>Create an account to have access the website</h1>
				
			<div class="top-contact">
				<h3>Register | <a href="login.php">Login</a></h3>
				<form action="registerManager.php" method="POST">
				<div class="grid-contact">
					<div class="your-top">
						<input type="text" name="user" placeholder="Username">
						<div class="clear"> </div>
					</div>
					<div class="your-top">
						<input type="password" name="pass" placeholder="Password">								
						<div class="clear"> </div>
					</div>
	
					&nbsp;&nbsp;&nbsp;	
					<input type="radio" name="stats" id="radio4" class="css-checkbox" value="1"/>
					<label for="radio4" class="css-label radGroup2">Customer</label> &nbsp;&nbsp;&nbsp;

					<input type="radio" name="stats" id="radio5" class="css-checkbox" value="2"/>
					<label for="radio5" class="css-label radGroup2">Restaurant</label><br><br>

					<div class="grid-single-in">
					<input type="submit" id="register" name="submit" value="Register">
					</div>
				</form>
				</div>
			</div>
			</div>
			</div>
		</div>
		<div class="clear"> </div>
		<p class="footer-class-in">Copyright © 2015 Powered by  <a href="http://w3layouts.com/" target="_blank">CodeRunner&#169 </a> </p>
	</div>
</body>
</html>