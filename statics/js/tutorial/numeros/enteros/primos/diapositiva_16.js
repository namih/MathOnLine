/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){
	var numeros = [9,10];
	
	var num1= new Number($("#1").val());
	var num2= new Number($("#2").val());
	
	if (document.getElementById("1").value != '' && document.getElementById("2").value != '') {
		if (isNaN(num1)||isNaN(num2)) {
			var array_num =[num1,num2];
			//alert("array_num"+array_num);
			error("Favor de ingresar solo números.");	
			this.clean_imput();
		}else{
			var array_num =[num1,num2];
			var array_order=array_num.sort(function(a, b){return a-b});
			var tamanio=this.eliminateDuplicates(array_order);
			
			if(tamanio.length == 2){
				if(this.compara_array(array_order,numeros)){
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
	for (var i=1; i < 3; i++) {
	  document.getElementById(i).value="";
	}
	 
}
/**
 * Metodo para comparar arreglos
 * @param {Object} arr1
 * @param {Object} arr2
 */
function compara_array(arr1,arr2){
	var cont=0;
	for(var i=0,j=arr1.length; i<j; i++){
	  if(arr1[i]==arr2[i]){
	  	cont=cont+1;
	  }
	}	
	if(cont==2){
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













