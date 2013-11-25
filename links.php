<style>
ul.a {list-style-type:circle;}

a:visited {color:##FFDEAD;} /* visited link */
a:hover {color:#FF00FF;}   /* mouse over link */
a:active {color:##FFDEAD;}  /* selected link */

</style>
<ul class="a">
	<li><a href="index.php?content=homepage">home</a></li>
	<?php 
	if (isset($_SESSION['userrole']))
	{
		echo "<li><a href='index.php?content=logout' >logout</a></li>";
		switch ($_SESSION['userrole'] )
		{
			case 'customer':
				echo "<li><a href='index.php?content=downloadpage'>download game </a></li>";
				echo "<li><a href='index.php?content=homepage_customer'>customer homepage </a></li>";
				echo "<li><a href='index.php?content=faq'>FAQ </a></li>";
				echo "<li><a href='index.php?content=cp'>Change Password </a></li>";
				
			break;
			
			case 'admin':
			break;
			
			case 'root':
			echo "<li><a href='index.php?content=bekijken'>Users </a></li>";
			break;
		}
	}
	else
	{
		echo"<li><a href='index.php?content=register_form' >register</a></li>
			 <li><a href='index.php?content=login_form' >login</a></li>";
	}
	?>
	
	
</ul>