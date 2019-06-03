function editaFuncionario(){
	$("#editsalvar").click(function(){
		var id = $("#editid").val();
		var nome = $("#editnome").val();
		var cpf = $("#editcpf").val();
		var email = $("#editemail").val();
		var cnh = $("#editcnh").val();
		var telefone = $("#edittelefone").val();
		var senha = $("#editpassword").val();
		var permissao = $("#editpermissao").val();
		var motorista = $("#editmotorista").val();

		

		$.post( "../model/editaFuncionario.php", {id: id, nome: nome, cpf: cpf, email: email, permissao: permissao, cnh: cnh, senha: senha, telefone: telefone, motorista: motorista}).done(function( data ) {
			console.log(data);
		});
	});
}