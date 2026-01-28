<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/form-user.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main style="margin: 10px auto;">
        <h1>Iniciar sesión</h1>

        <p class="blue-color">Introduce tu nombre de usuario y contraseña:</p>
        <form action="../vistas/procesar_iniciar_sesion.php" method="POST">
            Usuario: <input class="textinput" type="text" name="user" value=""><br>
            Contraseña: <input class="textinput" type="text" name="pass" value=""><br>
            <input class="boton-anadir" type="submit" value="Iniciar sesión">
        </form>

        <a class="boton-volver" href="../public/signin.php">
            No tengo cuenta
        </a>
    </main>

    <?php include("../vistas/footer.php"); ?>
</body>

</html>