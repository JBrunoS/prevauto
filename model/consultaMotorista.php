<?php  
session_start();

include 'conexao.php';





    $con = new mysqli("localhost", "root", "", "prevauto");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT * FROM usuario where empresa = '$_SESSION[empresa]' and motorista = 'SIM' and ativo = 'SIM'");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
?>