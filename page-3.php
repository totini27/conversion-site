<!DOCTYPE html>
<html>
<head>
	
	<title>Page 3 [History]</title>
</head>
<body>
		<br>
	<td>1</td> <a href="Home.php">Home</a>
	<td>2</td> <a href="Conversion rate.php">Conversion Rate</a>
	<td>3</td> <a href="History.php">History</a>
	<br>
	<h2>History:</h2>
	<br>

	<?php
	define("filepath", "data.txt");

	$fileData = read();
	$data= json_decode($fileData);
	echo "<ol>";

	for ($i=0; $i < sizeof($data); $i++) { 
		echo "<li>" . $data[$i]->conversion ." ". $data[$i]->value ." ". $data[$i]->result . "</li>";
	}
	echo"</ol>";

	function read() {
		$file = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
			$fr = fread($file, $fz);
		}
		fclose($file);
		return $fr;
	}


	?>

</body>
</html>