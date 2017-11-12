var arr_or=[51,52,54,55,56,57,58,60,62,63,64,65,66,68,69,70,72,74,75,76,77,78,80,81,82,84,85,86,87,88,90,91,92,93,94,95,96,98,99,100];
var arreglo_resaltar=[];
var compara =false;
/**
 * 
 */
function color(num) {
	arreglo_resaltar.push(num);
	document.getElementById(num).style.background='#388e3c';
}
/**
 * 
 */
function verificar(){

	var array_order=arreglo_resaltar.sort(function(a, b){return a-b});
	var duplicado = this.eliminateDuplicates(array_order);
	if (duplicado.length==40) {
		if(compara_array(array_order,arr_or,40)){
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Repetir el ejercicio.");
		}
	}else{
		
		error("Repetir el ejercicio.");
	}
}

/**
 * Metodo para eliminar los datos que se repiten en el areglo 
 */
function eliminateDuplicates(arr) {
 	 var i,
     len=arr.length,
     out=[],
     obj={};

 	for (i=0;i<len;i++) {
    	obj[arr[i]]=0;
 	}
 	for (i in obj) {
    	out.push(i);
 	}
 	return out;
}	

	
	function compara_array(arr1,arr2,cont1){
	var cont=0;
	for(var i=0,j=arr1.length; i<j; i++){
	  if(arr1[i]==arr2[i]){
	  	cont=cont+1;
	  }
	}	
	if(cont==cont1){
		return true;
	}else{
		return false;
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

















