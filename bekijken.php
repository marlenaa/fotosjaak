<html>
<center><h2>
dit zijn alle users:
</h2></center>
<center><table class='simple'>
	<tr>
		<th>
			username:
		</th>
		<th>
			userid:
		</th>
		<th>
			email:
		</th>
		
	</tr>
	<tr>
		<?php
		include("connect_db.php");
		$query = "SELECT * FROM `users`";
		$row =  mysql_query($query, $db);
		while ($record = mysql_fetch_array($row))
		
		{
		$user_id = $record[1];
		$user_firstname = $record[0];
		$user_email = $record[10];
		
		
	?>
	<td><?php echo $user_id; ?></td>
	<td><?php echo $user_firstname; ?></td>
	<td><?php echo $user_email; ?></td>
	
	</tr>
	<?php 
	}
	?>
</table>
</center>
</html>