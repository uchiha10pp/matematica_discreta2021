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
				<input type='submit' name='submit1'>			
		</form>
	</div>
</body>
</html>


<?php 
/*=============================================
=            MÍNIMO COMÚN MÚLTIPLO            =
=============================================*/
	
	if (isset($_POST["submit1"])) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];

		function mcm($n1, $n2) {
		 if ($n1 == 0 || $n2 == 0) {
		 	return 0;
		 }	 
		    $r = ($n1 * $n2) / gcd($n1, $n2);
		    return abs($r);
		}

		function gcd($a, $b) {
		    while ($b != 0) {
		        $t = $b;
		        $b = $a % $b;
		        $a = $t;
		    }
		    return $a;
		}

		echo "El MCM de $num1 y $num2 es: ".mcm($num1, $num2);
	}	

/*=====  End of MÍNIMO COMÚN MÚLTIPLO  ======*/
?>