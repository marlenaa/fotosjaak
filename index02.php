<!DOCTYPE html>
<html>
	<head>
		<title>
			Mijn eerste site
		</title>
	</head>
	<body>
		<h3>Voer hieronder twee getallen in tussen 0 en 999</h3>
		<form action="bereken.php" method="post">								 
			<table border="1">
				<tr>
					<td>Eerste getal:</td>
					<td>
						<input type="text"
							   size="8"
							   placeholder="eerste getal"
							   maxlength="3"
							   name="getal1" />
					</td>
				</tr>
				<tr>
					<td>Tweede getal:</td>
					<td>
						<input type="text"
							   size="8"
							   placeholder="tweede getal"
							   maxlength="3"
							   name="getal2"/>
					</td>
				</tr>
				<tr>
					
					<td>
						<select name="bewerking">
							<option value="1">+</option>
							<option value="2">-</option>
							<option value="3">*</option>
							<option value="4">/</option>						
						</select>
					</td>
					<td><input type="submit" /></td>
				
			</table>
		</form>
	</body>
</html>