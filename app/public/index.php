<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agencia de Viajes</title>
</head>

<style>
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, 200px);
    gap: 16px;
    justify-content: center;
  }

  .grid img {
    width: 200px;
  }
</style>

<body style="background-color: #e2ecff">

  <?php include("../vistas/cabezera.php"); ?>

  <img style="display:flex; width: 100%; height: fit-content;" src="../assets/index_background.jpg" alt="background">

  <main style="padding: 20px;">
    <h1>Bienvenido a nuestra agencia</h1>
    <p>Descubre los mejores destinos al mejor precio.</p>
    <section>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "viajes";

      // Create connection
      include("../vistas/conexion_bd.php");

      $sql = "SELECT * FROM viajes";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo $row["titulo"];
          echo ("<br><br>");
        }
      }

      $conn->close();

      ?>
    </section>
  </main>

</body>

</html>