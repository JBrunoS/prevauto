<?php  
session_start();
include 'conexao.php';


	//echo $codigo;
    if (isset($_POST['codigo'])) {

        $codigo = $_POST['codigo'];
 
	$stmt = $conn->prepare("SELECT * FROM usuario where nome_usuario = '$codigo' AND empresa = '$_SESSION[empresa]'");
    $stmt->execute(array('codigo' => $codigo));

    while ($row = $stmt->fetch()) {
    	echo json_encode(array(
            "id_usuario" => $row['id_usuario'],
    		"nome_usuario" => $row['nome_usuario'],
    		"cpf" => $row['cpf'],
    		"email" => $row['email'],
            "permissao" => $row['permissao'],
            "cnh" => $row['cnh'],
            "senha" => $row['senha'],
            "telefone" => $row['telefone'],
            "motorista" => $row['motorista'] ));
    }
}


?>