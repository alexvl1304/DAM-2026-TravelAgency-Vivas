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
</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main style="padding: 20px;">
        <h1>
            <?php
            echo $viaje["titulo"];
                ?>
        </h1>
        <p class="blue-color"><?php
            echo $viaje["descripcion"];
                ?></p>
    </main>

</body>

</html>