<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre completo</title>
</head>
<body>
    
</body>
</html>

<?php



    class Saludar{
        function __construct(){}
        function saludoFormal($horario, $nombre, $apellido){
            if(($horario >= "05:00:00") && ($horario <= "13:00:00")){
                echo "Buenos dias" . " " . $nombre . " " . $apellido;
            }else if(($horario >= "13:00:00") && ($horario <= "21:00:00")){
                echo "Buenas tardes:" . " " . $nombre . " " . $apellido;
            }else{
                echo "Buenas noches" . " " . $nombre . " " . $apellido;
            }
        }

        function saludoInformal($horario, $nombre, $apellido){
            if(($horario >= "05:00:00") && ($horario <= "13:00:00")){
                echo "¡". "Hola" . $nombre . "!" . " " . "Que tengas un buen día";
            }else if(($horario >= "13:00:00") && ($horario <= "21:00:00")){
                echo "¡". "Hola" . $nombre . "!" . " " . "Que tengas un buenas tardes";
            }else{
                echo "¡". "Hola" . $nombre . "!" . " " . "Que descanses";
            }
        }


    }

    $saludar = new Saludar();
    echo "<h1>Saludo Formal para Ezequiel Pérez a las 9 hs</h1>";
    echo $saludar->saludoFormal("09:00:00", "Ezequiel", "Pérez");

    echo "<h1>Saludo Informal para Ezequiel Pérez a las 9 hs</h1>";
    echo $saludar->saludoInformal("09:00:00", "Ezequiel", "Pérez");


?>