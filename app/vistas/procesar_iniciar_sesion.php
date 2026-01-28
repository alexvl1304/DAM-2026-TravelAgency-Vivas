<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/procesar-card.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main>
        <div class="card-texto">
            <?php
            $user = $_POST["user"];
            $passw = $_POST["pass"];

            // conexion
            include("../vistas/conexion_bd.php");

            $stmt = $conn->prepare("SELECT * FROM users WHERE user = ? AND pass = ? LIMIT 1");
            $stmt->bind_param("ss", $user, $passw);

            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                session_start();
                $_SESSION["user"] = $row;
                header("Location: ../public/index.php");
            } else {
                echo "Usuario y contraseña incorrecto";
            }

            $conn->close();
            ?>

            <a class="boton-volver" href="../public/login.php">
                Volver
            </a>
        </div>

    </main>

    <?php include("../vistas/footer.php"); ?>

</body>

</html>