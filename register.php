<?php

	require_once("class/LoginClass.php");

	if(LoginClass::check_if_email_exists($_POST['email']))
	{
		//Het email bestaat al terugsturen naar de registratie pagina
		echo"Het ingevulde email adres bestaat al,<br> U word terug gestuurd naar de registratie pagina.";
		header("refresh:5;url=index.php?content=register_form");
	}
	else
	{
		LoginClass::insert_into_loginClass($_POST);
		
		//Schrijf weg naar database
		echo("u bent succesvol geregistreerd. U ontvangt een activatielink in uw email, <br>
			na het activeren van uw account kunt u inloggen.");
			header("refresh:5;url=index.php?content=login_form");
	}

/*
	//hiermee kan je zien wat er is verstuurd
			//var_dump($_POST);
			
	
	//hiermee word contact gemaakt met de mysql server
	$db = mysql_connect("localhost", "root", "");
	
	//hiermee kies je een database.
	mysql_select_db("am1a", $db) or die ("database is niet gevonden");
	
	$sql = "INSERT INTO `user` (		`id`, 
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
 header("refresh:6; url=index.php");*/
?>