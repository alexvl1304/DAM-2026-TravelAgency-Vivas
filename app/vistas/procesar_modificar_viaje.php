<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificar viaje</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/procesar-card.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main>
        <div class="card-texto">
            <?php
            $id = $_POST["id"];
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $fecha_inicio = $_POST["fecha_inicio"];
            $fecha_fin = $_POST["fecha_fin"];
            $precio = $_POST["precio"];
            $tipo = $_POST["tipo"];
            $plazas = $_POST["plazas"];
            $url_imagen = $_POST["url_imagen"];
            $destacado = isset($_POST["destacado"]) ? 1 : 0;

            include("../vistas/conexion_bd.php");

            $stmt = $conn->prepare("UPDATE viajes SET titulo=?, precio=?, descripcion=?, fecha_inicio=?, fecha_fin=?, destacado=?, tipo=?, plazas=?, url_imagen=? WHERE id=?");
            $stmt->bind_param("sisssisisi", $titulo, $precio, $descripcion, $fecha_inicio, $fecha_fin, $destacado, $tipo, $plazas, $url_imagen, $id);

            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "Registro actualizado";
            } else {
                echo "Hubo un error al actualizar (puede que haya introducido los mismos campos)";
            }

            $conn->close();
            ?>

            <a class="boton-volver" href="../public/viajes.php">
                Volver
            </a>
        </div>



    </main>

    <?php include("../vistas/footer.php"); ?>

</body>

</html>