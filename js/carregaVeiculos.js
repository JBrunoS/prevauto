
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
					$('#placas').append('<option value="'+ dados[i].id_veiculo + '">' + dados[i].placa +'</option>');
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

function modeloVeiculos(){
  $(function(){
    $("#placas").change(function(){
    var id = $("#placas option:selected").val();

      if (id != "") {
        $.post( "../model/exibeInfoVeiculos.php", {id: id}).done(function( data ) {
          var x = JSON.parse(data);

          $("#veiculo1").val(x.id_veiculo);
        });

      }
    });
  });

  $(function(){
  	$("#placas1").change(function(){
    var id = $("#placas1 option:selected").val();

      if (id != "") {
        $.post( "../model/exibeInfoVeiculos.php", {id: id}).done(function( data ) {
          var x = JSON.parse(data);

          $("#veiculo").val(x.id_veiculo);
        });

      }
    });
  });

    $(function(){
  	$("#placa2").change(function(){
    var id = $("#placa2 option:selected").val();

      if (id != "") {
        $.post( "../model/exibeInfoVeiculos.php", {id: id}).done(function( data ) {
          var x = JSON.parse(data);
          $("#veiculo2").val(x.id_veiculo);
        });

      }
    });
  });
}



