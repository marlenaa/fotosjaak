<?php
require_once("class/LoginClass.php");
	if(isset($_POST['submit']))
	{
		//echo"er is op de knop gedrukt ";
		if(!strcmp($_POST[ 'password'], $_POST[ 'password-check']))
		{
			
		}
		else {
			echo "de ingevoerde wachtwoorden komen niet overeen.";
		}
		header("refresh:5;url=index.php?content=activation&email=".$_POST['email']."&password=".$_POST['old-password']);
	}
	else
	{
		
	
	if(LoginClass::check_if_email_exists($_GET['email'], $_GET['password']))
	{
?>


<center>
<form action='index.php?content=activation' method='post'>
	<table class='simple'>
		<tr>
			
		Wachtwoord aanmaken:  <br>
		
		</tr>
		<tr>
		<tr>
			
		<td>Nieuw wachtwoord(max 12) </td>
		<td><input type='text' name='password' size= '12' maxlength='12' /></td>
		
		</tr>
		<tr>
			
		<td>Nieuw wachtwoord(check) </td>
		<td><input type='text' name='password-check' size= '12' maxlength='12' /></td>
		
		</tr>
		<tr>
			
		<td></td>
		<td><input type='submit' value= 'verstuur' name='submit' />
			<input type='hidden' name='email' value='<?php $_GET['email']; ?>'/>
			<input type='hidden' name='old-password' value='<?php $_GET['password']; ?>'/>
		</td>
		
		
		</tr>
	</table>
	
	
	
</form>
</center>
<?php
	}
	else 
	{
		echo "U heeft geen rechten op deze pagina. u word doorgestuurd naar de homepage" ;
		header("refresh:40;url=index.php?content=homepage");			
	}
}
?>