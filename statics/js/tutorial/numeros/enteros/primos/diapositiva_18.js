/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){
	var numeros9 = [3,5];
	var numeros10 = [2,5];
	
	
	var num1 = new Number($("#1").val());
	var num2 = new Number($("#2").val());
	var num3 = new Number($("#3").val());
	var num4 = new Number($("#4").val());
	
	
	if (document.getElementById("1").value != '' && document.getElementById("2").value != '' && document.getElementById("3").value != '' && document.getElementById("4").value != '') {
		if (isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)) {
			error("Favor de ingresar solo números.");	
			this.clean_imput();
		}else{
			var array_num9 = [num1,num2];
			var array_num10 = [num3,num4];
		
			var array_order_9 = array_num9.sort(function(a, b){return a-b});
			var tamanio_9 = array_order_9;//this.eliminateDuplicates(array_order_9);
			
			var array_order_10 = array_num10.sort(function(a, b){return a-b});
			var tamanio_10 = this.eliminateDuplicates(array_order_10);
			
		
			if(tamanio_9.length == 2 && tamanio_10.length == 2 ){
				if((this.compara_array(array_order_9,numeros9,2)) == true && (this.compara_array(array_order_10,numeros10,2)) == true){
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
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 *Metodo para eliminar los datos que se repiten en el arreglo  
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
	for (var i=1; i < 9; i++) {
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
	if(cont == contador){
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













