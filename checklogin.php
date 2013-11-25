<center>

<?php


			//check of beide velden goed zijn ingevuld
	if(!empty($_POST['email']) && !empty($_POST['password']))
		{
			include ('connect_db.php');
			$query = "	SELECT * 
						FROM `users` 
						WHERE `email` 	= '".$_POST['email']."'
						AND `password` 	= '".$_POST['password']."'";
			//echo $query;
			
			$result = mysql_query($query, $db);
			if (mysql_num_rows($result) > 0)
			{
				$record = mysql_fetch_array($result);
				
				//var_dump($record); exit();
				echo $record['firstname']; 
				$_SESSION['id'] = $record['id'];
				$_SESSION['userrole'] = $record['userrole'];
				
				switch ($record['userrole'])
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
				}
			}
			else
			{
				echo 'de ingevoerde gegevens zijn bij ons niet bekend, u word doorgestuurd naar de inlogpagina.';
				header("refresh:4;url=index.php?content=login_form");
			}
		}
	else
		{
			echo 'U heeft een van de velden niet correct ingevuld. 
				  U word doorgestuurd naar de login pagina.';
			header("refresh:4;url=index.php?content=login_form");
		}



?>

</center>