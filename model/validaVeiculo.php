<?php
session_start();

include 'conexao.php';


$indice = 0;

  if (isset($_POST['salvar'])){

    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $quilometragem = $_POST['kms'];
    $datamodelo = $_POST['dataModelo'];
    $datafabricacao = $_POST['dataFabricacao'];
    $tipo = $_POST['tipo'];
    $cor = $_POST['cor'];
    $combustivel = $_POST['combustivel'];
    $especie = $_POST['especie'];
    $renavan = $_POST['renavan'];
    $numerochassi = $_POST['chassi'];
    $numeromotor = $_POST['motor'];



    $_SESSION['placa'] = $placa;
    $_SESSION['modelo'] = $modelo;
    $_SESSION['kms'] = $quilometragem;
    $_SESSION['dataModelo'] = $datamodelo;
    $_SESSION['dataFabricacao'] = $datafabricacao;
    $_SESSION['tipo'] = $tipo;
    $_SESSION['cor'] = $cor;
    $_SESSION['combustivel'] = $combustivel;
    $_SESSION['especie'] = $especie;
    $_SESSION['renavan'] = $renavan;
    $_SESSION['chassi'] = $numerochassi;
    $_SESSION['motor'] = $numeromotor;
    

    $stmt = $conn->prepare("SELECT * FROM veiculos where placa like :placa"); 
    $stmt->execute(array('placa' => $placa));
                  
      while($row = $stmt->fetch()) {  
        $indice ++;
      } 

      if ($indice == 0) {
        //echo "<script> alert('Veiculo não se encontra cadastrado!'); </script>";
        echo "<script> location.href='cadastraVeiculo.php'; </script>";
        //echo "Pode cadastrar";
      }else{
        echo "<script> alert('Veiculo já se encontra cadastrado!'); </script>";
        echo "<script> location.href='../view/veiculos.php'; </script>";
      }
  }
  
?>