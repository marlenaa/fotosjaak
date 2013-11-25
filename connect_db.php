<?php

	//hiermee word contact gemaakt met de mysql server
	$db = mysql_connect("localhost", "root", "");
	
	//hiermee kies je een database.
	mysql_select_db("am1a-fotosjaak", $db) or die ("database is niet gevonden");
	
?>