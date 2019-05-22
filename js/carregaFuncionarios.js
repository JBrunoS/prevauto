
function carregaFuncionarios(){
	
	$(document).ready(function(){
		//$('#dataTable').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaFuncionarios.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#dataTable tbody').append('<tr><td class="usuario">'+  dados[i].empresa+'</td><td>'+dados[i].nome_usuario+'</td><td>'+dados[i].cpf + '</td><td>'+dados[i].cnh +'</td><td>'+dados[i].motorista + '</td><td>'+dados[i].email + '</td><td>'+dados[i].telefone + '</td><td>' +dados[i].permissao + '</td><td>'+'<button type="button" class="btn-circle btn-primary" id="checa" onclick="mostrarMensagem();"><i class="fas fa-check"></i></button>' +'</td></tr>');
			}
		}
	});
	});
}

function carregaNomeFuncionarios(){
	$(document).ready(function(){
		//$('#dataTable').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaFuncionarios.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#nomes').append('<option value="'+ dados[i].nome_usuario + '">' + dados[i].nome_usuario + '</option>');
			}
		}
	});
	});
}


function carregaNomeFuncionariosLista(){
	$(document).ready(function(){
		//$('#dataTable').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaFuncionarios.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			$('#lista').append('<button type="button" class="list-group-item list-group-item-action active disabled">' + dados[0].nome_usuario +
  '</button>');
			for(var i=1;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#lista').append('<button type="button" class="list-group-item list-group-item-action">' + dados[i].nome_usuario +
  '</button>');
			}
		}
	});
	});
}

