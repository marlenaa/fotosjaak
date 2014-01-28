<?php 
	$userrole = array('photographer', 'root');
	include("security.php");
?>

<center>
<h2>
Dit is de photographer homepage.<br>
uw id is: <?php  echo $_SESSION['id']; ?><br>
uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>
</h2>
</center>