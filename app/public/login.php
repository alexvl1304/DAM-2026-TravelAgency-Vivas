<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 400px;
            padding: 20px;
            border: 2px solid #9e9e9e;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin: 10px auto;
        }

        .boton-anadir {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #246097;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .boton-volver {
            padding: 10px;
            font-size: 20px;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin: 10px;
            display: flex;
            justify-content: center;
            color: #02203a;
            font-weight: bold;
        }

        .textinput {
            height: 25px;
            font-size: 16px;
        }
    </style>

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