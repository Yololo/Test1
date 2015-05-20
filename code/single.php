<?php
include 'connection.php';

$resID = $_GET['id'];

$sql = "SELECT * FROM restaurant WHERE resID = '".$resID."'";
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
<title>Kappe a Personal Portfolio Category Flat Bootstarp Responsive Website Template | Single :: w3layouts</title>
<!-- jQuery-->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!-- <link href="css/table.css" rel="stylesheet" type="text/css" media="all" />	-->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body>
	<div class="header">
		<div class="header-left header-left3">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li  ><a href="index.php" >HOME</a></li>
					<li><a href="work.html" class="black" > WORK</a></li>	
					<li><a href="about.html" class="black1"> ABOUT</a></li>
					<li><a href="blog.html" class="black2" > BLOG</a></li>
					<li><a href="404.html" class="black3" > SERVICES</a></li>
					<li><a href="contact.html" class="black4" > PROFILE</a></li>
				</ul>
			</div>
		</div>
		<!---->
		<div class="header-top">
			<div class="logo-in">
				<a href="index.php"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li class="active" ><a href="index.php" >HOME</a></li>
					<li><a href="work.html" class="black" > WORK</a></li>	
					<li><a href="about.html" class="black1"> ABOUT</a></li>
					<li><a href="blog.html" class="black2" > BLOG</a></li>
					<li><a href="404.html" class="black3" > SERVICES</a></li>
					<li><a href="contact.html" class="black4" > PROFILE</a></li>
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
							<?php 
							
							$query = mysql_query("select image from image where imageID={$resID}");
							//$query = mysql_query("select resID, imageID from homepage h, image i where resID = imageID LIMIT 4;");
							//$query_img = mysql_query("select image from image where imageID IN (select homeID from homepage) LIMIT 4;");
							
							/* 
							$query = mysql_query("select resID, name from homepage h, restaurant r where resID = homeID;");
							$query_img = mysql_query("select image from image i where imageID IN (select homeID from homepage) LIMIT 16;");
							 */
							while ($row = mysql_fetch_array($query))
							{
								echo 
								"<li> 
									
									<img src='images/{$row[0]}' style='width:612px; height:280px;' alt=''>
								</li>";
							}
							?>
							
						  </ul>
					  </div>
					</div>
					<br>
					
					<H2>
						<?php
						//$sql = 'SELECT * FROM restaurant';

						mysql_select_db('noq');
						$result = mysql_query( $sql, $conn );
						if(! $result )
						{
						  die('Could not get data: ' . mysql_error());
						}
						
						if($row = mysql_fetch_array($result, MYSQL_NUM))
						{
						echo "{$row[2]}";
						}
						
						mysql_free_result($result);
						?>
					</H2>
					
					<p class="para"><br>
					<?php
					//$sql = 'SELECT * FROM restaurant';

					mysql_select_db('noq');
					$result = mysql_query( $sql, $conn );
					if(! $result )
					{
					  die('Could not get data: ' . mysql_error());
					}
					
					if($row = mysql_fetch_array($result, MYSQL_NUM))
					{
					echo "{$row[6]}";
					}
					
					mysql_free_result($result);
					?>
					</p>
					
				<div class="grid-single-in">
				
				<div class="clear"> </div>
				</div>
				</div>
				<div class="single-in">
					<div class="info">
					<h3>Restaurant Information</h3>
						<ul class="likes">
							<li><span><i></i>
							<?php
								//$sql = 'SELECT * FROM restaurant';

								mysql_select_db('noq');
								$result = mysql_query( $sql, $conn );
								if(! $result )
								{
								  die('Could not get data: ' . mysql_error());
								}
								
								if($row = mysql_fetch_array($result, MYSQL_NUM))
								{
								echo "{$row[3]}";
								}
								
								mysql_free_result($result);

							?>
								</span>
							</li>
							<li><span><i></i>
							<?php
								//$sql = 'SELECT * FROM restaurant';

								mysql_select_db('noq');
								$result = mysql_query( $sql, $conn );
								if(! $result )
								{
								  die('Could not get data: ' . mysql_error());
								}
								
								if($row = mysql_fetch_array($result, MYSQL_NUM))
								{
								echo "{$row[4]}";
								}
								
								mysql_free_result($result);

							?>
								</span>
							</li>
							<li><span><i></i>
							<?php
								//$sql = 'SELECT * FROM restaurant';

								mysql_select_db('noq');
								$result = mysql_query( $sql, $conn );
								if(! $result )
								{
								  die('Could not get data: ' . mysql_error());
								}
								
								if($row = mysql_fetch_array($result, MYSQL_NUM))
								{
								echo "{$row[5]}";
								}
								
								mysql_free_result($result);

							?>
								</span>
							</li>
								
						</ul>
						
						
					</div>
					
					
					<!--
					<div class="grid-single-in">
						<div class="grid-contact-in">
							<textarea rows="1" value="" onfocus="this.value='';" maxlength="2">Person</textarea>
						</div>
						<input type="submit" value="Queue">
						
					</div>
					-->
					
					<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->
					
					<div class="single">
						<div class="top-single">
							<div class="grid-single">
								<div class="your-single">
									<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">								
									<div class="clear"> </div>
								</div>
								
							</div>
							<div class="grid-single-in">
								<input type="submit" id="queue-btn" maxlength="2" value="QUEUE">
							</div>
							<div class="clear"> </div>
						</div>
					</div>
					
					<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->
					
				
				</div>
				<div class="clear">
					
				</div>
			</div>
		</div>
		<div class="clear"> </div>
				<p class="footer-class-in">Copyright © 2015 Kappe Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>

	</div>
</body>
</html>