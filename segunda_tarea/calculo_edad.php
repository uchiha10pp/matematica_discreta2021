<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Edad</title>
		<link rel="preload" href="style.css" as="style">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>CALCULO DE EDAD</h1>
		<div class="form">
			<form method='post' action=''>			
					<label class="la">Ingrese dia actual: </label>
					<input type='number' name='da' required=''>
					<br>
					<label class="la">Ingrese mes actual: </label>
					<input type='number' name='ma' required=''>
					<br>	
					<label class="la">Ingrese año actual: </label>
					<input type='number' name='aa' required=''>
					<br>	
					<label class="la">Ingrese dia de nacimiento: </label>
					<input type='number' name='dn' required=''>
					<br>
					<label>Ingrese mes de nacimiento: </label>
					<input type='number' name='mn' required=''>
					<br>	
					<label>Ingrese año de nacimiento: </label>
					<input type='number' name='an' required=''>
					<br>	
					<input type='submit' name='submit'>			
			</form>
		</div>
	</body>
</html>


<?php 
	

	if ($_POST) {
		$diaA = $_POST["da"];
		$mesA = $_POST["ma"];
		$anioA = $_POST["aa"];

		$diaN = $_POST["dn"];
		$mesN = $_POST["mn"];
		$anioN = $_POST["an"];		
		
		#CALENDARIO SOLAR
		$edad = $anioA - $anioN;

		if ($mesA > 12 || $mesN > 12 || $diaA > 31 || $diaN > 31) {
			echo "error al ingresar datos";
		}else {
			if ($mesN > $mesA) {
				$edad = $edad -1;
			} else {
				if ($mesN == $mesA) {
					if ($diaN < $diaA ||$diaN > $diaA) {
						$edad = $edad -1;
					}elseif ($diaN = $diaA) {
						echo "Happy Birthday";
					}

				}else {
					$edad = $edad -1;
				}			
			}
			echo "<br>Tú tienes $edad años pinpoy@ según el calendario solar";
		}

		

		
	}













/*

	calendario_sol = 365;
	
  MES SOLAR

	A_N           A_A            A_D   
	2000	      2021           365    = 1AÑO

                    21  * 2  = 42                     
                                                 


	MES LUNAR                             365   =  1AÑO    {25 FASES LUNARES}  2

	12 MESES LUNARES = 1AÑO     
	24               = 2
	36               = 3
	48               = 4

*/



?>



