<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agencia de Viajes</title>
  <link rel="stylesheet" href="../assets/css/global.css">
  <link rel="stylesheet" href="../assets/css/cabecera.css">
  <link rel="stylesheet" href="../assets/css/index.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
</head>


<body>
  <header>
    <?php include("../vistas/cabezera.php"); ?>
  </header>

  <img style="display:flex; width: 100%; height: fit-content;" src="../assets/imagenes-pagina/index_background_4.jpg"
    alt="background">

  <main style="padding: 20px;">
    <h1>Bienvenido a Easy Peasy Travel</h1>
    <p class="blue-color">¡Aquí descubrirás los mejores destinos al mejor precio!</p>
    <section class="intro-section">

      <div class="intro-div">
        <p style='text-align: center; font-size: 20px;'>
          En Easy Peasy Travel hacemos que viajar sea fácil, rápido y memorable. Diseñamos experiencias a tu medida:
          vuelos, hoteles y aventuras sin complicaciones. Tú sueña el destino, nosotros nos encargamos del resto para
          que solo disfrutes el camino.
        </p>
        <img src='../assets/imagenes-pagina/travel.png' alt='destino'>
      </div>

    </section>
    <h1>Consulta nuestros viajes destacados:</h1>
    <section class=" grid">
      <?php
      // create connection
      include("../vistas/conexion_bd.php");

      $sql = "SELECT * FROM viajes WHERE destacado = 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          // html de un card
          ?>
          <a href='detalles.php?id= <?php echo $row["id"] ?> '>
            <div class='card'>

              <img src='../assets/imagenes-viajes/<?php echo $row['url_imagen'] ?> ' alt='destino'>

              <p class="card-titulo">
                <?php echo $row['titulo'] ?>
              </p>

              <div style="display: flex; padding: 0px 10px;">
                <p class="card-info" style="text-align:left;">
                  <?php echo $row['fecha_inicio'] ?>
                </p>
                <p class="card-precio" style="text-align:center;">
                  <?php echo $row['precio'] . " €" ?>
                </p>
                <p class="card-info" style="text-align:right;">
                  <?php echo $row['tipo'] ?>
                </p>
              </div>

            </div>
          </a>
          <?php
        }
      }

      $conn->close();

      ?>
    </section>

    <h1>Más viajes:</h1>
    <a style="text-decoration: underline" href="todos-viajes.php">
      <p class="blue-color">Si quieres explorar más destinos, consulta todos nuestros viajes</p>
    </a>
  </main>

  <?php include("../vistas/footer.php"); ?>

</body>

</html>