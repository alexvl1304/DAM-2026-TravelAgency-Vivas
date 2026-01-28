<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/form-user.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main style="margin: 10px auto;">
        <h1>Crear cuenta</h1>

        <p class="blue-color">Disfruta de todas las oportunidades de Easy Peasy Travel:</p>
        <form action="../vistas/procesar_crear_cuenta.php" method="POST">
            Email: <input class="textinput" type="email" name="email" value=""><br>
            Usuario: <input class="textinput" type="text" name="user" value=""><br>
            Contraseña: <input class="textinput" type="text" name="pass" value=""><br>
            <div style="font-size: 18px; font-weight: bold; margin: 0px 0px 10px">
                Datos bancarios:
            </div>
            Tarjeta de crédito: <input class="textinput" type="text" name="card" value=""><br>
            Número secreto: <input class="textinput" type="number" name="cardnum" value=""><br>
            <input class="boton-anadir" type="submit" value="Crear cuenta">
        </form>

        <a class="boton-volver" href="../public/login.php">
            Ya tengo cuenta
        </a>

    </main>

    <?php include("../vistas/footer.php"); ?>
</body>

</html>