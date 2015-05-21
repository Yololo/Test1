<?php
include 'connection.php';
$resID = $_POST['id'];
?>


<table id="seatTable">
<tr>
	<td>
		Size
	</td>
	
	<td>Seat</td>
	<td>Occupied</td>
	<td>Waiting</td>
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