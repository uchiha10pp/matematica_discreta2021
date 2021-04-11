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
    /*=============================================
    =            NÚMERO PRIMO            =
    =============================================*/


    function esPrimo($numero): bool{
        $contador = 0;

        for($i = 1; $i <= $numero; $i++){
            if($numero%$i==0){
                $contador++;
            }
        }

        if($contador==2){
            return true;
        }else{
            return false;
        }
    }

    if ($_POST) {
        $num = $_POST["num"];

        if(esPrimo($num)){
            echo "El número $num es primo";
        }else{
            echo "Este número $num no es primo";
        }
    }
    
    /*=====  End of NÚMERO PRIMO  ======*/
?>