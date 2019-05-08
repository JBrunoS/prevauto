<?php
include 'conexao.php';


if (isset($_POST['enviar'])) {

    $sql_code = "INSERT INTO usuario (
                        NomeUsuario, 
                        CPF,    
                        motorista,        
                        CNH,
                        telefone,
                        email,
                        senha) 
                        VALUES (
                        '$_POST[nome]',
                        '$_POST[cpf]',
                        '$_POST[motorista]',
                        '$_POST[cnh]',
                        '$_POST[telefone]',
                        '$_POST[email]',
                        '$_POST[repeatPassword]'
                        )";

        $confirma = $mysqli->query($sql_code) or die($mysqli->error);
        echo "<script text='javascritp'>alert('Salvo com sucesso no banco de dados!')</script>";
        echo "<script text='javascritp'>alert('Por favor, faça login!')</script>";

            if ($confirma) {
                unset(
                $_POST['nome'],
                $_POST['motorista'],
                $_POST['email'],
                $_POST['telefone']
                );
                echo "<script> location.href='../view/login.html'; </script>";
            }
            else
                echo "<script text='javascript'> alert('Não foi possivel salvar no banco')</scritp>";
    }




?>