<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Añadir viaje</title>

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
            background-color: #147a25;
            color: white;
            border: none;
            border-radius: 5px;
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

        .destacado-texto{
            font-size: 18px;
            font-weight: bold;
        }

        .destacado-check {
            transform: scale(1.5);
            accent-color: #d4a017;
            color: #000000;
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
        <h1>Añadir Viaje</h1>

        <form action="../vistas/procesar_anadir_viaje.php" method="POST">
            <div class="destacado-texto">
                Destacado en página principal: <input type="checkbox" class="destacado-check" name="destacado" value="1"><br>
            </div>
            Titulo: <input class="textinput" type="text" name="titulo" value=""><br>
            Precio: <input class="textinput" type="number" name="precio" value="0"><br>
            Fecha inicio: <input class="textinput" type="date" name="fecha_inicio" value=""><br>
            Fecha final: <input class="textinput" type="date" name="fecha_fin" value=""><br>
            Tipo: <input class="textinput" type="text" name="tipo" value=""><br>
            Descripcion: <textarea name="descripcion" rows="12"
                cols="30"></textarea><br>
            Imagen: <input type="file" name="url_imagen" value="" required><br>
            Plazas: <input class="textinput" type="number" name="plazas" value="0"><br>
            <input class="boton-anadir" type="submit" value="Añadir">
        </form>

        <a class="boton-volver" href="../public/viajes.php">
            Volver
        </a>
    </main>

    <?php include("../vistas/footer.php"); ?>
</body>

</html>