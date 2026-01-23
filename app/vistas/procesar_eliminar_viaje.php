<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificar viaje</title>
</head>

<body>

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

$stmt = $conn->prepare("DELETE FROM viajes WHERE id=?");
$stmt->bind_param("i", $id);

$stmt->execute();

$conn->close();

header("Location: ../public/viajes.php");
// if($stmt->affected_rows > 0){
//     echo "Registro eliminado";
// } else {
//     echo "Hubo un error al aliminar (no se elimino)";
// }
// ?>

</body>

</html>