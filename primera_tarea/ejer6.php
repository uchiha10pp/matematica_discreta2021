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
/*=====================================================
=            MÁXIMO COMÚN DIVISOR EUCLIDES            =
=====================================================*/

	if (isset($_POST["submit1"])) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		
		function mcd($num1, $num2) {
		 	$num1 = abs($num1);
		  	$num2 = abs($num2);

		  	if ($num2 == 0){ 
		  		$resultado = $num1;
		    }else{
		    	$resultado = mcd($num2, $num1 % $num2);
		    } 
		      
		    echo " Divición: $num1 % $num2<br>";
		    return $resultado;
		} 
				
		$resultado = mcd($num1, $num2);
		echo "<br>El MCD de $num1 y $num2 es: $resultado<br>";
	}

/*=====  End of MÁXIMO COMÚN DIVISOR EUCLIDES  ======*/
			
?>


<?php
/*
 function mcd($a, $b) {
  $a = abs($a);
  $b = abs($b);
  if ($b == 0) 
    $resultado = $a; 
    else 
      $resultado = mcd($b, $a%$b);
    echo " vale $a % $b es: $resultado<br>";
    return $resultado;
 } 
 $resultado = mcd(150,39);
 echo "el mcd es: $resultado<br>";


150 / 39      39 / 33      33 / 6      6 / 3         DIVIDENDO  /  DIVISOR
 33   3        6   1        3   5      0   2           RESIDUO    COCIENTE                       


 150 = (39 * 3) + 33                    DIVIDENDO = (DIVISOR * COCIENTE) + RESIDUO                      
  39 = (33 * 1) + 6                     RESIDUO = DIVIDENDO - (DIVISOR * COCIENTE)               
  33 = (6 * 5) + 3                                                            
   6 = (3 * 2) + 0                                                     

ref: https://www.youtube.com/watch?v=rG9nQe-7is8&t=195s
*/
?>