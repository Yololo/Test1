<?php
session_start();
if(!empty($_SESSION['userID']))
{
$resID= $_SESSION['userID'];
}
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>NoQ - Home</title>
<!-- jQuery-->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
	<!---->
		<div class="header-left">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li class="active" ><a href="index.php" >HOME</a></li>
					<li><a href="list.php" class="black">RESTAURANTS</a></li>
					<?php
					if(empty($resID))
					{?>
					<li><a href="register.php" class="black1">REGISTER</a></li>
					<li><a href="login.php" class="black2">LOGIN</a></li>
					<?php
					}
					?>
					<?php
					if(!empty($resID))
					{?>
					<li><a href="member.php" class="black3">PROFILE</a></li>
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
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li class="active" ><a href="index.php" >HOME</a></li>
					<li><a href="list.php" class="black">RESTAURANTS</a></li>
					<?php
					if(empty($resID))
					{?>
					<li><a href="register.php" class="black1">REGISTER</a></li>
					<li><a href="login.php" class="black2">LOGIN</a></li>
					<?php
					}
					?>
					<?php
					if(!empty($resID))
					{?>
					<li><a href="member.php" class="black3">PROFILE</a></li>
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
			</script>

			</div>
			<div class="clear"> </div>
		</div>
			<!---->
		<div class="content">
	
			<?php
			include 'connection.php';
			$query = mysqli_query($conn, "select resID, name from homepage h, restaurant r where resID = homeID;");
			$query_img = mysqli_query($conn, "select image from image i where imageID IN (select homeID from homepage) LIMIT 16;");
			
			while ($row = mysqli_fetch_array($query))
			{
			$row_img = mysqli_fetch_array($query_img);
			echo "<div class='content-grid'>
				<a href='single.php?id=" . $row['resID'] . "' class='b-link-stripe b-animate-go  thickbox'>".
					"<img  src='images/". $row_img['image'] ."' />"
						.

						"<div class='b-wrapper'>
							<h2 class='b-animate b-from-left    b-delay03 '>
								<span>".$row['name']."</span>
								<p>Click for more details</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>";
			}
			?>
			
			<!-- 
			<div class="content-grid">
				<a href="ResDetail/single.php" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Restaurant's Name</span>
								<p>Click for more details</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi1.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi2.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi3.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi4.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi5.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi6.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi7.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi8.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid grid9">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi9.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi3.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi6.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi2.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi5.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div>
			<div class="content-grid">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
					<img  src="images/pi9.jpg" />
						<div class="b-wrapper">
							<h2 class="b-animate b-from-left    b-delay03 ">
								<span>Cool App Design</span>
								<p>development, mobile</p>
								<i> </i>
							</h2>
						</div>
				</a>
			</div> -->
			<!-- <div class="clear"> </div>
			<div class="arrow">
				<img  src="images/ic.png" />
				<ul class="social ">
					<li><span><i> </i>9930 1234 5679</span></li>
					<li><a href="mailto:info@example.com"><i class="mes"> </i>info@example.com</a></li>
					<li><span><i class="down"> </i>street address example</span></li>
				</ul>
			</div> -->
		</div>
		<div class="clear"> </div>
		<p class="footer-class-in">Copyright © 2015 Powered by  <a href="index.php" target="_blank">CodeRunner&#169 </a> </p>
	</div>
</body>
</html>