<?php
session_start();
$resID= $_SESSION['userID'];

include 'connection.php';
$sql = "SELECT * FROM restaurant WHERE resID = '".$resID."'";
?>

<!DOCTYPE html>
<html>
<head>
<title>NoQ - <?php
						$result = mysqli_query( $conn, $sql);
						if(! $result )
						{
						  die('Could not get data: ' . mysqli_error());
						}
						
						if($row = mysqli_fetch_array($result))
						{
						echo "{$row[2]}";
						}
						
						mysqli_free_result($result);
			 ?>
</title>
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
				<a href="#"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav">
				<ul >
					<li class="active"><a href="restaurant.php" class="black">ADMINISTRATION</a></li>
					<li><a href="profile.php" class="black">PROFILE</a></li>
					<li><a href="logout.php" class="black4">LOGOUT</a></li>
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
				<a href="#"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="top-nav-in">
			<span class="menu"><img src="images/menu.png" alt=""> </span>
				<ul >
					<li class="active"><a href="restaurant.php" class="black">ADMINISTRATION</a></li>
					<li><a href="profile.php" class="black">PROFILE</a></li>
					<li><a href="logout.php" class="black4">LOGOUT</a></li>
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
							
							$query = mysqli_query($conn, "select image from image where imageID={$resID}");
							//$query = mysql_query("select resID, imageID from homepage h, image i where resID = imageID LIMIT 4;");
							//$query_img = mysql_query("select image from image where imageID IN (select homeID from homepage) LIMIT 4;");
							
							/* 
							$query = mysql_query("select resID, name from homepage h, restaurant r where resID = homeID;");
							$query_img = mysql_query("select image from image i where imageID IN (select homeID from homepage) LIMIT 16;");
							 */
							while ($row = mysqli_fetch_array($query))
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

					<h2>
					<?php
						//$sql = 'SELECT * FROM restaurant';

						//mysqli_select_db('noq');
						$result = mysqli_query( $conn, $sql);
						if(! $result )
						{
						  die('Could not get data: ' . mysqli_error());
						}
						
						if($row = mysqli_fetch_array($result))
						{
						echo "{$row[2]}";
						}
						
						mysqli_free_result($result);
						?>
					</h2>
					
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
					<input type="submit" class="seatChange" value="CUSTOMER IN" onclick="updateSeat(1)">
					<br><br>
					<input type="submit" class="seatChange" value="CUSTOMER OUT" onclick="updateSeat(2)">
				</div>
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

								//mysqli_select_db('noq');
								$result = mysqli_query( $conn, $sql );
								if(! $result )
								{
								  die('Could not get data: ' . mysqli_error());
								}
								
								if($row = mysqli_fetch_array($result))
								{
								echo "{$row[3]}";
								}
								
								mysqli_free_result($result);

							?>
								</span>
							</li>
							<li><span><i></i>
							<?php
								//$sql = 'SELECT * FROM restaurant';

								//mysqli_select_db('noq');
								$result = mysqli_query( $conn, $sql );
								if(! $result )
								{
								  die('Could not get data: ' . mysqli_error());
								}
								
								if($row = mysqli_fetch_array($result))
								{
								echo "{$row[4]}";
								}
								
								mysqli_free_result($result);

							?>
								</span>
							</li>
							<li><span><i></i>
							<?php
								//$sql = 'SELECT * FROM restaurant';

								//mysqli_select_db('noq');
								$result = mysqli_query( $conn, $sql );
								if(! $result )
								{
								  die('Could not get data: ' . mysqli_error());
								}
								
								if($row = mysqli_fetch_array($result))
								{
								echo "{$row[5]}";
								}
								
								mysqli_free_result($result);

							?>
								</span>
							</li>
								
						</ul>
					</div>
					<div class="tags">
					<h3>Table Seats</h3>
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