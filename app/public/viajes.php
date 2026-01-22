<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agencia de Viajes</title>
  <style>
    td {
      padding: 10px;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>

  <?php include("../vistas/cabezera.php"); ?>

  <main style="padding: 20px;">
    <h1>Nuestros Viajes</h1>
    <p class="blue-color"></p>
    <section>
      <table style="width: 100%" border="1" cellspacing="0">
        <tr style="font-weight: bold; font-size: 18px;  background: #d2d6e2;">
          <td>ID</td>
          <td>Titulo</td>
          <td>Precio</td>
          <td>Fecha de inicio</td>
          <td>Fecha final</td>
          <td>Acciones</td>
        </tr>
        <?php
        // create connection
        include("../vistas/conexion_bd.php");

        $sql = "SELECT id, titulo, precio, fecha_inicio, fecha_fin FROM viajes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            // html de un card
            ?>
            <tr>
              <?php
              foreach ($row as $key => $value) {
                ?>
                <td> <?php echo $value ?> </td>
                <?php
              }
              ?>
              <td style="display: flex;">
                <a style="padding-right:10px;" href="modificar-viaje.php?id= <?php echo $row["id"] ?>">Modificar</a>
                <a style="padding-left:10px;" href="">Eliminar</a>
              </td>
            </tr>
            <?php
          }
        }

        $conn->close();

        ?>
      </table>
    </section>
  </main>

  <?php include("../vistas/footer.php"); ?>

</body>

</html>