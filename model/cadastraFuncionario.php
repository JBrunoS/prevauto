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
                        '$_SESSION[nomeFunc]',
                        '$_SESSION[cpfFunc]',
                        '$_SESSION[motoristaFunc]',
                        '$_SESSION[cnhFunc]',
                        '$_SESSION[telefoneFunc]',
                        '$_SESSION[emailFunc]',
                        '$_SESSION[passwordFunc]',
                        '$_SESSION[permissaoFunc]'
                        )";

        $confirma = $mysqli->query($sql_code) or die($mysqli->error);
        echo "<script text='javascritp'>alert('Salvo com sucesso no banco de dados!')</script>";
        

            if ($confirma) {
                unset(
                $_POST['nome'],
                $_POST['motorista'],
                $_POST['email'],
                $_POST['telefone']
                );
                echo "<script> location.href='../view/usuarios.php'; </script>";
            }
            else
                echo "<script text='javascript'> alert('Não foi possivel salvar no banco')</scritp>";

            

?>