
function carregaVeiculos(){
	
	$(document).ready(function(){
		$('#tabela').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaVeiculos.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#dataTable tbody').append('<tr><td>'+dados[i].marca+'</td><td>'+dados[i].placa+'</td><td>'+dados[i].quilometragem+'</td><td>'+ '<button type="button" class="btn-circle btn-primary" onclick="mostrarMensagem();"><i class="fas fa-check"></i></button>' +'</td></tr>');
			}
		}
	});
	});
}

