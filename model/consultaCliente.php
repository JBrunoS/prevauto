<?php
session_start();
include 'conexao.php';
$_SESSION['password'] = "xxj123";
$idcliente;
$nome;
$idade;
$email;
$senha;
$telefone;
$empresa;
$permissao;
$indice = 0;

  if (isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuario where email like :email"); 
    $stmt->execute(array('email' => $email));
                  
      while($row = $stmt->fetch()) {  
        json_encode(array("id" => $idcliente = $row['id_usuario'],
          "empresa" => $row['empresa'],
        "nome" => $row['nome_usuario'],
        "cpf" => $row['cpf'],
        "email" => $row['email'],
        "telefone" => $row['telefone'],
        "permissao" => $row['permissao']));

        $idcliente = $row['id_usuario'];
        $nome = $row['nome_usuario'];
        $idade = $row['cpf'];
        $email = $row['email'];
        $telefone = $row['telefone'];
        $empresa = $row['empresa'];
        $permissao = $row['permissao'];

        $indice ++;
        
        $_SESSION['id_usuario'] = $idcliente; 
        $_SESSION['nome_usuario'] = $nome; 
        $_SESSION['cpf'] = $idade;
        $_SESSION['email'] = $email; 
        $_SESSION['telefone'] = $telefone;
        $_SESSION['empresa'] = $empresa;
        $_SESSION['permissao'] = $permissao;
      } 
      if (!isset($_SESSION['id_usuario']) || $indice == 0) {
        echo "<script> alert('Usuário não cadastrado!'); </script>";
        echo "<script> location.href='../view/login.html'; </script>";
      }else{
        echo "<script> alert('Seja Bem vindo $nome'); </script>";
        echo "<script> location.href='../view/index.php'; </script>";
      }
  }
  
?>