<?php
if (!isset($_SESSION['id']))//dan ben je ingelogd
	{
		echo "U bent niet ingelogd en daarom mag u deze pagina niet bekijken";
		header("refresh:4;url=index.php?content=homepage");
		exit();
	}
	else if ( !in_array($_SESSION['userrole'], $userrole))
	{
		echo "U bent wel ingelogd, maar niet bevoegd om deze pagina te bekijken.
				U word doorgestuurdnaar de homepage";
		header("refresh:5; url=index.php?content=homepage_".$_SESSION['userrole']);
		exit();
	}
?>