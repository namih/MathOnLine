var arr_or=[1,4,6,8,9,10,12,14,15,16,18,20,21,22,24,25,26,27,28,30,32,33,34,35,36,38,39,40,42,44,45,46,48,49,50];
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
	if (duplicado.length==35) {
		if(compara_array(array_order,arr_or,35)){
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

















