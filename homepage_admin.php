<?php 
	$userrole = array('root', 'admin');
	include("security.php");
?>

<center>
<h2>
Dit is de admin homepage.<br>
uw id is: <?php  echo $_SESSION['id']; ?><br>
uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>
</h2>
</center>