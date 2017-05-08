function buscarinforme(){

    var dato = $("#dato_buscado").val();
    
    if(dato == "")
    {
      var url="/validado/informes/resultados-informesfiltro/"+ " " +"";
    }
    else
    {
      var url="/validado/informes/resultados-informesfiltro/"+ dato +"";
    }

    $.get(url,function(resul){
        $("#contenido_principal").html(resul);  
    })
}


$(document).ready(function() {

  buscarinforme();

  $(document).on('click', '.pagination a', function (e) {
              debugger;

              getPaginar($(this).attr('href').split('page=')[1]);
              e.preventDefault();
  });
});

function getPaginar(page) {
  
  var url='/validado/informes/resultados-informesfiltro/?page=' + page;

  $.get(url,function(resul){
    $("#contenido_principal").html(resul);  
  })      
}
