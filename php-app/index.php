<?php

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  echo "Error al conectar a con la BD: " . mysqli_connect_error();
} else {
  echo "Conexión  exitosa.";
  mysqli_close($conn);
}

?>