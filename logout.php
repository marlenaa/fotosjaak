<?php

	require_once("class/SessionClass.php");
	
	//als je een method wilt gebruiken uit de sessionclass, dan moet je het bestand waar de classdefinitie in staat toevoegen aan dit bestand gebruik daarvoor require_once
	
	
	//we roepen de method logout() aan in de sessionclass
	$session->logout();
	
	
	//we gaan 
	header("location:index.php?content=homepage");


?>