<?php
$servername = "localhost";
$username = "gabriel";
$password = "adc675";
$dbname = "lista";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die ("Falha na conexão com o banco de dados : " . $conn->connect_error); }

$sql = "SELECT * FROM candidatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $candidatos = array();
  while ($row = $result-fetch_assoc()) {
    $candidatos[] = $row;
  }
  echo json_encode($candidatos);
} else {
  echo "Nenhum candidato encontrado";
}
$conn->close();
?>
