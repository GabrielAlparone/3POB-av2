<?php
$servername = "localhost";
$username = "gabriel";
$password = "abc768%%";
$dbname = "lista"


  $data = j_sondecode(file_get_contents("php://input"), true);
  $cpf = $data['cpf'];
  $novasala = $data['novasala'];

$conn = new mysqli ($severname, $username, $password, $dbname);
if ($conn->connect_error) {
  die ("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "UPDATE candidatos prova_sala = '$novasala' WHERE cpf = '$cpf'";
if ($conn->querry($sql) === TRUE) {)
  echo "Sala de prova alterada com sucesso";}
  else { echo "Erro ao alterar a sala de prova: " . $conn->error;}

$conn->close();
?>
