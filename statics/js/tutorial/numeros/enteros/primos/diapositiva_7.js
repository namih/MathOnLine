/**
 * 
 */
function verificar(){
	var num1 = new Number($("#1").val());
	var num2 = new Number($("#2").val());
	var num3 = new Number($("#3").val());
	var num4 = new Number($("#4").val());

	var arr_num =[1,3,7,9];
	
	
	if (isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)) {
		
		error("Favor de ingresar solo números.");	
		this.clean_imput();
	}else{
		var arr_primo = [num1,num2,num3,num4];
		var array_order=arr_primo.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		
		if(tamanio.length == 4){
			if(this.compara_array(array_order,arr_num,4)){
			correcto("El ejercicio se realizo satisfactoriamente.");
			this.clean_imput();
			
			}else{
			error("Favor de repetir nuevamente.");
			this.clean_imput();
			}
		}else{
			error("Los valores no deben de repetirse.");
			this.clean_imput();
		}
	}	
}

/**
 * 
 */
function verificar8(){
	var primo8 = new Number($("#primo1").val());
	
	if (document.getElementById("primo1").value != '') {
	if (primo8 == 1) {
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
function verificar9(){
	var primo9 = new Number($("#primo9").val());
	
	if (document.getElementById("primo9").value != '') {
	if (primo9 == 14) {
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

/**
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 5; i++) {
	  document.getElementById(i).value="";
	}
	 
}
/**
 * Metodo para comparar arreglos
 * @param {Object} arr1
 * @param {Object} arr2
 */
function compara_array(arr1,arr2,contador){
	var cont=0;
	for(var i=0,j=arr1.length; i<j; i++){
	  if(arr1[i]==arr2[i]){
	  	cont=cont+1;
	  }
	}	
	if(cont==contador){
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












