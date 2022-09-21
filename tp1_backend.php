<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PD</title>
</head>
<body>
    <h1>Trabajo Practico 1</h1>
    <br>
    <hr>
    <h6>Punto 1</h6>
    <?php
    echo "Hola mundo";
    ?>
    <br>
    <hr>
    <h6>Punto 2</h6>
    <?php
    $mensaje = "Hola Mundo";
    echo $mensaje;
    ?>
    <br>
    <hr>
    <h6>Punto 3</h6>
    <?php
    $pan = 500;
    $yerba = 500;
    $total = $pan + $yerba;
    echo $total;
    ?>
    <br>
    <hr>
    <?php
    echo $pan - $yerba;
    ?>
    <br>
    <hr>
    <?php
    echo $pan * $yerba;
    ?>
    <br>
    <hr>
    <?php
    echo $pan / $yerba;
    ?>
    <br>
    <hr>
    <?php
    echo $pan % $yerba;
    ?>
    <br>
    <hr>
    <h6>Punto 4</h6>
    <?php
    $gradosc = 20;
    $formula1 = 9/5;
    $formula2 = 32;
    $resultado = ($gradosc * $formula1) + $formula2;
    echo $resultado;
    ?>
    <br>
    <hr>
    <h6>Punto 5</h6>
    <?php
    $base = 18;
    $altura = 12;
    $cantidad = 2;
    $perimetro = $cantidad * $base + $cantidad * $altura;
    echo $perimetro;
    ?>
    <br>
    <hr>
    <?php
    echo $base * $altura;
    ?>
    <br>
    <hr>
    <h6>Punto 5:B</h6>
    <?php
    $diametro = 60;
    $pi = M_PI;
    $perimetroc = $pi * $diametro;
    echo $perimetroc;
    ?>
    <br>
    <hr>
    <?php
    $radio = 900;
    $area = $pi * $radio;
    echo $area;
    ?>
    <br>
    <hr>

</body>
</html>