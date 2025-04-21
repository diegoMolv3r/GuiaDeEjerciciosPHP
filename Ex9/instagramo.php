<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagramo!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center flex-column">

<div class="container mt-5">
    <div class="card shadow-sm rounded-4 mx-auto" style="max-width: 500px;">
        <form action="./instagramo.php" enctype="multipart/form-data" method="post" class="card-body p-4">
            <div class="mb-3">
                <label for="nombre" class="form-label">Titulo de la Imagen</label>
                <input id="nombre" type="text" class="form-control" name="titulo" placeholder="Titulo">
            </div>

            <div class="mb-3">
                <label for="archivo" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="archivo" name="archivo">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>

<?php
function guardarImagen($name){
    if(isset($_FILES[$name]) && $_FILES[$name]["error"] === UPLOAD_ERR_OK){
        $nombreArchivoTmp = $_FILES[$name]["tmp_name"];
        $nombreArchivoFinal = basename($_FILES[$name]['name']);
        $destino = 'imagenes/' . $nombreArchivoFinal;

        if(move_uploaded_file($nombreArchivoTmp, $destino)){
            return "<img height='350px' alt='$nombreArchivoTmp' src='$destino'>";
        } else {
            return "No se pudo subir el archivo";
        }
    }

    return "No se recibió ningún archivo.";
}
    function mostrarImagenes($directorio, $titulo){
        $carpeta = scandir($directorio);
        sort($carpeta);

        foreach ($carpeta as $archivo) {
            if ($archivo != "." && $archivo != "..")
                echo "<div class='d-flex flex-column'>" . "<h2>" . $titulo . "</h2>" .
        "<img src='$directorio$archivo' style='width:200px; height: 200px; object-fit: cover;'>";

        }
    }


    guardarImagen("archivo");

    echo "<div class='d-flex flex-row'>" . mostrarImagenes("imagenes/", $_POST['titulo']) . "</div>";



?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>


