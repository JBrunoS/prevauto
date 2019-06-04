<?php 
session_start();
include 'conexao.php';

if (isset($_POST['chegadaVeiculos'])) {

$veiculo = $_POST['veiculo2'];
$quilometragem = $_POST['kms2'];
$hora = $_POST['hora1'];
$motorista = $_POST['motorista2'];

	$sql_code = "INSERT INTO chegada_veiculos (
                        id_usuario,
                        id_veiculo,
                        quilometragem,
                        horario,
                        user_system) 
                        VALUES (
                        '$motorista',
                        '$veiculo',
                        '$quilometragem',
                        '$hora',
                        '$_SESSION[id_usuario]'
                        )";

        $confirma = $mysqli->query($sql_code) or die($mysqli->error);
        unset($veiculo, $quilometragem, $hora, $motorista);
        echo "<script text='javascritp'>alert('Salvo com sucesso no banco de dados!')</script>";
        echo "<script> location.href='../view/manutencao.php'; </script>";
}


 ?>