/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){	
	
	var numeros = [1,2,4,8,16];
	alert(numeros);
	var num1= new Number($("#1").val());
	var num2= new Number($("#2").val());
	var num3= new Number($("#3").val());
	var num4= new Number($("#4").val());
	var num5= new Number($("#5").val());
	
	
	if (isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)||isNaN(num5)) {
		var array_num =[num1,num2,num3,num4,num5];
		alert("array_num"+array_num);
		alert("Favor de ingresar solo números.");	
		this.clean_imput();
	}else{
		var array_num =[num1,num2,num3,num4,num5];
		var array_order=array_num.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		//alert(tamanio.length);
		if(tamanio.length == 5){
			if(this.compara_array(array_order,numeros)){
			alert("El ejercicio se realizo satisfactoriamente.");
			this.clean_imput();
			
			}else{
			alert("Favor de repetir nuevamente.");
			this.clean_imput();
			}
		}else{
			alert("Los valores no deben de repetirse.");
			this.clean_imput();
		}
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

/**
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 6; i++) {
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
	if(cont==5){
		return true;
	}else{
		return false;
	}
}














