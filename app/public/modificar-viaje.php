<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]["admin"] == 1) {
} else {
  http_response_code(404);
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

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
    <title>Modificar viaje</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/form-viaje.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main style="margin: 10px auto;">
        <h1>Modificar Viaje</h1>

        <form action="../vistas/procesar_modificar_viaje.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $viaje["id"]; ?>">
            <div class="destacado-texto">
                Destacado en página principal: <input type="checkbox" class="destacado-check" name="destacado" value="1"
                    <?php if ($viaje["destacado"])
                        echo "checked"; ?>><br>
            </div>
            Titulo: <input class="textinput" type="text" name="titulo" value="<?php echo $viaje["titulo"] ?>"><br>
            Precio: <input class="textinput" type="number" name="precio" value="<?php echo $viaje["precio"] ?>"><br>
            Fecha inicio: <input class="textinput" type="date" name="fecha_inicio"
                value="<?php echo $viaje["fecha_inicio"] ?>"><br>
            Fecha final: <input class="textinput" type="date" name="fecha_fin"
                value="<?php echo $viaje["fecha_fin"] ?>"><br>
            Tipo: <input class="textinput" type="text" name="tipo" value="<?php echo $viaje["tipo"] ?>"><br>
            Descripcion: <textarea name="descripcion" rows="12"
                cols="30"><?php echo $viaje["descripcion"] ?></textarea><br>
            Imagen: <input type="file" name="url_imagen" value="<?php echo $viaje["url_imagen"] ?>" required><br>
            Plazas: <input class="textinput" type="number" name="plazas" value="<?php echo $viaje["plazas"] ?>"><br>
            <input class="boton-modificar" type="submit" value="Modificar">
        </form>

        <a class="boton-volver" href="../public/viajes.php">
            Volver
        </a>
    </main>

    <?php include("../vistas/footer.php"); ?>
</body>

</html>