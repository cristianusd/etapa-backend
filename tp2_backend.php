<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Ejercicios</title>
</head>
<body>
    <h1>Probando la clase 3</h1>
    <br>
    <hr>
    <h6>Punto 1</h6>
    <?php 
    $a = 9;
    $b = 1;
    
    if ($a > $b) {
        echo "El $a es un numero positivo.";
    }
    ?>
    <br>
    <hr>
    <h6>Punto 2</h6>
    <?php
    $d = 9;
    $e = 1;
    $f = 10;

    if ($d > $e & $a < $f) {
        echo "El $d es mayor a $e y menor a $f.";
    }
    ?>
    <br> 
    <hr>
    <h6>Punto 3</h6>
    <?php
    $m = 500;
    $o = 10;

    if ($m > $o) {
        echo "El $m es mayor a $o.";
    }
    ?>
    <hr>
    <h6>Punto 4</h6>
    <?php
    $numero1 = 50;
    $numero2 = 25;
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $resto = $numero1 % $numero2;

    if ($numero1 > $numero2) {
        echo "Resultado de suma $suma y resultado de resta $resta";
    } 
    elseif ($numero1 < $numero2){
        echo "Resultado de multiplicacion $multiplicacion, resultado de division $division y resultado de resto $resto";
    }
    else {
    echo "Los numeros ingresados son iguales";
    }
    ?>
</body>
</html>