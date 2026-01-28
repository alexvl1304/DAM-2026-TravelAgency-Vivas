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

<style>
  a {
    text-decoration: none;
    color: inherit;
  }

  .intro-div {
    border: 2px solid #9e9e9e;
    border-radius: 8px;
    padding: 20px;
    background: #f4f7ff;
    object-fit: cover;
    max-width: 700px;
    justify-content: center;
    align-items: center;
  }

  .intro-section {
    padding: 16px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .intro-div img {
    object-fit: cover;
    max-width: 50%;
    display: block;
    margin: 0 auto;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 15px;
    padding: 0px 100px;
  }

  .card {
    border: 2px solid #9e9e9e;
    border-radius: 8px;
    background: #f4f7ff;
    max-height: 350px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .card:hover {
    background-color: #e0e5f1;
  }

  .card img {
    width: 100%;
    height: 175px;
    object-fit: cover;
    display: block;
  }

  .card-titulo {
    margin: 15px 0px 5px;
    color: #222222;
    font-size: 25px;
    font-weight: bold;
    text-align: center;
  }

  .card-info {
    flex: 1;
    font-size: 18px;
    color: #505050;
    margin: 5px 0 10px;
    margin-top: auto;
  }

  .card-precio {
    flex: 1;
    font-size: 25px;
    color: #147a25;
    margin: 5px 0 10px;
    font-weight: bold;
  }
</style>

<body>
  <header>
    <?php include("../vistas/cabezera.php"); ?>
  </header>

  <main style="padding: 20px;">
    <h1>Todos nuestros viajes disponibles:</h1>
    <section class=" grid">
      <?php
      // create connection
      include("../vistas/conexion_bd.php");

      $sql = "SELECT * FROM viajes";
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
  </main>

  <?php include("../vistas/footer.php"); ?>

</body>

</html>