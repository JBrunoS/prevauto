<?php
session_start();

include 'conexao.php';


$indice = 0;

  if (isset($_POST['enviar'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $password = $_POST['repeatPassword'];
    $telefone = $_POST['telefone'];
    $motorista = $_POST['motorista'];
    $cnh = $_POST['cnh'];

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['password'] = $password;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['motorista'] = $motorista;
    $_SESSION['cnh'] = $cnh;
    

    $stmt = $conn->prepare("SELECT * FROM usuario where email like :email"); 
    $stmt->execute(array('email' => $email));
                  
      while($row = $stmt->fetch()) {  
        json_encode(array(
        "id" => $idcliente = $row['IdUsuario'],
        "nome" => $row['NomeUsuario'],
        "cpf" => $row['CPF'],
        "email" => $row['email'],
        "telefone" => $row['telefone']));

        $email = $row['email'];

        $indice ++;
      } 
      if ($indice == 0) {
        echo "<script> location.href='cadastraCliente.php'; </script>";
        
      }else{
        echo "<script> alert('Usuário já se encontra cadastrado! Fazer Login'); </script>";
        echo "<script> location.href='../view/register.html'; </script>";
      }
  }
  
?>