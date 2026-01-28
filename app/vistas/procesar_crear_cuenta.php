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
            $email = $_POST["email"];
            $user = $_POST["user"];
            $passw = $_POST["pass"];
            $card = $_POST["card"];
            $cardnum = $_POST["cardnum"];

            // conexion
            include("../vistas/conexion_bd.php");

            $stmt = $conn->prepare("INSERT INTO users (user, pass, email, card, cardnum, admin) VALUES (?, ?, ?, ?, ?, 0)");
            $stmt->bind_param("ssssi", $user, $passw, $email, $card, $cardnum);

            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "Cuenta creada con exito, por favor, vuelva e inicie sesión";
            } else {
                echo "Hubo un error al crear su cuenta, por favor vuelva a intentarlo más tarde";
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