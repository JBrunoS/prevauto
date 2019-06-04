<?php 
session_start();
include 'conexao.php';

if (isset($_POST['salvarServico'])) {

$servico = $_POST['servicos'];
$veiculo = $_POST['veiculo1'];
$quilometragem = $_POST['kms'];
$data = $_POST['data'];
$motorista = $_POST['motorista1'];
$valor = $_POST['valor'];
$user = $_SESSION['id_usuario'];

	$sql_code = "INSERT INTO servicosrealizados (
                        id_servico, 
                        id_veiculo,    
                        id_usuario,        
                        data_servico,
                        quilometragem,
                        valor,
                        user_system) 
                        VALUES (
                        '$servico',
                        '$veiculo',
                        '$motorista',
                        '$data',
                        '$quilometragem',
                        '$valor',
                        '$_SESSION[id_usuario]'
                        )";

        $confirma = $mysqli->query($sql_code) or die($mysqli->error);
        unset($servico, $veiculo, $quilometragem, $data, $motorista, $valor);
        echo "<script text='javascritp'>alert('Salvo com sucesso no banco de dados!')</script>";
        echo "<script> location.href='../view/manutencao.php'; </script>";
}


 ?>