<?php
session_start();
include 'conexao.php';

    $sql_code = "INSERT INTO usuario (
                        empresa,
                        nome_usuario, 
                        cpf,    
                        motorista,        
                        cnh,
                        telefone,
                        email,
                        senha,
                        permissao) 
                        VALUES (
                        '$_SESSION[empresa]',
                        '$_SESSION[nome]',
                        '$_SESSION[cpf]',
                        '$_SESSION[motorista]',
                        '$_SESSION[cnh]',
                        '$_SESSION[telefone]',
                        '$_SESSION[email]',
                        '$_SESSION[password]',
                        '$_SESSION[permissao]'
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

            session_destroy();

?>