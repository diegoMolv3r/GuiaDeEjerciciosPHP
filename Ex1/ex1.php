<?php
    // a) función semaforo_a($color): Resuelva la solución utilizando if else
    function semaforo_a($color){
        if($color == "rojo"){
            return "Frene";
        }elseif ($color == "amarillo"){
            return "Precaución";
        }elseif ($color == "verde"){
            return "Avance";
        }else{
            return "Estado Desconocido";
        }
    }
    // b) función semaforo_b($color): Resuelva la solución utilizando if inline (return?:)
    function semaforo_b($color){
        return ($color == "rojo") ? "Frene" : (($color == "amarillo") ? "Precaución" : (($color == "verde") ? "Avance" : "Estado Desconocido"));
    }
    // c) función semaforo_c($color): Resuelva la solución utilizando switch
    function semaforo_c($color){
        switch($color){
            case "rojo":
                return "Frene";
                break;
            case "amarillo":
                return "Precaucion";
                break;
            case "verde":
                return "Avance";
                break;
            default:
                return "Estado Desconocido";
                break;
        }
    }