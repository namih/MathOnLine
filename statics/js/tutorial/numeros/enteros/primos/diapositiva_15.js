/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){	
	var factores_12 = [1,2,3,4,6,12];
	var primos_2 = [2,3];
	var multi_2 = [2,2,3];
	var arr_factores=[];
	var arr_primos=[];
	var arr_multi = [];
	var compara_factor=false;
	var compara_primo=false;
	var compara_multi=false;
	var tamanio_factor;
	var tamanio_primo;
	var tamanio_multi;
	var array_order_fac;
	var array_order_primo;
	var array_order_multi;
	for(var i=1; i<7;i++){
		arr_factores.push(new Number($("#"+i).val()));
	}
	for(var i=7; i<9;i++){
		arr_primos.push(new Number($("#"+i).val()));
	}
	for(var i=9; i<12;i++){
		arr_multi.push(new Number($("#"+i).val()));
	}
	array_order_fac = arr_factores.sort(function(a, b){return a-b});
	tamanio_factor = this.eliminateDuplicates(array_order_fac);
	if (tamanio_factor.length == 6){
		compara_factor=compara_array(array_order_fac,factores_12,6);
	}
	
	array_order_primo = arr_primos.sort(function(a, b){return a-b});
	tamanio_primo = this.eliminateDuplicates(array_order_primo);
	if (tamanio_primo.length == 2){
		compara_primo=compara_array(array_order_primo,primos_2,2);
	}
	
	array_order_multi = arr_multi.sort(function(a, b){return a-b});
	compara_multi=compara_array(array_order_multi,multi_2,3);
	
	if (compara_factor == true && compara_primo == true && compara_multi == true) {
		correcto("El ejercicio se realizó correctamente");
		
	}else{
		error("Favor de repetir.");
		clean_imput();
	}
	// alert("arr_factores"+ arr_factores);
	// alert("arr_primos "+arr_primos);
	// alert("arr_multi"+arr_multi);
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
	for (var i=1; i < 12; i++) {
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












