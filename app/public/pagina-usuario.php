<?php
session_start();
if (isset($_SESSION["user"])) {
} else {
  http_response_code(404);
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>
        Usuario
    </title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/pagina-usuario.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <?php $userRow = $_SESSION["user"]; ?>

    <main class="perfil-usuario">
        <div class="perfil-contenedor">
            <div class="perfil-imagen">
                <img src="../assets/imagenes-pagina/user.png" alt="Imagen de usuario">
            </div>
            <?php
            if ($_SESSION["user"]["admin"] == 1) {
                ?>
                <div class="perfil-administrador">
                    -- Administrador --
                </div>
                <?php
            }
            ?>
            <div class="perfil-datos">
                <p><strong>Nombre:</strong><?php echo $userRow["user"] ?></p>
                <p><strong>Contraseña:</strong><?php echo $userRow["pass"] ?></p>
                <p><strong>Email:</strong><?php echo $userRow["email"] ?></p>
                <p><strong>Número de tarjeta:</strong><?php echo $userRow["card"] ?></p>
                <p><strong>Número secreto:</strong><?php echo $userRow["cardnum"] ?></p>
            </div>

            <a class="boton-volver" href="../vistas/procesar_cerrar_sesion.php">
                Cerrar sesion
            </a>
        </div>
    </main>

    <?php include("../vistas/footer.php"); ?>

</body>

</html>