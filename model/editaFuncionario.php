<?php 
session_start();
include 'conexao.php';

if (isset($_POST['editsalvar'])) {

	$id = $_POST['editid'];
	$nome = $_POST['editnome'];
	$cpf = $_POST['editcpf'];
	$email = $_POST['editemail'];
	$cnh = $_POST['editcnh'];
	$senha = $_POST['editpassword'];
	$telefone = $_POST['edittelefone'];
	$motorista = $_POST['editmotorista'];
	$permissao = $_POST['editpermissao'];
	$ativo = $_POST['editAtivo'];

	$stmt = $conn->prepare("UPDATE usuario SET nome_usuario = '$nome', cpf = '$cpf', motorista = '$motorista', cnh = '$cnh', telefone = '$telefone', email = '$email', senha = '$senha', permissao = '$permissao', ativo = '$ativo' WHERE id_usuario = '$id' ");
    $stmt->execute();

   		echo "<script> alert('Dados do usário alterado com sucesso!'); </script>";
        echo "<script> location.href='../view/usuarios.php'; </script>";

        unset($id, $nome, $cpf, $email, $cnh, $senha, $telefone, $motorista, $permissao);
}
else{
	echo "<script> alert('Não foi possível alterar os Dados do usário!'); </script>";
        echo "<script> location.href='../view/usuarios.php'; </script>";
}

 ?>}
