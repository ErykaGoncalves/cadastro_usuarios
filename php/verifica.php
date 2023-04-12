<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">


</head>
<body>
<?php 

$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$endereco  		 = $_POST['endereco'];
$numero			 = $_POST['numero'];
$bairro 		 = $_POST['bairro'];
$cpf 		 	 = $_POST['cpf'];
$cidade  	 	 = $_POST['cidade'];
$estado  		 = $_POST['estado'];
$competencias  	 = $_POST['competencias'];
$erro 			 = 0;

// Array com as siglas de estado válidas
$estados_validos = array('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO');


//Verifica se o campo nome não está em branco
if (empty($nome) || strstr($nome, ' ') === false) {
	echo "Favor digitar o seu nome corretamente no campo 'Nome'.<br>";
	$erro = 1;
  }

//Verifica se o campo email está preenchido corretamente
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
  }

// Verifica se o campo cidade está em branco ou contém apenas espaços em branco
if (empty(trim($cidade))) {
	echo "Favor digitar sua cidade.<br>";
	$erro = 1;
  }

// Verifica se o campo estado está preenchido com 2 dígitos e é uma sigla de estado válida
if (strlen($estado) != 2 || !in_array(strtoupper($estado), $estados_validos)) {
	echo "Favor digitar o seu estado corretamente.<br>";
	$erro = 1;
  }

//Verifica se o campo comentarios está vazio
if (empty($competencias)) {
	echo "Favor entre com com pelo menos uma competencia.<br>";
	$erro = 1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro === 0) {
	include 'cadastro.html';
}


?>

</body>
</html>