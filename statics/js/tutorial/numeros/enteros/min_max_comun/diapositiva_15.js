
/**
 * 
 */
function valida_factor(factor1,factor2){
	var factor =document.getElementById("base"+factor1).value;
	var num=factor2.value;
	if (num =='' || num ==0) {
		document.getElementById("base"+(factor1+1)).value=0;
	}else{
	var modu=factor/num;
	var truk =this.trunc(modu,3);
	document.getElementById("base"+(factor1+1)).value=truk;
	}
}

/**
 * 
 */
function valida_factor1(factor1,factor2){
	var factor =document.getElementById("bas"+factor1).value;
	var num=factor2.value;
	if (num =='' || num ==0) {
		document.getElementById("bas"+(factor1+1)).value=0;
	}else{
	var modu=factor/num;
	var truk =this.trunc(modu,3);
	document.getElementById("bas"+(factor1+1)).value=truk;
	}
}
/**
 * 
 *
 * 
 */
function verificar(){
	var numeros = [2,3];
	var num1= new Number($("#num1").val());
	var num2= new Number($("#num2").val());
	
	if (isNaN(num1)||isNaN(num2)) {
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
	
}
/**
 * 
 */
function verificar20(){
	var num1= document.getElementById("minimo").value;
	if (num1 !='') {
		if (num1.trim() == "30,60" || num1.trim() == "60,30") {
			correcto("El ejercicio se realizo satisfactoriamente.");
		}else{
				error("Favor de repetir nuevamente.");
		}
	}else{
			error("Favor de ingresar los datos");
	}
}
/**
 * 
 */
function verificar24(){
	var num1= document.getElementById("mcd").value;
	var num2= document.getElementById("mcm").value;
	
	if (num1 !='' && num2 !='') {
		if (num1 == 2 || num1 == 3) {
			correcto("El ejercicio se realizo satisfactoriamente.");
		}else{
				error("Favor de repetir nuevamente.");
		}
	}else{
			error("Favor de ingresar los datos");
	}
}

/**
 * 
 */
function verificar18(){
	var num1= new Number($("#num1").val());
	if (num1 !='') {
		if (num1 == 5) {
			correcto("El ejercicio se realizo satisfactoriamente.");
		}else{
				error("Favor de repetir nuevamente.");
		}
	}else{
			error("Favor de ingresar los datos");
	}
}
/**
 * Metodo para eliminar los datos que se repiten en el arreglo 
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

/*
 * 
 */
function valida_area(arr_area,limite){
	
	var out=[];
	for(var i=0; i<arr_area.length; i++){
	  if(arr_area[i] != limite){
	  	out.push(i);	
	  }
	}	
	return out; 
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
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 5; i++) {
		document.getElementById("base"+i).value="";
		document.getElementById("altura"+i).value="";
	  	document.getElementById("area"+i).value="";
	}
	 
}
/**
 * 
 * @param {Object} x
 * @param {Object} posiciones
 */
function trunc (x, posiciones = 0) {
  var s = x.toString();
  var l = s.length;
  var decimalLength = s.indexOf('.') + 1;
  var numStr = s.substr(0, decimalLength + posiciones);
  return Number(numStr);
}
function correcto(texto) {
		$('#correcta').text(texto);
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
}
function error(texto) {
		$('#error').text(texto);
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
}

















