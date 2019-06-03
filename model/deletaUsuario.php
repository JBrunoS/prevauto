<?php 
session_start();
include 'conexao.php';

	
if (isset($_POST['codigo'])) {
	$id = $_POST['codigo'];

	$stmt = $conn->prepare("DELETE FROM usuario where id_usuario = $id"); 
    $stmt->execute();

    if ($stmt) {
    	echo "<script text='javascritp'>alert('Usuário excluído da base de dados!')</script>";
        echo "<script> location.href='../view/usuarios.php'; </script>";

    }
    else{
    	return "Não deu certo";
    }
}
	
 ?>