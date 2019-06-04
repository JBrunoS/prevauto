function adicionaServico(){
	$("#salvarServico").click(function(){
		var servico = $("#servicos option:selected").val();
		var placa = $("#placas option:selected").val();
		var veiculo = $("#veiculo1").val();
		var quilometragem = $("#kms").val();
		var data = $("#data").val();
		var motorista = $("#motorista1").val();
		var valor = $("#valor").val();

		

		$.post( "../model/cadastraServico.php", {servico: servico, placa: placa, email: email, permissao: permissao, cnh: cnh, senha: senha, telefone: telefone, motorista: motorista}).done(function( data ) {
			console.log(data);
		});
	});
}