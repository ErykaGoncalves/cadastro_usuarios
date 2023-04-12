<?php

include 'conecta_mysql.inc.php';
$cadastro = include 'cadastro.html';

$nome           = $_POST["nome"];
$email          = $_POST["email"];
$endereco       = $_POST["endereco"];
$numero         = $_POST["numero"];
$bairro         = $_POST["bairro"];
$cpf            = $_POST["cpf"];
$cidade         = $_POST["cidade"];
$estado         = $_POST["estado"];
$competencias   = $_POST["competencias"];


$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome', '$email','$endereco', '$numero', '$bairro', '$cpf', '$cidade' , '$estado', '$competencias')";

if ($conexao->query($sql) === TRUE) {
	$cadastro;
} else {
	echo "Erro: " . $sql ;
}

$conexao->close();
?>