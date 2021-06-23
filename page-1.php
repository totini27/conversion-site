<!DOCTYPE html>
<html>
<head>
	
	<title>Page 1 [Home]</title>
</head>
<body>
	<form action="form-submit.php" method="POST">
	<h1>Page 1 [Home]</h1>
	<h2>Conversion Site</h2>
	<br>

	<a href="Home">1. Home</a> <br>

	<a href="Conversion Rate">2. Conversion Rate</a> <br>

	<a href="History">3. History</a> <br>

	

		<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method = "POST">

		

				Converter:<br>
				<select name="Converter" required > 
					<option value="" name="" ></option> 
					<option value="Feet to Inch" name="Converter" >Feet to Inch</option> 
					<option value="KG to Gram" name="Converter" >KG to Gram</option> 
					<option value="Inch to Feet" name="Converter" >Inch to Feet</option> 
					<option value="Inch to CM" name="Converter" >Inch to CM</option> 
					<option value="Liter to Milliliters" name="Converter" >Liter to Milliliters</option> 
				</select>
			
			<br><br><br>

			






	
		</body>
</html>