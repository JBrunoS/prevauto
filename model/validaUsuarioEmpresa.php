<?php
session_start();

include 'conexao.php';


$indice = 0;

  if (isset($_POST['salvar'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $permissao = $_POST['permissao'];
    $cpf = $_POST['cpf'];
    $password = $_POST['repeatPassword'];
    $telefone = $_POST['telefone'];
    $motorista = $_POST['motorista'];
    $cnh = $_POST['cnh'];
    

    $_SESSION['nomeFunc'] = $nome;
    $_SESSION['emailFunc'] = $email;
    $_SESSION['cpfFunc'] = $cpf;
    $_SESSION['passwordFunc'] = $password;
    $_SESSION['telefoneFunc'] = $telefone;
    $_SESSION['motoristaFunc'] = $motorista;
    $_SESSION['cnhFunc'] = $cnh;
    $_SESSION['permissaoFunc'] = $permissao;
    
    

    $stmt = $conn->prepare("SELECT * FROM usuario where email like :email"); 
    $stmt->execute(array('email' => $email));
                  
      while($row = $stmt->fetch()) {  
        $indice ++;
      } 

      if ($indice == 0) {
        echo "<script> location.href='cadastraFuncionario.php'; </script>";
        
      }else{
        echo "<script> alert('Usuário já se encontra cadastrado! Fazer Login'); </script>";
        echo "<script> location.href='../view/usuarios.php'; </script>";
      }
  }
  
?>