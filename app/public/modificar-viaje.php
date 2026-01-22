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
</head>

<body>
    <form action="../vistas/procesar_modificar_viaje.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $viaje["id"]; ?>">
        Titulo: <input type="text" name="titulo" value="<?php echo $viaje["titulo"] ?>"><br>
        Precio: <input type="numeric" name="precio" value="<?php echo $viaje["precio"] ?>"><br>
        Fecha de inicio: <input type="date" name="fecha_inicio" value="<?php echo $viaje["fecha_inicio"] ?>"><br>
        Fecha final: <input type="date" name="fecha_fin" value="<?php echo $viaje["fecha_fin"] ?>"><br>
        Tipo: <input type="text" name="tipo" value="<?php echo $viaje["tipo"] ?>"><br>
        Descripcion: <textarea name="descripcion" rows="12" cols="30"><?php echo $viaje["descripcion"] ?></textarea><br>
        Imagen: <input type="text" name="url_imagen" value="<?php echo $viaje["url_imagen"] ?>"><br>
        Destacado: <input type="checkbox" name="destacado" value="<?php echo $viaje["destacado"] ?>" <?php
           if ($viaje["destacado"])
               echo "checked";
           ?>><br>
        Plazas: <input type="numeric" name="plazas" value="<?php echo $viaje["plazas"] ?>"><br>
        <input type="submit">
    </form>
</body>

</html>