<!DOCTYPE html>
<html lang="es">
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

/*===========================================
=            IDENTIDAD DE BEZOUT            =
===========================================*/
	
	if (isset($_POST["submit1"])) {
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$temp = $_POST["num1"];

		function mcd($num1, $num2, $temp) {  // 78 30
		 	$num1 = abs($num1);
		  	$num2 = abs($num2);
		  	$temp = abs($num1);

		  	@$div = $num1/$num2;	//matando el error de divir entre zero
		  	$div = (int) $div;

		  	if ($num2 == 0 && $t2 = $temp - ($num2 * $div)){ 
		  		$resultado = $num1;
		    }else{		    		    	
		    	$resultado = mcd($num2, $num1 % $num2, $num1); 	
		    	$t2 = $num1 % $num2;	   	  
		    }                                            
 
		    echo "$t2 = $temp - ($num2 * $div)<br>";
		    return $resultado;                   		    
		} 
				
		$resultado = mcd($num1, $num2, $temp);
		echo "<br>El MCD de $num1 y $num2 es: $resultado<br>";

	}

// 30 18
// $div = $num1 / $num2;    // $div = (int) $div;
// RESIDUO = DIVIDENDO - (DIVISOR * COCIENTE)
// $num2 = $temp - ($num1 * $div)
// 18    =   78  - (30 * 2)

/*=====  End of IDENTIDAD DE BEZOUT  ======*/

?>

<?php 
/*
	DIVIDENDO = (DIVISOR * COCIENTE) + RESIDUO
	RESIDUO = DIVIDENDO - (DIVISOR * COCIENTE)

	78 / 30      30 / 18      18 / 12      12 / 6  
    18   2       12   1        6   1        0   2    


    APLICANDO EL RESIDUO 
    RESIDUO = DIVIDENDO - (DIVISOR * COCIENTE)
	
	18 = 78 - (30 * 2)
	12 = 30 - (18 * 1)
	 6 = 18 - (12 * 1)
	 0 = 12 -(6 *2)

	SUSTITUIR VALORES PARA CONSEGUIR LA COMBINACIÓN LINEAL

	6 = 18 - (12 * 1)
	  = 18 - ((30 - (18 * 1)) * (1))           // - (18 * 1)
	  = 18 - (30 - 18)
	  = (2 * 18) - 30                           // 78 - (30 * 2)  
	  = 2(78 - (30 * 2)) - 30
	  = (2 * 78) - 2(30 * 2) - 30
	  = (2 * 78) - (4 * 30) - 30
	  = (2 * 78) - (5 * 30)

	  => s = 2   y  t = 5

	------------------------------------------------------------------------------
	
	150 / 39      39 / 33      33 / 6      6 / 3         DIVIDENDO  /  DIVISOR
	33   3        6   1        3   5      0   2          RESIDUO    COCIENTE                       


	150 = (39 * 3) + 33             DIVIDENDO = (DIVISOR * COCIENTE) + RESIDUO                              
	39 = (33 * 1) + 6               RESIDUO = DIVIDENDO - (DIVISOR * COCIENTE) 
	33 = (6 * 5) + 3                                                            
	6 = (3 * 2) + 0

    APLICANDO EL RESIDUO 
    RESIDUO = DIVIDENDO - (DIVISOR * COCIENTE)

    33 = 150 - (39 * 3)
     6 = 39 - (33 * 1)
     3 = 33 - (6 * 5)

	SUSTITUIR VALORES PARA CONSEGUIR LA COMBINACIÓN LINEAL
	
	3 = 33 - (6 * 5)
	  = 33 - ((39 - (33 . 1)) * 5)
	  = 33 - (39 - 33) * 5
	  = 33 - (39 * 5) + (33 * 5)
	  = (33 * 6) - (39 * 5)
	  = (150 - (39 * 3)) * 6 - (39 * 5)
	  = (150 * 6) - (39 * 18) - (39 * 5)
	  = (150 * 6) - (39 * 23)

	  ==> s = 6   y  t = 23
*/

?>
	
