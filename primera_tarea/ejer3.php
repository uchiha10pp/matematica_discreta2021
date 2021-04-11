<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio</title>
    <link rel="preload" href="style.css" as="style">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>ejercicio</h1>
	<div class="form">
		<form method='post' action=''>			
				<label>Ingrese Número: </label>
				<input type='number' name='num' required=''>
				<br>
				<label>Ingrese Rango: </label>
				<input type='number' name='ran' required=''>
				<br>			
				<input type='submit' name='submit'>			
		</form>
	</div>
</body>
</html>



<?php

	/*=====================================
	=            MULTIPLICIDAD            =
	=====================================*/

	if ($_POST) {
		$num = $_POST["num"];
		$ran = $_POST["ran"];

		

		if ($ran != 0 && $ran >= $num) {
			echo "Multiplos de $num: <br>";

			for ($i = 0; $i < $ran; $i++){
				echo "  $i";
			}
			echo "<br><br>";

			for ($i = 0; $i < $ran; $i++){
				$r = $num*$i;	
				echo "$num "."*"." $i "."="." $r<br>";
			}
		}else{
			echo "ERROR EN LA NUMERACIÓN";			
		}
	}
		
	/*=====  End of MULTIPLICIDAD  ======*/
?>