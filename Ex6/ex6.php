<?php
    class Saludar{
        private $nombre;
        private $apellido;


        function __construct($nombre, $apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }
        function saludoFormal($horario){
            if(($horario >= "05:00:00") && ($horario <= "13:00:00")){
                return "Buenos dias" . " " . $this->nombre . " " . $this->apellido;
            }else if(($horario >= "13:00:00") && ($horario <= "21:00:00")){
                return "Buenas tardes:" . " " . $this->nombre . " " . $this->apellido;
            }else{
                return "Buenas noches" . " " . $this->nombre . " " . $this->apellido;
            }
        }

        function saludoInformal($horario){
            if(($horario >= "05:00:00") && ($horario <= "13:00:00")){
                return "¡". "Hola" . " " . $this->nombre . "!" . " " . "Que tengas un buen día";
            }else if(($horario >= "13:00:00") && ($horario <= "21:00:00")){
                return "¡". "Hola" . $this->nombre . "!" . " " . "Que tengas un buenas tardes";
            }else{
                return "¡". "Hola" . $this->nombre . "!" . " " . "Que descanses";
            }
        }
    }