<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agencia de Viajes</title>
</head>

<style>
  a {
    text-decoration: none;
    color: inherit;
  }

  .intro-div {
    border: 2px solid #ccc;
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
    grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
    gap: 10px;
  }

  .card {
    border: 2px solid #ccc;
    background: #f4f7ff;
    max-height: 420px;
  }

  .card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
  }

  .card-info {
    padding: 5px;
  }

  .detalles-card {
    background: #c0e7b6;
    display: flex;
    justify-content: center;
  }

</style>

<body>
  <header>
    <?php include("../vistas/cabezera.php"); ?>
  </header>

  <img style="display:flex; width: 100%; height: fit-content;" src="../assets/index_background_4.jpg" alt="background">

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
        <img src='../assets/travel.png' alt='destino'>
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
              <div class='card-info'>
                <h3 style='text-align: center; font-size: 25px;'>
                  <?php echo $row['titulo'] ?>
                </h3>
                <p style='text-align: center; font-size: 20px;'>
                  <?php echo $row['precio'] . "€" ?>
                </p>
              </div>
              <img src=' <?php echo $row['url_imagen'] ?> ' alt='destino'>
              <div class="detalles-card">
                <div style='text-align: center; font-size: 20px; padding: 5px;'>
                  Detalles
                </div>
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