/**
 * 
 *
 * 
 */
function verificar(){
	var arr_12 = [12,24,36,48,60,72,84,96,108,120];
	var arr_15 = [15,30,45,60,75,90,105,120,135,150];
	
	var arr_num12 =[];
	var arr_num15 =[];
	
	for(var i=1; i<11;i++){
		arr_num12.push(new Number($("#altura"+i).val()));
	}
	for(var i=1; i<11;i++){
		arr_num15.push(new Number($("#area"+i).val()));
	}
	
	var cont =0;
	
	for (var i=0; i < arr_12.length; i++) {
		if (arr_12[i]!=arr_num12[i]) {
			document.getElementById("altura"+(i+1)).style.color='red';
			cont=cont+1;
		}
	}
	for (var j=0; j< arr_15.length; j++) {
		if (arr_15[j]!=arr_num15[j]) {
			document.getElementById("area"+(j+1)).style.color='red';
			cont=cont+1;
		}
	}
	if (cont==0) {
		correcto("El ejercicio se realizo satisfactoriamente.");
	}else{
		error("Favor de verificar");
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
function valida_valor(arr_1,arr_2){
	
	var out=[];
	for(var i=0; i<arr_area.length; i++){
	  if(arr_1[i] != arr_2[i]){
	  	out.push(i);	
	  }
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
function trunc (x, posiciones) {
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

















