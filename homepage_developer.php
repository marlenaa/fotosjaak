<?php 
	$userrole = array('developer', 'root');
	include("security.php");
?>

<center>
<h2>
Dit is de developer homepage.<br>
uw id is: <?php  echo $_SESSION['id']; ?><br>
uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>
</h2>
</center>