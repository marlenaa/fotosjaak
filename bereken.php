<?php
	if ($_POST["bewerking"] == "1")
	{
		$bewerking = "opgeteld";
		$uitkomst = $_POST["getal1"] + $_POST["getal2"];
		$teken = " + ";
	}
	else if ($_POST["bewerking"] == "2")
	{
		$bewerking = "Afgetrokken";
		$uitkomst = $_POST["getal1"] - $_POST["getal2"];
		$teken = " - ";
	}
	else if ($_POST["bewerking"] == "3")
	{
		$bewerking = "vermenigvuldigd";
		$uitkomst = $_POST["getal1"] * $_POST["getal2"];
		$teken = " x ";
	}
	else
	{
		$bewerking = "gedeeld";
		$uitkomst = round($_POST["getal1"] / $_POST["getal2"],2);
		$teken = " : ";
	}
?>

<h3>De twee getallen worden <?php echo $bewerking; ?></h3>
</html>
<?php
	echo $_POST["getal1"].$teken.$_POST["getal2"]." = ".$uitkomst."<br>";
?>
<a href="index..html">opnieuw</a>