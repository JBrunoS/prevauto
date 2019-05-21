<?php
session_start();
include 'conexao.php';

    $sql_code = "INSERT INTO veiculos ( 
        id_usuario,
        marca,
        tipo,
        ano_fabricacao,
        combustivel,
        especie,
        ano_modelo,
        numero_chassi,
        numero_motor,
        cor,
        placa,
        renavan, 
        quilometragem)

        VALUES (
            '$_SESSION[id_usuario]',
            '$_SESSION[modelo]',
            '$_SESSION[tipo]',
            '$_SESSION[dataFabricacao]',
            '$_SESSION[combustivel]',
            '$_SESSION[especie]',
            '$_SESSION[dataModelo]',
            '$_SESSION[chassi]',
            '$_SESSION[motor]',
            '$_SESSION[cor]',
            '$_SESSION[placa]',
            '$_SESSION[renavan]',
            '$_SESSION[kms]')";

        $confirma = $mysqli->query($sql_code) or die($mysqli->error);
        

            if ($confirma) {
                echo "<script text='javascritp'>alert('Salvo com sucesso no banco de dados!')</script>";
                echo "<script> location.href='../view/veiculos.php'; </script>";
            }
            else
                echo "<script text='javascript'> alert('Não foi possivel salvar no banco')</scritp>";

?>