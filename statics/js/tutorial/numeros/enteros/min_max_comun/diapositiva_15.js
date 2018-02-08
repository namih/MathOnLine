
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
	var truk =this.trunc(modu,4);
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
	var num3= new Number($('#mcd').val());
	
	if (isNaN(num1)||isNaN(num2)) {
	error("Favor de ingresar solo números.");	
	this.clean_imput();
	}else{
		var array_num =[num1,num2];
		var array_order=array_num.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		
		if(tamanio.length == 2){
			if(this.compara_array(array_order,numeros)&& num3 ==6){
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
function verificar12(){
		var num1= new Number($("#cuadros").val());
		var num2= new Number($("#cm").val());
		if (num1 != ''){
			if (num1 == 24 && num2==32 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 *
 * 
 */
function verificar_17(){
	var numeros = [2,3];
	var num1= new Number($("#num1").val());
	var num2= new Number($("#num2").val());
	var num3= new Number($('#mcd_1').val());
	
	if (isNaN(num1)||isNaN(num2)) {
	error("Favor de ingresar solo números.");	
	this.clean_imput();
	}else{
		var array_num =[num1,num2];
		var array_order=array_num.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		
		if(tamanio.length == 2){
			if(this.compara_array(array_order,numeros)&& num3 ==12){
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
 * 
 */
function verificar22(){
	var num1= new Number($("#num5").val());
	var num2= new Number($("#num15").val());
	
	if (num1 !='' && num2 !='') {
		document.getElementById("min").innerHTML='='+(5*num1);
		document.getElementById("min_1").innerHTML='='+(15*num2);
		if (num1 == 3 && num2 ==1) {
			correcto("El ejercicio se realizó satisfactoriamente.");
			
		}else{
				error("Favor de repetir nuevamente.");
		}
	}else{
			error("Favor de ingresar los datos");
	}
}
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida23(){	
	var num11 = new Number($("#bas_1").val());
	var num22 = new Number($("#exp1").val());
	var num33 = new Number($("#bas_2").val());
	var num44 = new Number($("#exp2").val());
	var num55 = new Number($("#bas_3").val());
	var num66 = new Number($("#exp3").val());
	var num77 = new Number($("#bas_4").val());
	var num88 = new Number($("#exp4").val());
	
	if(num11!='' && num22!='' && num33!= '' && num44!= '' && num55!='' && num66!='' && num77!= '' && num88!= ''){
		if (num11==2 && num22 == 3 && num33 == 3 && num44 ==1 && num55==2 && num66==1 && num77==3 && num88==3) {
			correcto("El ejercicio se realizó satisfactoriamente.");
			
		}else{
			error("Favor de repetir el ejercicio.");
			}
	}else{
		error("Favor  de ingresar los datos");
	}
}
/**
 * 
 */
function verificar18_1(){
	var num1= new Number($("#num2").val());
	if (num1 !='') {
		if (num1 == 6) {
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
function verificar18_2(){
	var num1= new Number($("#num3").val());
	if (num1 !='') {
		if (num1 == 14) {
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
function verificar20(){
	var num1= document.getElementById("minimo").value;
	if (num1 !='') {
		if (num1.trim() ==30) {
			correcto("El ejercicio se realizó satisfactoriamente.");
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
		if (num1 == 4 && num2 == 12) {
			correcto("El ejercicio se realizó satisfactoriamente.");
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
function verificar25(){
	var num1= document.getElementById("seg").value;

	if (num1 !='') {
		if (num1 == 150) {
			correcto("El ejercicio se realizó satisfactoriamente.");
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
function verificar26(){
	var num1= document.getElementById("cm").value;
	var num2= document.getElementById("pedazos").value;
	
	if (num1 !='' && num2 != '') {
		if (num1 == 4 && num2==133) {
			correcto("El ejercicio se realizó satisfactoriamente.");
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
function verificar27(){
	var num1 = new Number($("#1").val());
	var num2 = new Number($("#2").val());
	var num3 = new Number($("#3").val());
	var num4 = new Number($("#4").val());
	if (num1 !='' && num2 != '' && num3 !='' && num4 != '') {
		if (num1 == 138 && num2==150 && num3==174  && num4==186 ) {
			correcto("El ejercicio se realizó satisfactoriamente.");
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
function verificar28(){
		var num1= new Number($("#1").val());
		var res ;
		if (num1 != ''){
			document.getElementById("2").value =num1;
			document.getElementById("3").value =num1;
			res =num1*num1;
			document.getElementById("4").value =res;
			if (res == 49) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}
/**
 * 
 */
function verificar28_1(){
		var num1= new Number($("#5").val());
		var res ;
		if (num1 != ''){
			document.getElementById("6").value =num1;
			document.getElementById("7").value =num1;
			res =num1*num1;
			document.getElementById("8").value =res;
			if (res == 144) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}
/**
 * 
 */
function verificar28_2(){
		var num1= new Number($("#9").val());
		var res ;
		if (num1 != ''){
			document.getElementById("10").value =num1;
			document.getElementById("11").value =num1;
			res =num1*num1;
			document.getElementById("12").value =res;
			if (res == 36) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}
/**
 * 
 */
function verificar29(){
		var num1= new Number($("#1").val());
		var res ;
		if (num1 != ''){
			document.getElementById("2").value =num1;
			document.getElementById("3").value =num1;
			document.getElementById("4").value =num1;
			res =num1*num1*num1;
			document.getElementById("5").value =res;
			if (res == 64) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar29_1(){
		var num1= new Number($("#6").val());
		var res ;
		if (num1 != ''){
			document.getElementById("7").value =num1;
			document.getElementById("8").value =num1;
			document.getElementById("9").value =num1;
			res =num1*num1*num1;
			document.getElementById("10").value =res;
			if (res == 125) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar29_2(){
		var num1= new Number($("#11").val());
		var res ;
		if (num1 != ''){
			document.getElementById("12").value =num1;
			document.getElementById("13").value =num1;
			document.getElementById("14").value =num1;
			res =num1*num1*num1;
			document.getElementById("15").value =res;
			if (res == 27) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}			
/**
 * 
 */
function verificar30(){
		var num1= new Number($("#num1").val());
		var num2= new Number($("#num2").val());
		
		
		if (num1 != '' && num2 != ''){
			if (num1 == 5 && num2 ==5) {
				document.getElementById('tex').style.display='block';
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar31(){
		var num1= new Number($("#1").val());
		var res ;
		if (num1 != ''){
			document.getElementById("2").value =num1;
			document.getElementById("3").value =num1;
			res =num1*num1;
			document.getElementById("4").value =res;
			if (res == 121) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar32(){
		var num1= new Number($("#1").val());
		var num2= new Number($("#2").val());
		var num3= new Number($("#3").val());
		var num4= new Number($("#4").val());
		
		var res ;
		if (num1 != '' ||num2 != ''||num3 != ''){
			res =num1*num2*num3;
			document.getElementById("4").value =res;
			if (res == 64) {
				document.getElementById('tex').style.display='block';
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar33(){
		var num1= new Number($("#1").val());
		var res ;
		if (num1 != ''){
			document.getElementById("2").value =num1;
			document.getElementById("3").value =num1;
			document.getElementById("4").value =num1;
			res =num1*num1*num1;
			document.getElementById("5").value =res;
			if (res == 8) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
			
			
		}else{
			error("Favor de ingresar los datos.");
		}
}		
/**
 * 
 */
function verificar34(){
		var num1= new Number($("#num1").val());
		var num2= new Number($("#num2").val());
		var num3= new Number($("#num3").val());
		var res ;
		if (num1 != '' && num2 != '' && num3 != ''){
			if (num1 == 5 && num2 == 5 && num3 == 5) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
	}		
/**
 * 
 */
function verificar35(){
		var num1= new Number($("#1").val());
		if (num1 != ''){
			if (num1 == 6) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar36(){
		var num1= new Number($("#1").val());
		if (num1 != ''){
			if (num1 == 8) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar36_1(){
		var num1= new Number($("#2").val());
		if (num1 != ''){
			if (num1 == 9) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
	}	
/**
 * 
 */
function verificar36_2(){
		var num1= new Number($("#3").val());
		if (num1 != ''){
			if (num1 == 12) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
	}			
	
/**
 * 
 */
function verificar37(){
		var num1= new Number($("#num1").val());
		var num2= new Number($("#num2").val());
		var num3= new Number($("#num3").val());
		var num4= new Number($("#ra1").val());
		var num5= new Number($("#ra2").val());
	
		if (num1 != '' ||num2 != '' ||num3 != '' ||num4 != '' ||num5 != ''){
			var res = num4*num5;
			if (num1 == 2 && num2 == 2 && num3 ==4 && res ==72) {
				document.getElementById("ra3").value=res;
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}						
/**
 * 
 */
function verificar38(){
		var num1= new Number($("#1").val());
		
		if (num1 != ''){
			if (num1 == 410 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function verificar38_1(){
		var num1= new Number($("#2").val());
		
		if (num1 != ''){
			if (num1 == 58 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function verificar38_2(){
		var num1= new Number($("#3").val());
		
		if (num1 != ''){
			if (num1 == 62 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}		
/**
 * 
 */
function verificar39(){
		var num1= new Number($("#1").val());
		
		if (num1 != ''){
			if (num1 == 8 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}		
/**
 * 
 */
function verificar39_1(){
		var num1= new Number($("#2").val());
		
		if (num1 != ''){
			if (num1 == 9 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function verificar39_2(){
		var num1= new Number($("#3").val());
		
		if (num1 != ''){
			if (num1 == 13 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}			
/**
 * 
 */
function verificar40(){
		var num1= new Number($("#1").val());
		
		if (num1 != ''){
			if (num1 == 18 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function verificar40_1(){
		var num1= new Number($("#2").val());
		
		if (num1 != ''){
			if (num1 == 170 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function verificar40_2(){
		var num1= new Number($("#3").val());
		
		if (num1 != ''){
			if (num1 == 18 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}
/**
 * 
 */
function verificar41(){
	var num1= new Number($("#num1").val());
		
		if (num1 != ''){
			if (num1 == 144 ) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function verificar42(){
		var num1= new Number($("#num1").val());
		var num2= new Number($("#num2").val());
		var num3= new Number($("#num3").val());
		
		if (num1 != '' && num2 != '' && num3 != ''){
			if (num1 == 24 && num2==7 && num3==5) {
				correcto("El ejercicio se realizó exitosamente");
			}else{
				error("Favor de volver a repetir");
			}
		}else{
			error("Favor de ingresar los datos.");
		}
}	
/**
 * 
 */
function ejercicio2(){
	document.getElementById('div_1').style.display='none';
	document.getElementById('div_2').style.display='block';
	
}
/**
 * 
 */
function ejercicio3(){
	document.getElementById('div_2').style.display='none';
	document.getElementById('div_3').style.display='block';
	
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
function trunc (x, posiciones =0) {
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

















