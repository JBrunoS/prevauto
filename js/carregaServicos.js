
function carregaServicos(){
	
	$(document).ready(function(){
		//$('#dataTable').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaServicos.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#servicos').append('<option value="'+ dados[i].id_servicos + '">' + dados[i].nome_servico +'</option>');
			}
		}
	});
	});
}

