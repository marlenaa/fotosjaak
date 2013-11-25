<?php
	//hiermee kan je zien wat er is verstuurd
			//var_dump($_POST);
			
	
	//hiermee word contact gemaakt met de mysql server
	$db = mysql_connect("localhost", "root", "");
	
	//hiermee kies je een database.
	mysql_select_db("am1a", $db) or die ("database is niet gevonden");
	
	$sql = "INSERT INTO `users` (		`id`, 
										`firstname`, 
										`infix`, 
										`surname`, 
										`street`,
										`city`,
										`postcode`,
										`date_of_birth`,
										`marital_status`,
										`favorite_game`,
										`email`,
										`password`,
										`userrole`)
			VALUES 				(NULL,	'".$_POST['firstname']."', 
										'".$_POST['infix']."', 
										'".$_POST['surname']."', 
										'".$_POST['street']."',
										'".$_POST['city']."',
										'".$_POST['postcode']."', 
										'".$_POST['date_of_birth']."', 
										'".$_POST['marital_status']."', 
										'".$_POST['favorite_game']."', 
										'".$_POST['email']."',
										'".$_POST['password']."',
										'customer') ";
	//echo $sql;
	
	//hier word de sqlquery op de database afgevuurd en uitgevoerd.
	if($sql)
 {
 echo "<h3><center>Success</center></h3>";
 }
 else
 {
 echo "Error";
 }
 header("refresh:6; url=index.php");
 mysql_query($sql, $db) or die (mysql_error());
?>