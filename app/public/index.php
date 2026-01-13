<?php include("../vistas/cabezera.php"); ?>

<main style="padding: 20px;">
    <h1>Bienvenido a nuestra agencia</h1>
    <p>Descubre los mejores destinos al mejor precio.</p>
</main>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "viajes";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br><br>";

$sql = "SELECT * FROM viajes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["titulo"];
  }
} else {
  echo "0 results";
}
$conn->close();

?>

</body>

</html>