<?php
include 'connection.php';
?>


<table id="seatTable">
<tr>
	<td>
		<?php
			$resID = 1;				
		?>
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
					<td>Small</td>
					<td><?php echo "{$row[3]}"?></td>
					<td><?php echo "{$row[4]}"?></td>
					<td><?php echo "{$row[5]}"?></td>
</tr>

<?php
	$row = mysqli_fetch_array($result);
?>
<tr>
					<td>Medium</td>
					<td><?php echo "{$row[3]}"?></td>
					<td><?php echo "{$row[4]}"?></td>
					<td><?php echo "{$row[5]}"?></td>
</tr>

<?php
	$row = mysqli_fetch_array($result);
?>
<tr>
					<td>Large</td>
					<td><?php echo "{$row[3]}"?></td>
					<td><?php echo "{$row[4]}"?></td>
					<td><?php echo "{$row[5]}"?></td>
</tr>
</table>