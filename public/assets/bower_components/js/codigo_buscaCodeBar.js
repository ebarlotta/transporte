/*CODIGO BUSCA CODIGO DE BARRAS JS*/
/*Funcion para el input del codigo de barras*/
$.fn.delayPasteKeyUp = function(fn, ms)
{
	var timer = 0;
	$(this).on("propertychange input", function()
	{
	 clearTimeout(timer);
	 timer = setTimeout(fn, ms);
	});
};
/*Funcion para el input del codigo de barras*/
$(document).ready(function(){ 
	var codeBar;
	$('#buscaCodigo').on('input', limpiacampos); 	
	$("#buscaCodigo").delayPasteKeyUp(function(){		
		codeBar = $('#buscaCodigo').val();		
		if(codeBar != ""){
			$.ajax({
				  url: "../libreria/ORM/buscar_CodeBar.php",
				  type: "POST",
				  datatype:"json",    
				  data:  {codeBar},    
				  success: function(data) {
						//console.log(data);			
						//recibo el json desde PHP y lo parseo	
						var datos = JSON.parse(data);		
					    //alert(datos.length);
						if (!$.trim(data) || datos.length == 0){														
						   $('#id').val('');
						   $('#codigo').val('');
						   $('#nombre').val('')
						   $('#precioVenta').val('');
						   $('#stock').val('')
						}else {	
						   $('#id').val(datos[0].id);    
						   $('#codigo').val(datos[0].codigo);
						   $('#nombre').val(datos[0].nombre);
						   $('#precioVenta').val(datos[0].precioVenta);
						   $('#stock').val(datos[0].stock);						  
						   var maximo = data[0].stock;
						   //para que la cantidad no supere el stock de ese momento
						   $('#cantidad').attr({
						     'max' : maximo ,
						     'min' : 1
							});
						   $('#precioVenta').prop('disabled', false);
						   $('#cantidad').prop('disabled', false);
						   $('#descuento').prop('disabled', false);
						}		
					},			
					error: function (request, status, error) {
						alert(request.responseText);
					}
				});			
		}else{
			limpiacampos();
		}
	$('#buscaCodigo').val("");	
	},20); //200ms para que borre el texto del input, como en los supermercados
	
	// Función para borrar los campos si la búsqueda está vacía
    function limpiacampos(){
       codeBar = $('#buscaCodigo').val();		
       if(codeBar == ""){
	       $('#codigo').val('');
           $('#nombre').val('')
           $('#precioVenta').val('');
           $('#stock').val('')
       }
    }
});	