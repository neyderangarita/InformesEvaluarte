function buscarusuario(){

  	var dato = $("#dato_buscado").val();
    
    if(dato == "")
    {
      alert("Consulta vacia");
    }
    else
    {
      //var url="buscar_usuarios/"+pais+"/"+dato+"";
      alert(dato);
    }
  
  	/*
    $("#contenido_principal").html($("#cargador_empresa").html());

    $.get(url,function(resul){
        $("#contenido_principal").html(resul);  
      })

	*/
}
