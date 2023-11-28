<?php
$servername = "localhost";
$username = "gabriel";
$password = "adc675";
$dbname = "lista";

$data = json_decode(file_get_contents("php://input"), true);
$nome = $data["nome"];
$cpf = $data["cpf"];
$identidade = $data["identidade"];
$email = $data["email"];
$cargo = $data["cargo"];
$salaprova = $data["salaprova"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die ("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "INSERT INTO candidatos(nome, cpf, identidade, email, cargo, sala_prova) VALUES ('$nome', '$cpf', '$identidade', '$email', '$cargo', '$salaprova')";
if ($conn->query($sql) === TRUE) {
  echo "Candidato incluído com sucesso";
} else {
  echo "Erro ao incluir o candidato"
}

$conn->close();
?>
