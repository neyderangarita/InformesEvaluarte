function buscarusuario(){

    var dato = $("#dato_buscado").val();
    
    if(dato == "")
    {
      var url="/validado/usuario/listar-usuariosfiltro/"+ " " +"";
    }
    else
    {
      var url="/validado/usuario/listar-usuariosfiltro/"+ dato +"";
    }

    $.get(url,function(resul){
        $("#contenido_principal").html(resul);  
    })
}


$(document).ready(function() {

  buscarusuario();
  $(document).on('click', '.pagination a', function (e) {
              debugger;

              getPaginar($(this).attr('href').split('page=')[1]);
              e.preventDefault();
  });
});

function getPaginar(page) {
  
  var url='/validado/usuario/listar-usuariosfiltro/?page=' + page;

  $.get(url,function(resul){
    $("#contenido_principal").html(resul);  
  })      
}
