/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){

	var factor1  = Array(document.getElementById("altura1").value);
	var factor2  = Array(document.getElementById("altura2").value);
	var factor3  = Array(document.getElementById("altura3").value);
	var factor4  = Array(document.getElementById("altura4").value);
	var factor5  = Array(document.getElementById("altura5").value);
	var factor6  = Array(document.getElementById("altura6").value);
	var factor7  = Array(document.getElementById("altura7").value);
	var factor8  = Array(document.getElementById("altura8").value);
	var factor9  = Array(document.getElementById("altura9").value);
	var factor10 = Array(document.getElementById("altura10").value);
	
	var numfact1 = new Number($("#area1").val());
	var numfact2 = new Number($("#area2").val());
	var numfact3 = new Number($("#area3").val());
	var numfact4 = new Number($("#area4").val());
	var numfact5 = new Number($("#area5").val());
	var numfact6 = new Number($("#area6").val());
	var numfact7 = new Number($("#area7").val());
	var numfact8 = new Number($("#area8").val());
	var numfact9 = new Number($("#area9").val());
	var numfact10 = new Number($("#area10").val());
	
	
	var prim1 = new Number($("#prim1").val());
	var prim2 = new Number($("#prim2").val());
	var prim3 = new Number($("#prim3").val());
	var prim4 = new Number($("#prim4").val());

	var fact1 = Array("1");
	var fact2 = Array("1,2");
	var fact3 = Array("1,3");
	var fact4 = Array("1,2,4");
	var fact5 = Array("1,5");
	var fact6 = Array("1,2,3,6");
	var fact7 = Array("1,7");
	var fact8 = Array("1,2,4,8");
	var fact9 = Array("1,3,9");
	var fact10 =Array("1,2,5,10");
	
	var arr_factor=[factor1,factor2,factor3,factor4,factor5,factor6,factor7,factor8,factor9,factor10];
	var arr_fact = [fact1,fact2,fact3,fact4,fact5,fact6,fact7,fact8,fact9,fact10]; 
	var arr_numfactor = [numfact1,numfact2,numfact3,numfact4,numfact5,numfact6,numfact7,numfact8,numfact9,numfact10];
	var arr_numfact = [1,2,2,3,2,4,2,4,3,4];
	var arr_primod = [2,3,5,7];
	var arr_primo = [prim1,prim2,prim3,prim4];
	var diff =[];
	var res;
	
	var num1 = document.getElementById("1").checked;
	var num2 = document.getElementById("2").checked;
	var num3 = document.getElementById("3").checked;
	var num4 = document.getElementById("4").checked;
	var num5 = document.getElementById("5").checked;
	var num6 = document.getElementById("6").checked;
	var num7 = document.getElementById("7").checked;
	var num8 = document.getElementById("8").checked;
	var num9 = document.getElementById("9").checked;
	var num10 = document.getElementById("10").checked;
	for (var i=0 ; i<arr_factor.length;i++){
		res=array_diff(arr_factor[i], arr_fact[i]);
		diff[i]=res.length;
	}
	var compara = false;
	var array_num =[num1,num2,num3,num4,num5,num6];
	var array_order=arr_primo.sort(function(a, b){return a-b});
	var tamanio=this.eliminateDuplicates(array_order);

	if (tamanio.length == 4){
		compara=compara_array(array_order,arr_primod,4);
	}
	
	var valida_factores=valida_area(diff);
	var arr_compara = compara_array(arr_numfactor,arr_numfact,10);
	
	if (valida_factores.length == 0 && arr_compara==true && num2 == true && num3== true && num5 == true && num7 == true && compara == true ) {
		correcto("Ejercicio realizado satisfactoriamente");
	}else{
		error ("error");
		this.clean_imput();
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


function array_diff(array1, array2){
    var difference = $.grep(array1, function(el) { return $.inArray(el,array2) < 0});
    return difference.concat($.grep(array2, function(el) { return $.inArray(el,array1) < 0}));;
}
/*
 * 
 */
function valida_area(arr_area){
	
	var out=[];
	for(var i=0; i<arr_area.length; i++){
	  if(arr_area[i] != 0){
	  	out.push(i);	
	  }
	}	
	return out; 
}

/**
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 11; i++) {
		document.getElementById(i).cheked=false;
		document.getElementById("altura"+i).value="";
	  	document.getElementById("area"+i).value="";
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







