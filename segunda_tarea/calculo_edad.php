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

  
		#MARTE = 1,88 años  365*1.88 =  686.688 días       (365)(14)/ 225 (venus) 
		$marte = ($edad / 1.88);
		round($marte, 3);
		echo "<br>Tú tienes $marte años pinpoy@ si estuvieras en marte";

		#JÚPITER = 11,86 años   4,331.983
		$jupiter = ($edad / 11.86);
		round($jupiter, 3); 
		echo "<br>Tú tienes $jupiter años pinpoy@ si estuvieras en jupiter";

		#URANO = 84,01 años 
		$urano = ($edad / 84.01); 
		round($urano, 3); 
		echo "<br>Tú tienes $urano años pinpoy@ si estuvieras en urano";

		#NEPTUNO = 164,79 años
		$neptuno = ($edad / 164.79);  
		round($neptuno,3); 
		echo "<br>Tú tienes $neptuno años pinpoy@ si estuvieras en neptuno";

		#PLUTÓN 248,59 años 
		$pluton = ($edad / 248.59); 
		round($pluton, 3); 
		echo "<br>Tú tienes $pluton años pinpoy@ si estuvieras en pluton";

		#MERCURIO = 87,97 días   || 0.240 año
		$mercurio = ($edad * 365.26)/87.97;
		round($mercurio, 3); 
		echo "<br>Tú tienes $mercurio años pinpoy@ si estuvieras en mercurio";

		#VENUS = 224,7 días     || 0.615 año
		$venus = ($edad * 365.26)/224.7; 
		round($venus, 3); 
		echo "<br>Tú tienes $venus años pinpoy@ si estuvieras en venus";




		#MAYA                       13*28 = 364
		$maya = ($edad*365.26)/364;
		round($maya, 3);
		echo "<br>Tú tienes $maya años pinpoy@ en el calendario maya";


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

	MARTE = 1,88 años                           686.688  Días          marte * edad = 
	JÚPITER = 11,86 años                      4,331.983       
	SATURNO = 29,46 años                     10,760.559        
	URANO = 84,01 años                       30,685.492
	NEPTUNO = 164,79 años                    60,191.195
	PLUTÓN 248,59 años                       90,799.983

	MERCURIO = 87,97 días                         87/365             0.240   
	VENUS = 224,7 días                         224.7/365.26          0.615
	TIERRA = 365,26 días                           1año

182.63/
	A_A - A_N = EDAD
	2021 - 2000 = 21 * 365  =       

*/



?>



