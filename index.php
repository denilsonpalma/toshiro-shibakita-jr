<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Supermercado - Exemplo PHP</title>
	</head>
	<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "10.0.2.100";
$username = "teste";
$password = "teste@2022";
$database = "supermercado";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();


$query = "INSERT INTO clientes (ClienteID, Nome, Sobrenome, Endereco, Cidade, Clube) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
	</body>
</html>
