<?php
    // a) función semaforo_a($color): Resuelva la solución utilizando if else
    function semaforo_a($color){
        if($color == "rojo"){
            echo "Frene";
        }elseif ($color == "amarillo"){
            echo "Precaución";
        }elseif ($color == "verde"){
            echo "Avance";
        }else{
            echo "Estado Desconocido";
        }
    }

    // b) función semaforo_b($color): Resuelva la solución utilizando if inline (return?:)
    function semaforo_b($color){
        echo ($color == "rojo") ? "Frene" : (($color == "amarillo") ? "Precaución" : (($color == "verde") ? "Avance" : "Estado Desconocido"));
    }


    // c) función semaforo_c($color): Resuelva la solución utilizando switch
    function semaforo_c($color){
        switch($color){
            case "rojo":
                echo "Frene";
                break;
            case "amarillo":
                echo "Precaucion";
                break;
            case "verde":
                echo "Avance";
                break;
            default:
                echo "Estado Desconocido";
                break;
        }
    }
?>