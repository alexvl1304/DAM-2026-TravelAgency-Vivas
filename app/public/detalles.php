<!DOCTYPE html>
<html lang="es">

<?php
$id = $_GET['id'] ?? null;

if ($id == null) {
    header("Location: no-viaje.php");
}

//crear conexion
include("../vistas/conexion_bd.php");

$sql = "SELECT * FROM viajes WHERE id = " . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $viaje = $result->fetch_assoc();
} else {
    header("Location: no-viaje.php");
}

$conn->close();
?>

<head>
    <meta charset="UTF-8">
    <title>
        <?php
        echo $viaje["titulo"];
        ?>
    </title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/detalles-viaje.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main>

        <div class="detalle-container">

            <img class="detalle-img" src="../assets/imagenes-viajes/<?php echo $viaje["url_imagen"] ?>"
                alt="Imagen del viaje">

            <div class="detalle-body">

                <h1 class="detalle-titulo"><?php echo $viaje["titulo"] ?></h1>

                <div class="detalle-precio"><?php echo ($viaje["precio"] . " €") ?></div>

                <?php if ($viaje["destacado"] == 1) { ?>

                    <div class="destacado">-- Viaje destacado --</div>

                <?php } ?>

                <p class="detalle-descripcion">
                    <?php echo $viaje["descripcion"] ?>
                </p>

                <div class="detalle-grid">
                    <div><strong>Fecha inicio:</strong> <?php
                    $fecha = $viaje["fecha_inicio"];
                    $fechaObj = new DateTime($fecha);
                    echo $fechaObj->format('d F Y'); // salida: 29 January 2026
                    ?></div>
                    <div><strong>Fecha final:</strong> <?php
                    $fecha = $viaje["fecha_fin"];
                    $fechaObj = new DateTime($fecha);
                    echo $fechaObj->format('d F Y'); // salida: 29 January 2026
                    ?></div>
                    <div><strong>Tipo:</strong> <?php echo $viaje["tipo"] ?></div>
                    <div><strong>Plazas:</strong> <?php echo $viaje["plazas"] ?> disponibles</div>
                </div>

            </div>
        </div>

    </main>

    <?php include("../vistas/footer.php"); ?>

</body>

</html>