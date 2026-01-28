<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Añadir viaje</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/cabecera.css">
    <link rel="stylesheet" href="../assets/css/form-viaje.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>

    <?php include("../vistas/cabezera.php"); ?>

    <main style="margin: 10px auto;">
        <h1>Añadir Viaje</h1>

        <form action="../vistas/procesar_anadir_viaje.php" method="POST">
            <div class="destacado-texto">
                Destacado en página principal: <input type="checkbox" class="destacado-check" name="destacado"
                    value="1"><br>
            </div>
            Titulo: <input class="textinput" type="text" name="titulo" value=""><br>
            Precio: <input class="textinput" type="number" name="precio" value="0"><br>
            Fecha inicio: <input class="textinput" type="date" name="fecha_inicio" value=""><br>
            Fecha final: <input class="textinput" type="date" name="fecha_fin" value=""><br>
            Tipo: <input class="textinput" type="text" name="tipo" value=""><br>
            Descripcion: <textarea name="descripcion" rows="12" cols="30"></textarea><br>
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