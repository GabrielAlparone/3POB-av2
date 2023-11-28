<?php
$servername = "localhost";
$username = "gabriel";
$password = "adc675";
$dbname = "lista";

$data = json_decode(file_get_contents("php://input"), true);
$nome = $data['nome'];
$cpf = $data['cpf'];
$salaprova = $data['salaprova'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die ("Falha na conexão com o banco de dados : " . $conn->connect_error); }

$sql = "INSERT INTO fiscais (nome, cpf, salaprova) VALUES ('$nome', '$cpf', '$sala')";
if ($conn->query($sql) === TRUE) {
  echo "fiscal incluído com sucesso";
    } else {
  echo "Erro ao incluir fiscal: " . $conn->error;
}
$conn->close();
?>
