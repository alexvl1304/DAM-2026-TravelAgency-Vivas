<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificar viaje</title>
</head>

<body>

<?php
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];
$precio = $_POST["precio"];
$destacado = $_POST["destacado"];
$tipo = $_POST["tipo"];
$plazas = $_POST["plazas"];
$url_imagen = $_POST["url_imagen"];

include("../vistas/conexion_bd.php");

$stmt = $conn->prepare("UPDATE viajes SET titulo=?, precio=?, descripcion=?, fecha_inicio=?, fecha_fin=?, destacado=?, tipo=?, plazas=?, url_imagen=? WHERE id=?");
$stmt->bind_param("sisssisisi", $titulo, $precio, $descripcion, $fecha_inicio, $fecha_fin, $destacado, $tipo, $plazas, $url_imagen, $id);

$stmt->execute();

if($stmt->affected_rows > 0){
    echo "Registro actualizado";
} else {
    echo "Hubo un error al actualizar (no se actualizo)";
}
?>

</body>

</html>