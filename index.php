<?php
    include_once("./Ex1/ex1.php");
    include_once("./Ex2/ex2.php");
    include_once("./Ex3/ex3.php");
    include_once("./Ex4/ex4.php");
    include_once("./Ex5/ex5.php");
    include_once("./Ex6/ex6.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Ejercicios con PHP</title>
    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/1280px-Webysther_20160423_-_Elephpant.svg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center min-vh-100">
    <main class="container">
        <header>
            <h1 class="text-primary">Guia de Ejercicios PHP</h1>
            <h2 class="text-warning mb-0">Diego Molver</h2>
        </header>

        <section class="row justify-content-center">
            <article class="bg-light shadow-lg p-4 my-3 rounded">
                <header>
                    <h2 class="text-secondary">Ejercicio 1: Semáforo</h2>
                </header>
                <p>Cree una función llamada Semáforo, que recibe por parámetro un cólor cómo texto (<b>“ROJO”</b>,  <b>“AMARILLO”</span></b>, <b>”VERDE”</b>). <br>Dicha función devolverá el estado que corresponde: “frene”, “precaución”,“avance” o “estado desconocido” ante un caso no esperado.</p>

                <ol>
                    <li>Función semaforo_a($color): Resuelva la solución utilizando <b>IF ELSE</b></li>
                    <li>Función semaforo_b($color): Resuelva la solución utilizando <b>IF INLINE</b></li>
                    <li>Función semaforo_c($color): Resuelva la solución utilizando <b>SWITCH</b></li>
                </ol>

                <h3 class="text-info">Resuelto con IF ELSE</h3>
                <p>
                    Entra el valor 'Rojo' a la función. El semáforo devuelve: <span class="text-danger fw-bold"><?php echo semaforo_a("rojo"); ?></span> <br>
                    Entre el valor 'Amarillo' a la función. El semáforo devuelve: <span class="text-warning fw-bold"><?php echo semaforo_a("amarillo"); ?></span> <br>
                    Entre el valor 'Verde' a la función. El semáforo devuelve: <span class="text-success fw-bold"><?php echo semaforo_a("verde"); ?></span>
                </p>
                <h3 class="text-info">Resuelto con IF INLINE</h3>
                <p>
                    Entra el valor 'Rojo' a la función. El semáforo devuelve: <span class="text-danger fw-bold"><?php echo semaforo_b("rojo"); ?></span> <br>
                    Entre el valor 'Amarillo' a la función. El semáforo devuelve: <span class="text-warning fw-bold"><?php echo semaforo_b("amarillo"); ?></span> <br>
                    Entre el valor 'Verde' a la función. El semáforo devuelve: <span class="text-success fw-bold"><?php echo semaforo_b("verde"); ?></span>
                </p>
                <h3 class="text-info">Resuelto con SWITCH</h3>
                <p>
                    Entra el valor 'Rojo' a la función. El semáforo devuelve: <span class="text-danger fw-bold"><?php echo semaforo_c("rojo"); ?></span> <br>
                    Entre el valor 'Amarillo' a la función. El semáforo devuelve: <span class="text-warning fw-bold"><?php echo semaforo_c("amarillo"); ?></span> <br>
                    Entre el valor 'Verde' a la función. El semáforo devuelve: <span class="text-success fw-bold"><?php echo semaforo_c("verde"); ?></span>
                </p>
            </article>
            <article class="bg-light shadow-lg p-4 my-3 rounded">
                <header>
                    <h2 class="text-secondary">Ejercicio 2: Binomio Cuadrado Perfecto</h2>
                </header>

                <p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática: recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)²</p>
                <ol>
                    <li>Función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de potencia</li>
                    <li>Función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula desarrollada del binomio: a² + 2*a*b + b²</li>
                </ol>
                <h3 class="text-info">Resuelto con función pow()</h3>
                <p>Ingresa el valor a = 5 y b = 6 a la función binomioCuadradoPerfecto_a. La salida es: <?php echo binomioCuadradoPerfercto_a(5,6)?></p>
                <h3 class="text-info">Resuelto con fórmula (a+b)²</h3>
                <p>Ingresa el valor a = 5 y b = 6 a la función binomioCuadradoPerfecto_b. La salida es: <?php echo binomioCuadradoPerfercto_b(5,6)?></p>
            </article>
            <article class="bg-light shadow-lg p-4 my-3 rounded">
                <header>
                    <h2 class="text-secondary">Ejercicio 3: Concatenador de Textos</h2>
                </header>
                <p>Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva ambos textos concatenados como uno solo.</p>
                <h3 class="text-info">Resolución</h3>
                <p>Ingresan los valor $texto1 = "Hola" y $texto2 = "mundo". La salida es: <?= concatenar("Hola", "mundo")?>  </p>
            </article>
            <article class="bg-light shadow-lg p-4 my-3 rounded">
                <header>
                    <h2 class="text-secondary">Ejercicio 4: Incrementar</h2>
                </header>
                <p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de la función, el valor del parámetro haya sido incrementado en 1 (implementar pasaje de parámetros por referencia)</p>
                <h3 class="text-info">Explicación</h3>
                <p>Se crea la funcion incrementar(&$variable). Agregando el '&' antes del parámetro hacemos un pasaje de parámetro por referencias. Por lo que crear la variable $numero = 1 por la función incremetar($numero), al imprimirlo la salida es:
                    <?php $numero = 1; incrementar($numero); echo $numero;?>
                </p>
            </article>
            <article class="bg-light shadow-lg p-4 my-3 rounded">
                <header>
                    <h2 class="text-secondary">Ejercicio 5: Sumatoria</h2>
                </header>
                <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus valores.</p>
                    <ol>
                        <li>Función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for</li>
                        <li>Función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each</li>
                        <li>Función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</li>
                    </ol>
                <h3 class="text-info">Resuelto con FOR</h3>
                <p>Creamos el array $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9). Lo pasamos por la sumatoria_A($numeros) y la salida es: <?php $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9); echo sumatoria_A($numeros)?></p>
                <h3 class="text-info">Resuelto con FOR EACH</h3>
                <p>Creamos el array $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9). Lo pasamos por la sumatoria_B($numeros) y la salida es: <?php echo sumatoria_B($numeros)?></p>
                <h3 class="text-info">Resuelto con WHILE</h3>
                <p>Creamos el array $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9). Lo pasamos por la sumatoria_C($numeros) y la salida es: <?php echo sumatoria_C($numeros)?></p>
            </article>

            <article class="bg-light shadow-lg p-4 my-3 rounded">
                <header>
                    <h2 class="text-secondary">Ejercicio 6: Saludar con Nombre Personalizado</h2>
                </header>
                <p>
                    Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una persona. Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder concatenado al nombre un prefijo dependiendo del horario:
                </p>
                    <ul>
                        <li>05 hs a 13 hs “Buenos días”</li>
                        <li>13 hs a 21 hs “Buenas tardes”</li>
                        <li>21 hs a 05 hs “Buenas noches”</li>
                    </ul>
                <p>
                    Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ... (saludo
                    perteneciente al horario)”.
                </p>

                <h3 class="text-info">Saludo Informal</h3>
                <p>Para clase instanciada para Ezequiel Pérez, y parámetro 9 hs la salida es: <b><?php $saludar = new saludar("Ezequiel", "Perez");  echo $saludar->saludoInformal("09:00:00");?></b></p>
                <p>Para clase instanciada para Ezequiel Pérez, y parámetro 14 hs la salida es: <b><?= $saludar->saludoInformal("14:00:00");?></b></p>
                <p>Para clase instanciada para Ezequiel Pérez, y parámetro 23 hs la salida es: <b><?= $saludar->saludoInformal("23:00:00");?></b></p>
                <h3 class="text-info">Saludo Formal</h3>
                <p>Para clase instanciada para Ezequiel Pérez, y parámetro 9 hs la salida es: <b><?php echo $saludar->saludoFormal("09:00:00");?></b></p>
                <p>Para clase instanciada para Ezequiel Pérez, y parámetro 14 hs la salida es: <b><?php echo $saludar->saludoFormal("14:00:00");?></b></p>
                <p>Para clase instanciada para Ezequiel Pérez, y parámetro 23 hs la salida es: <b><?php echo $saludar->saludoFormal("23:00:00");?></b></p>
            </article>
        </section>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

