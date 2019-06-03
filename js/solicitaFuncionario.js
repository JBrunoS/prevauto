function mostraNomes(){
  $(function(){
    $("#nomes").change(function(){
    var codigo = $("#nomes option:selected").val();

    console.log(codigo);

      if (codigo != "") {
        $.post( "../model/solicitaFuncionario.php", {codigo: codigo}).done(function( data ) {
          var x = JSON.parse(data);

          $("#editid").val(x.id_usuario);
          $("#editnome").val(x.nome_usuario);
          $("#editcpf").val(x.cpf);
          $("#editemail").val(x.email);
          $("#editcnh").val(x.cnh);
          $("#edittelefone").val(x.telefone);
          $("#editpassword").val(x.senha);


        });

      }
    });
  });
}

function verificaNome(codigo){

  if (codigo != "") {
  $.post( "../model/solicitaFuncionario.php", {codigo: codigo}).done(function( data ) {
    var x = JSON.parse(data);

    var id = x.id_usuario;

    console.log(id);  

    deletaUsuario(id);

  });  
  }
  
}

function deletaUsuario(codigo){
  if (codigo != " ") {
    $.post("../model/deletaUsuario.php", {codigo: codigo}).done(function(data){
      alert("Excluido");
    });
  }
}