<?php
session_start();
include 'conexao.php';

$idcliente;
$nome;
$idade;
$email;
$senha;
$telefone;
$indice = 0;

  if (isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuario where email like :email"); 
    $stmt->execute(array('email' => $email));
                  
      while($row = $stmt->fetch()) {  
        json_encode(array("id" => $idcliente = $row['IdUsuario'],
        "nome" => $row['NomeUsuario'],
        "cpf" => $row['CPF'],
        "email" => $row['email'],
        "telefone" => $row['telefone']));

        $idcliente = $row['IdUsuario'];
        $nome = $row['NomeUsuario'];
        $idade = $row['CPF'];
        $email = $row['email'];
        $telefone = $row['telefone'];

        $indice ++;
        
        $_SESSION['IdUsuario'] = $idcliente; 
        $_SESSION['NomeUsuario'] = $nome; 
        $_SESSION['CPF'] = $idade;
        $_SESSION['email'] = $email; 
        $_SESSION['telefone'] = $telefone;
      } 
      if (!isset($_SESSION['IdUsuario']) || $indice == 0) {
        echo "<script> alert('Usuário não cadastrado!'); </script>";
        echo "<script> location.href='../view/login.html'; </script>";
      }else{
        echo "<script> alert('Seja Bem vindo $nome'); </script>";
        echo "<script> location.href='../view/index.html'; </script>";
      }
  }
  
?>