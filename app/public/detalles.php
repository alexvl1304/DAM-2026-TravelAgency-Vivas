<!DOCTYPE html>
<html lang="es">

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

$conn->close();
?>

<head>
    <meta charset="UTF-8">
    <title>
        <?php
        echo $viaje["titulo"];
        ?>
    </title>

    <style>
        .detalle-container {
            max-width: 1000px;
            margin: 30px auto;
            background: #f4f7ff;
            border: 2px solid #9e9e9e;
            border-radius: 8px;
            overflow: hidden;
        }

        .detalle-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
        }

        .detalle-body {
            padding: 25px;
        }

        .detalle-titulo {
            font-size: 32px;
            color: #222;
            margin-bottom: 10px;
            text-align: center;
        }

        .detalle-precio {
            font-size: 30px;
            color: #147a25;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .detalle-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            font-size: 18px;
            color: #444;
            margin-bottom: 25px;
        }

        .detalle-descripcion {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .destacado {
            color: #d4a017;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>

</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main>

        <div class="detalle-container">

            <img class="detalle-img" src="<?php echo $viaje["url_imagen"] ?>" alt="Imagen del viaje">

            <div class="detalle-body">

                <h1 class="detalle-titulo"><?php echo $viaje["titulo"] ?></h1>

                <div class="detalle-precio"><?php echo ($viaje["precio"] . " €") ?></div>

                <?php if ($viaje["destacado"] == 1) { ?>

                    <div class="destacado">-- Viaje destacado --</div>

                <?php } ?>

                <p class="detalle-descripcion">
                    <?php echo $viaje["descripcion"] ?>
                </p>

                <div class="detalle-grid">
                    <div><strong>Fecha inicio:</strong> <?php echo $viaje["fecha_inicio"] ?></div>
                    <div><strong>Fecha final:</strong> <?php echo $viaje["fecha_fin"] ?></div>
                    <div><strong>Tipo:</strong> <?php echo $viaje["tipo"] ?></div>
                    <div><strong>Plazas:</strong> <?php echo $viaje["plazas"] ?> disponibles</div>
                </div>

            </div>
        </div>

    </main>

    <?php include("../vistas/footer.php"); ?>

</body>

</html>