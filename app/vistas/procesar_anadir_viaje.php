<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificar viaje</title>

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
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $fecha_inicio = $_POST["fecha_inicio"];
            $fecha_fin = $_POST["fecha_fin"];
            $precio = $_POST["precio"];
            $tipo = $_POST["tipo"];
            $plazas = $_POST["plazas"];
            $url_imagen = $_POST["url_imagen"];
            $destacado = isset($_POST["destacado"]) ? 1 : 0;

            // conexion
            include("../vistas/conexion_bd.php");

            $stmt = $conn->prepare("SELECT id FROM viajes ORDER BY id DESC LIMIT 1");

            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();

            $id += 1;
            
            $stmt = $conn->prepare("INSERT INTO `viajes` 
            (`id`, `titulo`, `precio`, `descripcion`, `fecha_inicio`, `fecha_fin`, `destacado`, `tipo`, `plazas`, `url_imagen`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isisssisis", $id, $titulo, $precio, $descripcion, $fecha_inicio, $fecha_fin, $destacado, $tipo, $plazas, $url_imagen);

            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "Registro insertado";
            } else {
                echo "Hubo un error al insertar";
            }

            $conn->close();
            ?>

            <a class="boton-volver" href="../public/viajes.php">
                Volver
            </a>
        </div>



    </main>

    <?php include("../vistas/footer.php"); ?>

</body>

</html>