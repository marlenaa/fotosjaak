<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			een site :D
		</title>
			
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