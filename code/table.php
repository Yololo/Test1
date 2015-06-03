<?php
include 'connection.php';
$resID = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/table.css" rel="stylesheet" type="text/css" media="all" />	
</head>

<table cellspacing='0'>
<tr>
	<th>Size</th>
	<th>Seat</th>
	<th>Occupied</th>
	<th>Waiting</th>
</tr>

	<?php
					$sql = "SELECT * FROM seat WHERE restaurantID = ".$resID; 	
					$result = mysqli_query($conn, $sql);
					if(! $result )
					{
					  die('Could not get data: ' . mysql_error());
					}
					else
					{
						$row = mysqli_fetch_array($result);
					}
					//mysql_free_result($result);
	?>
<tr>
					<td>Small (1-2)</td>
					<td><?php echo "{$row[3]}"?></td>
					<td><?php echo "{$row[4]}"?></td>
					<td><?php echo "{$row[5]}"?></td>
</tr>

<?php
	$row = mysqli_fetch_array($result);
?>
<tr>
					<td>Medium (3-6)</td>
					<td><?php echo "{$row[3]}"?></td>
					<td><?php echo "{$row[4]}"?></td>
					<td><?php echo "{$row[5]}"?></td>
</tr>

<?php
	$row = mysqli_fetch_array($result);
?>
<tr>
					<td>Large (7-12)</td>
					<td><?php echo "{$row[3]}"?></td>
					<td><?php echo "{$row[4]}"?></td>
					<td><?php echo "{$row[5]}"?></td>
</tr>
</table>