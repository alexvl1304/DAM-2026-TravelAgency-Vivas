<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]["admin"] == 1) {
} else {
  http_response_code(404);
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agencia de Viajes</title>
  <link rel="stylesheet" href="../assets/css/global.css">
  <link rel="stylesheet" href="../assets/css/cabecera.css">
  <link rel="stylesheet" href="../assets/css/base-datos.css">
  <link rel="stylesheet" href="../assets/css/footer.css">

</head>

<body>

  <?php
  include("../vistas/cabezera.php");
  ?>

  <main style="padding: 20px;">
    <h1>Viajes</h1>

    <section class="anadir-button">
      <a class="boton-anadir" style="" href="anadir-viaje.php">Añadir viaje</a>
    </section>

    <section>
      <table style="width: 100%" border="1" cellspacing="0">
        <tr style="font-weight: bold; font-size: 18px;  background: #d2d6e2;">
          <td>ID</td>
          <td>★</td>
          <td>Titulo</td>
          <td>Precio</td>
          <td>Fecha de inicio</td>
          <td>Fecha final</td>
          <td>Acciones</td>
        </tr>
        <?php
        // create connection
        include("../vistas/conexion_bd.php");

        $sql = "SELECT id, destacado, titulo, precio, fecha_inicio, fecha_fin FROM viajes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            //html de un card
            ?>
            <tr>
              <?php
              foreach ($row as $key => $value) {
                if ($key == "destacado") {
                  if ($value == 1) {
                    ?>
                    <td style=" color: #d4a017; font-weight: bold;">★</td>
                    <?php
                  } else {
                    ?>
                    <td style="color: #852623; font-weight: bold;">X</td>
                    <?php
                  }
                } else {
                  ?>
                  <td> <?php echo $value ?> </td>
                  <?php
                }
              }
              ?>
              <td style="display: flex; gap:5px;">
                <a class="boton-accion" style="background-color: #246097;"
                  href="modificar-viaje.php?id= <?php echo $row["id"] ?>">Modificar</a>
                <a class="boton-accion" style="background-color: #852623;"
                  href="../vistas/procesar_eliminar_viaje.php?id=<?php echo $row["id"] ?>"
                  onclick="return confirm('Confirmar eliminar')">
                  Eliminar
                </a>
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