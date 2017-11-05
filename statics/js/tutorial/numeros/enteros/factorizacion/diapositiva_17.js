/**
 * 
 */
function verificar(){	
	var num18 = document.getElementById("18").checked;
	var num24 = document.getElementById("24").checked;
	var num28 = document.getElementById("28").checked;
	var num32 = document.getElementById("32").checked;
	var num48 = document.getElementById("48").checked;
	var num96 = document.getElementById("96").checked;
	
	
	if (num18 !=true && num24 !=true && num28 !=true && num32!=true && num48 !=true && num96!=true) {
		error("Favor de seleccionar alguna de las opciones.");
	}else{
		if(num24 == true && num32 == true && num48 == true && num96 == true){
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














