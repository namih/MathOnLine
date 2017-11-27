/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida1(){	
	var res  =  $('input[name="optradio"]:checked').val();
	var num  = document.getElementById("base1").value;
	var fact = document.getElementById("altura1").value;
	var res1  = num/fact;
	if (res=='S' && res1 == 75) {
		correcto("Correcto");
	}else if (res == 'N' && res1 != 75) {
		error("Favor de repetir el ejercicio");
	}else if (res == 'N' && res1 == 75) {
		error("Favor de repetir el ejercicio.");
	}else if (res == 'S' && res1 != 75) {
		error("Favor de repetir el ejercicio.");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida2(){	
	var res  =  $('input[name="optradio"]:checked').val();
	var num  = document.getElementById("base2").value;
	var fact = document.getElementById("altura2").value;
	var res1  = num/fact;
	if (res=='S' && res1 == 25) {
		correcto("Correcto");
	}else if (res == 'N' && res1 != 25) {
		error("Favor de repetir el ejercicio");
	}else if (res == 'N' && res1 == 25) {
		error("Favor de repetir el ejercicio.");
	}else if (res == 'S' && res1 != 25) {
		error("Favor de repetir el ejercicio.");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida3(){	
	var res  =  $('input[name="optradio"]:checked').val();
	var num  = document.getElementById("base3").value;
	var fact = document.getElementById("altura3").value;
	var res1  = num/fact;
	var trunk =this.trunc(res1,2);
	if (res=='N' && trunk == 8.33) {
		correcto("Correcto");
	}else if (res == 'S' && trunk == 8.33) {
		error("Favor de repetir el ejercicio");
	}else if (res == 'S' && trunk != 8.33) {
		error("Favor de repetir el ejercicio");
	}else if (res == 'N' && trunk != 8.33) {
		error("Favor de repetir el ejercicio");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida4(){	
	var res  =  $('input[name="optradio"]:checked').val();
	var num  = document.getElementById("base3").value;
	var fact = document.getElementById("altura3").value;
	var res1  = num/fact;
	if (res=='S' && res1 == 5) {
		correcto("Correcto");
	}else if (res == 'N' && res1 != 5) {
		error("Favor de repetir el ejercicio");
	}else if (res == 'N' && res1 == 5) {
		error("Favor de repetir el ejercicio.");
	}else if (res == 'S' && res1 != 5) {
		error("Favor de repetir el ejercicio.");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}

/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida5(){	
	var arr_num = [2,2,2,3,3];
	var arr_factores=[];
	for(var i=1; i<6;i++){
		arr_factores.push(new Number($("#altura"+i).val()));
	}	
	var compara = this.compara_array(arr_num,arr_factores,5);
	if ( compara== true) {
		correcto("El ejercicio se resolvió satisfactoriamente.");
	} else{
		error("Favor de repetir el ejercicio.");
	};
}

/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida7(){	
	var num1 = "8x8";
	var num2 = "8 x 8";
	var num3 = "8X8";
	var num4 = "8 X 8";
	var producto =  document.getElementById("exp").value;
	
	if(producto==num1 || producto==num2 || producto==num3 || producto==num4 ){
		correcto("El ejercicio se realizó satisfactoriamente.");
	}else{
		error("Favor de repetir el ejercicio.");
	}
}

/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida8(){	
	var num1 = "2x2x2x2x5x5";
	var num2 = "2 x 2 x 2 x 2 x 5 x 5";
	var num3 = "2X2X2X2X5X5";
	var num4 = "2 X 2 X 2 X 2 X 5 X 5";
	var producto =  document.getElementById("exp").value;
	var arr_num = [2,2,2,2,5,5];
	var arr_factores=[];
	for(var i=1; i<7;i++){
		arr_factores.push(new Number($("#altura"+i).val()));
	}	
	var compara = this.compara_array(arr_num,arr_factores,6);
	if((producto==num1 || producto==num2 || producto==num3 || producto==num4) &&  compara == true){
		correcto("El ejercicio se realizó satisfactoriamente.");
	}else{
		error("Favor de repetir el ejercicio.");
	}
}
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida9(){	
	var num1 = "2x2x2x3x5";
	var num2 = "2 x 2 x 2 x 3 x 5";
	var num3 = "2X2X2X2X5X5";
	var num4 = "2 X 2 X 2 X 3 X 5";
	var producto =  document.getElementById("exp").value;
	var arr_num = [2,2,2,3,5];
	var arr_factores=[];
	for(var i=1; i<6;i++){
		arr_factores.push(new Number($("#altura"+i).val()));
	}	
	var compara = this.compara_array(arr_num,arr_factores,5);
	if((producto==num1 || producto==num2 || producto==num3 || producto==num4) &&  compara == true){
		correcto("El ejercicio se realizó satisfactoriamente.");
	}else{
		error("Favor de repetir el ejercicio.");
	}
}
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
function valida_area(arr_area){
	
	var out=[];
	for(var i=0; i<arr_area.length; i++){
	  if(arr_area[i] != 18){
	  	out.push(i);	
	  }
	}	
	return out; 
}

/**
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 4; i++) {
		document.getElementById("base"+i).value="";
		document.getElementById("altura"+i).value="";
	  	document.getElementById("area"+i).value="";
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














