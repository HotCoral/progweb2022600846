<?php

$x = isset($_GET['x']) ? (float) $_GET['x'] : 1; 
$y = isset($_GET['y']) ? (float) $_GET['y'] : 1; 

// a) 
$resul_a = (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));


// b) 
$resul_b = ((1 / 2) * $x + (3 + $x / 2) * (2 * $x * $x)) / ((2 + 3) * $x);


// c) 
$resul_c = (sqrt((2 * $x) ** 2 + (3 ** 2)) / 5) + sqrt($x ** 2);


// d) 
$resul_d = ((1/2) + (1/4) + (1/8) * (pow(3 * $x, 0.5))) / ((sqrt($x) / 2) + (3 * ($x ** 2) / 4));


// e) 
$resul_e = sqrt(($x**2 / 2) + (1 / sqrt($x))) / (3 + (1/2) * ($x**3));

?>

<!DOCTYPE html>
<html>
    <head><h1>Problemas matematicos</h1></head>
    <body>
        <img src="ejer1.png">
        <?php echo "Resultado a) $resul_a ";?><br>
<br>
<br>
        <img src="ejer2.png">
         <?php echo "Resultado b) $resul_b";?><br>
<br>
<br>
         <img src="ejer3.png">
         <?php echo "Resultado c) $resul_c";?><br>
<br>
<br>
         <img src="ejer4.png">
         <?php echo "Resultado d) $resul_d";?><br>
<br>
<br>
         <img src="ejer5.png">
         <?php echo "Resultado e) $resul_e";?><br>

         

    </body>
</html>