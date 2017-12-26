/**
 * 
 */
function verificar(){	
	var num1 = document.getElementById("1").checked;
	var num2 = document.getElementById("2").checked;
	var num3 = document.getElementById("3").checked;
	var num4 = document.getElementById("4").checked;

	
	if (num1 !=true && num2 !=true && num3 !=true && num4!=true) {
		error("Favor de seleccionar alguna de las opciones.");
	}else{
		if(num4 == true && num1 !=true && num2 !=true && num3 !=true ){
			correcto("EL ejercicio se realizó satisfactoriamente");
		}else{
			error("Favor de repetir el ejercicio");
		}
	}
}

/**
 * 
 * @param {Object} texto
 */
function correcto(texto) {
		$('#correcta').text(texto);
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
}
/**
 * 
 * @param {Object} texto
 */
function error(texto) {
		$('#error').text(texto);
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
}














