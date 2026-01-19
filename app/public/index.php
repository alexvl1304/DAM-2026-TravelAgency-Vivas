<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agencia de Viajes</title>
</head>

<style>
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(550px, 1fr));
    gap: 16px;
  }

  .card {
    border: 1px solid #ccc;
    padding: 10px;
    background: #fff;
  }

  .card img {
    width: 100%;
    height: auto;
  }
</style>

<body style="background-color: #e2ecff">
  <header>
    <?php include("../vistas/cabezera.php"); ?>
  </header>

  <img style="display:flex; width: 100%; height: fit-content;" src="../assets/index_background.jpg" alt="background">

  <main style="padding: 20px;">
    <h1>Bienvenido a nuestra agencia</h1>
    <p>Descubre los mejores destinos al mejor precio.</p>
    <section class="grid">
      <?php
      // Create connection
      include("../vistas/conexion_bd.php");

      $sql = "SELECT * FROM viajes";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo (
            "<div class='card'> 
            <h3>" . $row['titulo'] . "</h3> 
            <img src='" . $row['url_imagen'] . "' alt=''>
          </div>");
        }
      }

      $conn->close();

      ?>
    </section>
  </main>

</body>

</html>