<?php

//conexão mysqli_conect ('local','usuario','senha','banco')

$conexao = mysqli_connect('localhost','root','','banco_formulario');


if ($conexao->connect_error) {
    die("Falha ao realizar a conexão: " . $conexao->connect_error);
}




?>