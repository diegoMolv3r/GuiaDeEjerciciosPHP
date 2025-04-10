<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatoria</title>
</head>
<body>
    
</body>
</html>

<?php
    // Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus valores.
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

    // a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
    function sumatoria_A($arrayParaSumar){
        $resultado = 0;
        for ($i = 0; $i < count($arrayParaSumar) ; $i++) {
            $resultado += $arrayParaSumar[$i];
        }
        return $resultado;
    }
    echo "Sumatoria con FOR: " . sumatoria_A($numeros) . "<br>";

    // b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
    function sumatoria_B($arrayParaSumar){
        $resultado = 0;
        foreach ($arrayParaSumar as $nro) {
            $resultado += $nro;
        }
        return $resultado;
    }
    echo "Sumatoria con FOR EACH: " . sumatoria_B($numeros) . "<br>";

    // c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while
    function sumatoria_C($arrayParaSumar){
        $resultado = 0;
        $i = 0;
        while (count($arrayParaSumar) > $i) {
            $resultado += ($arrayParaSumar[$i]);
            $i++;
        }
        return $resultado;
    }
    echo "Sumatoria con WHILE: " . sumatoria_C($numeros) . "<br>";



?>