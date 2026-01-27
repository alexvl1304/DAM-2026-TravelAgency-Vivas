<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crear cuenta</title>

    <style>
        .card-texto {
            width: 400px;
            padding: 20px;
            border: 2px solid #9e9e9e;
            border-radius: 8px;
            background-color: #f9f9f9;
            margin: 20px auto;
            justify-content: center;
            text-align: center;
        }

        .boton-volver {
            background-color: #852623;
            padding: 10px;
            font-size: 16px;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin: 10px;
            display: flex;
            justify-content: center;
        }
    </style>

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