<?php
if (!isset($_GET['language'] ))
{
	$_GET['language'] = 'english';
}
	$userrole = array('customer');
	include("security.php");
	include("connect_db.php");
	$query = "SELECT * FROM `faq`";
	$result = mysql_query($query, $db);
	$record = mysql_fetch_array($result);
	
	//var_dump($record);

?>

<table class='simple' >
<caption>
	FAQ pagina
	<a href='index.php?content=faq&language=english'><img src='./images/uk.png' alt ='' /></a>
	<a href='index.php?content=faq&language=dutch'><img src='./images/ned.png' alt ='' /></a>

</caption>
<tr>
		<th>
			id
		</th>
		<th>
			vraag
		</th>
		<th>
			antwoord
		</th>
</tr>
<?php
	while ($record = mysql_fetch_array($result))
	{
		echo "<tr>
					<td>
						".$record['id']."
					
					</td>
					<td>
						";
					if ($_GET['language'] == 'english')
					{
						echo $record['question_english'];
					}
					else
					{ 
						echo $record['question_dutch'];
					}
					echo "
					
					</td>
					<td>
						";
					if ($_GET['language'] == 'english')
					{
						echo $record['answer_english'];
					}
					else
					{
						echo $record['answer_dutch'];
					}
					echo"
					
					</td>
		
			  </tr>";
	}
?>
</table>