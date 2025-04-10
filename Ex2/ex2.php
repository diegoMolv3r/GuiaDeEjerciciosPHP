<?php
    // Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
    // recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)
    // 2
    // a) función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
    // potencia
    // b) función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
    // desarrollada del binomio: a
    // 2 + 2*a*b + b
    // 2

    function binomioCuadradoPerfercto_a($valor1, $valor2){
        return pow(($valor1+$valor2),2);
    }

    function binomioCuadradoPerfercto_b($nro1, $nro2){
        return pow($nro1, 2) + 2*$nro1*$nro2 + pow($nro2, 2);
    }