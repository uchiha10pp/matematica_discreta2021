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
                <input type='submit' name='submit'>            
        </form>
    </div>
</body>
</html>


<?php 

	/*=====================================
	=            NÚMERO ENTERO            =
	=====================================*/

	if ($_POST) {
		$num = $_POST["num"];		

		if($num >= -9 && $num <= 9)
		{
			echo "El número $num es de Un dígito";
		}else {
			if ($num >= -99 && $num <= 99) {
			echo "El número $num es de Dos dígitos";
			}else {				
				if ($num >= -999 && $num <= 999) {
				echo "El número $num es de Tres dígitos";
				}else {				
					if ($num >= -9999 && $num <= 9999) {
					echo "El número $num es de Cuatro dígitos";
					}else {
						echo "Este número $num tiene más de Cuatro dígitos";
					}
				}
			}		
		}
	}

	/*=====  End of NÚMERO ENTERO  ======*/
?>
	
