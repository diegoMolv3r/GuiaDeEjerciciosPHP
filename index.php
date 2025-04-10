<?php
    include_once("./Ex1/ex1.php");
    include_once("./Ex2/ex2.php");
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
            <h1 class="text-primary" >Diego Molver</h1>
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
        </section>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

