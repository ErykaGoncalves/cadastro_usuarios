<?php

include 'conecta_mysql.inc.php';
include 'cadastro.html';

$nome 			 = $_POST["nome"];
$email 			 = $_POST["email"];
$endereco        = $_POST["endereco"];
$numero          = $_POST["numero"];
$bairro         = $_POST["bairro"];
$cpf             = $_POST["cpf"];
$cidade  	 	 = $_POST["cidade"];
$estado  		 = $_POST["estado"];
$comentarios  	 = $_POST["comentarios"];



$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome', '$email', '$cpf', '$estado', '$endereco','$numero', '$bairro','$cidade' ,'$comentarios')";

if ($conexao->query($sql) === TRUE) {
	include_once "html/cadastro.html";
} else {
	echo "Erro: " . $sql ;
}

$conexao->close();
?>

