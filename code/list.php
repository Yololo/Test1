<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>NoQ - Restaurants</title>
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
<!--<style>
    /* generic table styling */
    table { border-collapse: collapse; }
    th, td { padding: 5px; }
    th { border-bottom: 2px solid #999; background-color: #eee; vertical-align: bottom; }
    td { border-bottom: 1px solid #ccc; }

    /*table.striped tbody tr:nth-child(even) { background-color: #f0f8ff; }*/ /*auto striping gets messed up with hidden rows*/
    tr.striped { background-color: #f0f8ff; }

    /* filter-table specific styling */
    td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
</style>-->
<link href="css/table.css" rel="stylesheet" type="text/css" media="all" />  
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
                    <li class="active"><a href="list.php" class="black">RESTAURANTS</a></li>
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
        <div class="header-top">
            <div class="logo-in">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="top-nav-in">
            <span class="menu"><img src="images/menu.png" alt=""> </span>
                <ul >
                    <li><a href="index.php" >HOME</a></li>
                    <li class="active"><a href="list.php" class="black">RESTAURANTS</a></li>
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
            <div class="work">
            <table>
                <thead>
                    <tr>
                        <th scope="col" title="President Number">#</th>
                        <th scope="col">Restaurant Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Opening Hour</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                $query = mysqli_query($conn, "Select * from restaurant;");

                while($row = mysqli_fetch_array($query))
                {
                    echo "<tr><td>". $row['ID'] ."</td>
                              <td><a href='single.php?id=" . $row['resID'] . "'>". $row['name'] ."</a></td>
                              <td>". $row['phone'] ."</td>
                              <td>". $row['opHour'] ."</td>
                              <td>". $row['address'] ."</td>
                          </tr>";
                }
                ?>
                    
                </tbody>
            </table>
            <script src="js/jquery.filtertable.js"></script>
            <script src="js/jquery.filtertable.min.js"></script>
            <script>
            $(document).ready(function() {
                var stripeTable = function(table) { //stripe the table (jQuery selector)
                    table.find('tr').removeClass('striped').filter(':visible:even').addClass('striped');
                };
                $('table').filterTable({
                    callback: function(term, table) { stripeTable(table); } //call the striping after every change to the filter term
                });
                stripeTable($('table')); //stripe the table for the first time
            });
            </script>   
                
                <div class="clear"> </div>
            </div>

            
        </div>
        <div class="clear"> </div>
                <p class="footer-class-in">Copyright © 2015 Kappe Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>

    </div>
</body>
</html>