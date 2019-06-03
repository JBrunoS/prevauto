<?php 
session_start();
include 'conexao.php';

if (isset($_POST['id'])) {

	$id = $_POST['id'];
	
	$stmt = $conn->prepare("SELECT * FROM veiculos where id_veiculo = '$id'"); 
    $stmt->execute(array('id' => $id));
                  
      while($row = $stmt->fetch()) {  
        echo json_encode(array(
        "id_veiculo" => $row['id_veiculo'],
        "modelo" => $row['marca'],
        "tipo" => $row['tipo'],
        "ano_fabricacao" => $row['ano_fabricacao'],
        "combustivel" => $row['combustivel'],
        "especie" => $row['especie'],
        "ano_modelo" => $row['ano_modelo'],
    	"numero_chassi" => $row['numero_chassi'],
    	"numero_motor" => $row['numero_motor'],
    	"cor" => $row['cor'],
    	"placa" => $row['placa'],
    	"renavan" => $row['renavan'],
    	"quilometragem" => $row['quilometragem']));
    }
}
 ?>