<center>

<?php
	// Als je methoden uit de LoginClass wilt gebruiken
	//  dan moet je deze class eerst toevoegen met require_once
	require_once("class/LoginClass.php");
	require_once("class/SessionClass.php");
	
	//Check of beide velden zijn ingevoerd	
	if ( !empty($_POST['email']) && !empty($_POST['password']))
	{
			
		if (LoginClass::check_if_email_password_exists($_POST['email'],
													   $_POST['password']))
		{
			if (LoginClass::check_if_account_is_activated($_POST['email'],
													   $_POST['password']))
													   
			{
				
			$user_object = LoginClass::find_user_by_email_password($_POST['email'],
																   $_POST['password']);
			/* Roep de static method find_user_by_email_password aan uit
                                 * de LoginClass. Deze method geeft precies 1 LoginClass-object
                                 * terug. Je kunt via dit object de properties opvragen zoals:
                                 * get_id(), get_email(), get_password, enz......
                                 * 
                                 * Geef dit object vervolgens mee aan de method login($userObject)
                                 * uit de SessionClass. 
                                 */                                                                  
                                $session->
                                        login(LoginClass::find_user_by_email_password($_POST['email'],
                                        											 $_POST['password']));
			switch ($_SESSION['userrole'])
			{
				case 'root':
					header("location:index.php?content=homepage_root");
				break;
				case 'admin':
					header("location:index.php?content=homepage_admin");			
				break;
				case 'customer':
					header("location:index.php?content=homepage_customer");
				break;			
				case 'photographer':
					header("location:index.php?content=homepage_photographer");
				break;	
				case 'developer':
					header("location:index.php?content=homepage_developer");
				break;	
				case 'coworker':
					header("location:index.php?content=coworker_homepage");
				break;	
			}
		}
		else 
			{
				echo"Uw account is nog niet door u geactiveerd. Check uw email voor de activatieprocedure.";
				header ("refresh:4; url=index.php?content=homepage");	
			}
		}
		else
		{
			//Blijkbaar is het record niet gevonden in de database
			echo "De ingevoerde combinatie van gebruikersnaam - wachtwoord is ons niet bekend. U wordt 	doorgestuurd naar de inlogpagina";
			header("refresh:4; url=index.php?content=login_form");
		}		
	}
	else
	{
		echo 'U heeft beide of een van beide velden niet ingevuld. 
			  U wordt doorgestuurd naar de inlogpagina';
		header("refresh:4;url=index.php?content=login_form");
	}

?>


</center>