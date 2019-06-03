<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "prevauto";

$mysqli = new mysqli($host, $usuario, $senha, $db);
$conexao = mysqli_connect("localhost", "root", "", "prevauto");

if ($mysqli->connect_errno) {
	echo "Erro";
}


?>

<?php

	

$servername = "localhost";
$username = "root";
$password = "";

try {

	$conn = new PDO("mysql:host=$servername;dbname=prevauto", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	#echo "Deu certo";
	
} catch (Exception $e) {
	echo "Erro ao conectar: " . $e->getMessage();
}


?>
