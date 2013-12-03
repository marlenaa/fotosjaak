<h3> Dit is de logintest pagina.</h3>
<?php
	//include de login class
	require_once('class/LoginClass.php');
	
	//$loginClassObj = new LoginClass();
	
	$query = "SELECT * FROM `login`";
	// we hebben de method find by sql ($query) static gemaakt. dit heeft als effect dat we deze method kunnen aanroepen zonder eerst 
	//een object te hoeven maken van de class loginclass. we kunnen de merhod simpek aanroepen door de classnaam gevold foor een dubbele dubbele punt
	//(;;) (double colon) dus loginclass::find_by_sql($query)
	$result_array = loginClass::Find_by_sql($query);
	
	echo "<table class='simple'>";
	echo "<tr><td>id</td> 
			<td>email</td> 
			<td>password</td> 
			<td>activated</td> 
			<td>activationdate</td> </tr>";
	foreach ($result_array as $value)
	{
		echo "
				<tr>
				  <td>".$value->get_id()."</td>
				  <td>".$value->get_email()."</td>
				  <td>".$value->get_password()."</td>
				  <td>".$value->get_activated()."</td>
				  <td>".$value->get_activationdate()."</td>
				</tr>";
		}
	echo"</table>";
?>
bestaat het email adress?
<?php echo LoginClass::email_exists("devel@oper.com"); ?>
