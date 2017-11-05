/**
 * 
 */
function verificar(){	
	//var res  =  $('input[name="optradio"]:checked').val();
	var num14 = document.getElementById("14").checked;
	var num17 = document.getElementById("17").checked;
	var num21 = document.getElementById("21").checked;
	var num28 = document.getElementById("28").checked;
	var num34 = document.getElementById("37").checked;
	var num41 = document.getElementById("41").checked;
	
	if (num14 !=true && num17 !=true && num21 !=true && num28!=true && num34 !=true && num41!=true) {
		error("Favor de seleccionar alguna de las opciones.");
	}else{
		if(num14 == true && num21 == true && num28 == true){
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














