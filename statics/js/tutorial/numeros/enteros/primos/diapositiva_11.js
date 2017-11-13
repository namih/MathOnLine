/**
 * 
 */
function verificar(){
	var primos  = Array(document.getElementById("primos").value);
	var arr_primos = Array("53,59,61,67,71,73,79,83,89,97"); 
	
	var res = array_diff(primos,arr_primos);
	if(res.length == 0){
		correcto("El ejercicio se realizó exitosamente");
	}else{
		error("Favor de repetir el ejercicio");
	}
	
}
/**
 * 
 */
function verificar12(){
	
	var primo12 = new Number($("#primo12").val());
	
	if (document.getElementById("primo12").value != '') {
	if (primo12 == 101) {
		correcto("El ejercicio se realizó exitosamente");
	}else{
		error("Repetir el ejercicio.");
	}
	}else{
		error("Favor de ingresar el dato.");
	}
}
/**
 * 
 */
function verificar13(){
	var primo13 = new Number($("#primo13").val());
	
	if (document.getElementById("primo13").value != '') {
	if (primo13 == 997) {
		correcto("El ejercicio se realizó exitosamente");
	}else{
		error("Repetir el ejercicio.");
	}
	}else{
		error("Favor de ingresar el dato.");
	}
}

function verificar14(){
	var factores_primos  = Array(document.getElementById("factor_primo").value);
	var arr_primos = Array("2,3,5"); 
	
	if (document.getElementById("factor_primo").value != '') {
		var res = array_diff(factores_primos,arr_primos);
		if(res.length == 0){
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de repetir el ejercicio");
		}
	}else{
		error("Favor de ingresar los datos");
	}
}

/**
 * 
 * @param {Object} array1
 * @param {Object} array2
 */
function array_diff(array1, array2){
    var difference = $.grep(array1, function(el) { return $.inArray(el,array2) < 0});
    return difference.concat($.grep(array2, function(el) { return $.inArray(el,array1) < 0}));;
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
