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
				<label>Ingrese 1° Número: </label>
				<input type='number' name='num1' required=''>
				<br>
				<label>Ingrese 2° Número: </label>
				<input type='number' name='num2' required=''>
				<br>			
				<input type='submit' name='submit'>			
		</form>
	</div>
</body>
</html>


<?php

	/*=================================
	=            DIVISIBLE            =
	=================================*/

	if ($_POST) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];

		if ($num1%$num2==0) {
			echo "El número $num1 es divisible entre $num2";
			echo "<br>El número $num2 es un divisor de $num1";
		}else {
			echo "El número $num1 no es divisible entre $num2";
			echo "<br>Tampoco el número $num2 es un divisor de $num1";
		}
	}	


	/*=====  End of DIVISIBLE  ======*/
?>