/**
 * 
 */
function verificar(){	
	var num1 = document.getElementById("1").checked;
	var num2 = document.getElementById("2").checked;
	var num3 = document.getElementById("3").checked;
	var num4 = document.getElementById("4").checked;
	var num6 = document.getElementById("6").checked;
	var num7 = document.getElementById("7").checked;
	var num8 = document.getElementById("8").checked;
	var num12 = document.getElementById("12").checked;
	var num24 = document.getElementById("24").checked;
	
	
	if (num1 !=true && num2 !=true && num3 !=true && num4!=true && num6 !=true && num7!=true && num8!=true && num12 !=true && num24!=true) {
		error("Favor de seleccionar alguna de las opciones.");
	}else{
		if(num24 == true && num1 !=true && num2 !=true && num3 !=true && num4!=true && num6 !=true && num7!=true && num8!=true && num12 !=true){
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














