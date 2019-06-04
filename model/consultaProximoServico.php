<?php  
session_start();

include 'conexao.php';





    $con = new mysqli("localhost", "root", "", "prevauto");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT usuario.empresa, usuario.nome_usuario, veiculos.marca, veiculos.placa, servicos_periodicos.nome_servico, servicosrealizados.data_servico, servicosrealizados.valor, servicos_periodicos.km_troca FROM servicosrealizados INNER JOIN usuario ON (servicosrealizados.id_usuario = usuario.id_usuario) INNER JOIN veiculos ON (servicosrealizados.id_veiculo = veiculos.id_veiculo) INNER JOIN servicos_periodicos ON (servicosrealizados.id_servico = servicos_periodicos.id_servicos)  WHERE usuario.empresa = '$_SESSION[empresa]' ORDER BY servicosrealizados.data_servico ASC");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
?>