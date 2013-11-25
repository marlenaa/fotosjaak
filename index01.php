<!DOCTYPE html>
<html>
	<head>
		<title>
			Mijn eerste site
		</title>
	</head>
	<body>
		<!-- Dit is commentaar en moet niet leesbaar zijn in het browserscherm -->
		<?php
			//echo "De manier om 1 regel van de scripttaal PHP uit te commentarieren<br>";
		/*
			echo "De manier om meerdere regels uit te commentarieren<br>";
			echo "Dit is een regel met de scripttaal PHP<br>";
		*/
		$voornaam = "Arjan";
		echo "Mijn voornaam is: ".$voornaam."<br>";
		echo 'Je kunt ook een string '.'omgeven met enkele quotes<br>';
		
		$getal1 = 7;
		$getal2 = 15;
		$som = $getal1 + $getal2;
		$verschil = $getal1 - $getal2;
		$product = $getal1 * $getal2;
		$quotient = round($getal1 / $getal2, 2);
		
		echo "<h3>Het optellen van twee getallen</h3>";
		echo $getal1." + ".$getal2." = ".$som."<br>";
		
		echo "<h3>Het aftrekken van twee getallen</h3>";
		echo $getal1." - ".$getal2." = ".$verschil."<br>";
		
		echo "<h3>Het vermenigvuldigen van twee getallen</h3>";
		echo $getal1." x ".$getal2." = ".$product."<br>";
		
		echo "<h3>Het quotient van twee getallen</h3>";
		echo $getal1." : ".$getal2." = ".$quotient."<br>";
		
		
		
		//echo '$getal1 + $getal2 = $getal3<br>';
		
		?>
		Hallo Wereld!<br>
		Dit is een nieuwe regel
	</body>
</html>