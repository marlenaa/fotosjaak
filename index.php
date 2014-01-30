<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			een site :D
		</title>
			<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  			<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
			
		 <link href="index.css" rel="stylesheet" type="text/css"/>
	
	</head>


			
	<body>
	
	
	<div id="container">	
			<div id="header"> </div>		
	</div>
	
	<div id="container_1">
			<div id="links">
				<?php include("links.php"); ?>
			</div>
			<div id="content"> 
				<?php 
						 if (isset($_GET['content']))
						{
							include($_GET['content'].".php");
						}
						else
						{
							include("homepage.php");
						}
				?>
			</div>
				
	</div>
	<div id="container_2">
			<div id="footer"> -Contact|Disclaimer|Copyright|Tools|Privacy|Advertisement- </div>
	</div>
	
	</body>
</html>
=======
<?php 
	
	echo "Dit is mijn eerste regel...";
	echo "Dit is mijn 2e regel...";
	echo "Dit is mijn derde regel...";

?>
>>>>>>> 0acb19d333c619af449e852111e359b3c9d4c9cf
