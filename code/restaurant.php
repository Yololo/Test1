<?php
session_start();
$resID= $_SESSION['userID'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Kappe a Personal Portfolio Category Flat Bootstarp Responsive Website Template | Single :: w3layouts</title>
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
<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
 --><!--//fonts-->

</head>
<script>
	function updateSeat(ts){
		var strData = 'id='+<?php echo $resID; ?>+'&tableType='+ $('#tableType').val() + '&tableStatus=' + ts;
		$.ajax({
			url:'tableManager.php',
			type:'POST',
			data:strData,
			success: function(data){
				table.load("table.php",{id:<?php echo $resID; ?>});
			}
		});
	}
</script>
<body>
	<div class="header">
		<div class="header-left header-left3">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li  ><a href="index.html" >HOME</a></li>
					<li><a href="work.html" class="black" > WORK</a></li>	
					<li><a href="about.html" class="black1"> ABOUT</a></li>
					<li><a href="blog.html" class="black2" > BLOG</a></li>
					<li><a href="404.html" class="black3" > SERVICES</a></li>
					<li><a href="contact.html" class="black4" > CONTACT</a></li>
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
			<p class="footer-class"> Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li class="active" ><a href="index.html" >HOME</a></li>
					<li><a href="work.html" class="black" > WORK</a></li>	
					<li><a href="about.html" class="black1"> ABOUT</a></li>
					<li><a href="blog.html" class="black2" > BLOG</a></li>
					<li><a href="404.html" class="black3" > SERVICES</a></li>
					<li><a href="contact.html" class="black4" > CONTACT</a></li>
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
			<div class="single">
				<div class="single-top">
					<script src="js/responsiveslides.min.js"></script>
					<script>
						$(function () {
						  $("#slider4").responsiveSlides({
							auto: true,
							speed: 500,
							namespace: "callbacks",
								pager: true,
						  });
						});
					</script>
					<div class="slider">
						<div class="callbacks_container">
						  <ul class="rslides" id="slider4">
							<li>
							  <img src="images/w1.jpg" alt="">
							  
							</li>
							<li>
							  <img src="images/w2.jpg" alt="">
								
							</li>
							<li>
							  <img src="images/w3.jpg" alt="">
							  
							</li>
							<li>
							  <img src="images/w4.jpg" alt="">
							  
							</li>
						  </ul>
					  </div>
					</div>
					<h2>Heavy Sand - Creative Photography</h2>
					
					<div class="comment-grid-top">
					
					
					
					
				</div>
				<div class="top-single">
				<h3>Table Type</h3>
				<div class="grid-single">
					<select id="tableType">
					  <option value="1">Small</option>
					  <option value="2">Medium</option>
					  <option value="3">Large</option>
					</select>
				</div>
				<div class="grid-single-in">
					<input type="button" class="seatChange" value="CUSTOMER IN" onclick="updateSeat(1)">
					<input type="button" class="seatChange" value="CUSTOMER OUT" onclick="updateSeat(2)">
				</div>
				<div class="clear"> </div>
			</div>
				</div>
				<div class="single-in">
					<div class="info">
					<h3>Project Info</h3>
						<ul class="likes">
							<li><a href="#"><i > </i>premiumlayers</a></li>
							<li><span><i class="like"> </i>138 Likes</span></li>
							<li><span><i class="dec"> </i>25 December, 2013</span></li>
							<li><a href="#"><i class="comment"> </i>4 Comments</a></li>

						</ul>
					</div>
					<div class="tags">
					<h3>Table</h3>
						<div id="tableID">
						 
						</div>
						    <script type='text/javascript'>
						      var table = $('#tableID');

						       table.load("table.php",{id:<?php echo $resID; ?>});
						     var refresher = setInterval(function(){
						       table.load("table.php",{id:<?php echo $resID; ?>});
						     }, 1000);
						     setTimeout(function() {
						       clearInterval(refresher);
						     }, 1800000);
						</script>
					</div>
					
					
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
				<p class="footer-class-in">Copyright © 2015 Kappe Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>

	</div>
</body>
</html>