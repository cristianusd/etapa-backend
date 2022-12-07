<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Mostrar por pantalla los numeros del 1 al 100.</p>
    <br>
    <?php

    for ($i=1; $i <= 100; $i++) { 
        echo " $i ";
    }
    ?>
    <br>
    <h2>Ejercicio 2</h2>
    <p>Mostrar por pantalla los numeros del 100 al 1.</p>
    <br>
    <?php
    for ($i=100; $i >= 1; $i--) { 
        echo "$i";
    }
    ?>
    <br>
    <h2>Ejercicio 3</h2>
    <p>Mostrar los números pares del 1 al 100.</p>
    <br>
    <?php
    $s=2;
    while ($s <= 100) {
        echo"$s";
        $s=$s+2;
    }
    ?>
    <br>
    <h2>Ejercicio 4</h2>
    <p>Mostrar los números impares del 1 al 100.</p>
    <br>
    <?php
    $a=1;
    while ($a <= 100) {
        echo"$a";
        $a=$a+2;
    }
    ?>
    <br>
    <h2>Ejercicio 5</h2>
    <p>Mostrar la suma de los números de 1 a 20.</p>
    <br>
    <?php
    $suma=0;
    for ($i=1; $i <= 20; $i++) { 
        $suma += $i;
        echo "$suma";
    }
    ?>
    <br>
    <h2>Ejercicio 6</h2>
    <p>Mostrar la suma de números pares de 1 a 20.</p>
    <br>
    <?php
    $suma=0;
    for ($i=1; $i <= 20; $i++) { 
    while ($i%2==0) {
     $suma += $i;
     $i++;

    }
    }
    ?>



    
</body>
</html>