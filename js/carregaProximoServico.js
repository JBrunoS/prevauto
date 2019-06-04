
function carregaProximoServico(){
	
	$(document).ready(function(){
		//$('#dataTable').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaProximoServico.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#dataTable tbody').append('<tr>' +
                      '<td> '+ dados[i].marca +' </td>' +
                      '<td> '+ dados[i].placa +' </td>' +
                      '<td> '+ dados[i].nome_servico +' </td>' +
                      '<td> '+ dados[i].data_servico +' </td>' +
                      '<td></td>' +
                      '<td> '+ dados[i].valor +' </td>' +
                      '<td><button type="button" class="btn-circle btn-primary"  onclick="mostrarMensagem();">' +
                        '<i class="fas fa-check"></i>' + 
                      '</button></td>' +
                    '</tr>');
			}
		}
	});
	});
}

