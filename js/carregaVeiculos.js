
function carregaVeiculos(){
	
	$(document).ready(function(){
		//$('#dataTable').empty(); //Limpando a tabela
		$.ajax({
			type:'post',		//Definimos o método HTTP usado
			dataType: 'json',	//Definimos o tipo de retorno
			url: '../model/consultaVeiculos.php',//Definindo o arquivo onde serão buscados os dados
			success: function(dados){
				for(var i=0;dados.length>i;i++){
					//Adicionando registros retornados na tabela
					$('#dataTable tbody').append('<tr id="'+ dados[i].id_veiculo +'"><td class="veiculo">'+  dados[i].marca+'</td><td>'+dados[i].placa+'</td><td>'+ dados[i].cor +'</td><td>'+dados[i].quilometragem + ' KMS' +'</td><td>'+ '<button type="button" data-role="update" data-id="'+ dados[i].id_veiculo +'" class="btn-circle btn-primary" id="checa'+ dados[i].id_veiculo +'" data-toggle="modal" data-target="#exibeVeiculo"><i class="fas fa-check"></i></button>' +'</td></tr>');
				}

				for (var i = 0; i < dados.length; i++) {
					$('#placas').append('<option value="'+ dados[i].id_veiculo + '">' + dados[i].placa +'</option>');
				}

				for (var i = 0; i < dados.length; i++) {
					$('#placas1').append('<option value="'+ dados[i].id_veiculo + '">' + dados[i].placa +'</option>');
					$('#placa2').append('<option value="'+ dados[i].id_veiculo + '">' + dados[i].placa +'</option>');
				}
			}


		});

});



	$(document).ready(function(){
		$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: '../model/consultaMotorista.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				$('#motorista1').append('<option value="'+ dados[i].id_usuario + '">' + dados[i].nome_usuario +'</option>');
				$('#motorista').append('<option value="'+ dados[i].id_usuario + '">' + dados[i].nome_usuario +'</option>');
				$('#motorista2').append('<option value="'+ dados[i].id_usuario + '">' + dados[i].nome_usuario +'</option>');
			}
		}
		});
	});
}



