/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){	
	var res  =  $('input[name="optradio"]:checked').val();
	
	if (res=='S') {
		correcto("Correcto");
	}else if (res == 'N') {
		error("Favor de repetir el ejercicio");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}


function correcto(texto) {
		$('#correcta').text(texto);
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
}
function error(texto) {
		$('#error').text(texto);
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
}














