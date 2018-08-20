/**
 * 
 *
 * 
 */
function verificar(){
	var arr_num1_256=[];
	var arr_num2_256=[];
	var arr_num1_96=[];
	var arr_num2_96=[];
	var area_256=[];
	var area_96=[];
	
	var fac = "2,3,6";
	var max =6;
	
	var factor = document.getElementById("factores").value;
	var maximo = new Number($("#maximo").val());
	
		
	for(var i=1; i<4;i++){
		arr_num2_256.push(new Number($("#altura"+i).val()));
	}
	for(var i=1; i<4;i++){
		arr_num1_256.push(new Number($("#base"+i).val()));
	}
	
	for(var i=1; i<4;i++){
		arr_num2_96.push(new Number($("#alt"+i).val()));
	}
	for(var i=1; i<4;i++){
		arr_num1_96.push(new Number($("#bas"+i).val()));
	}

	for (var i=1; i<4; i++){
	var resultado1 =arr_num1_256[i-1]*arr_num2_256[i-1];
	area_256[i]=resultado1;
	document.getElementById("area"+i).value = resultado1;
	document.getElementById("area"+i).style.color='black';
	}
	
	for (var i=1; i<4; i++){
	var resultado2 	=arr_num1_96[i-1]*arr_num2_96[i-1];
	area_96[i]=resultado2;
	document.getElementById("ar"+i).value = resultado2;
	document.getElementById("ar"+i).style.color='black';
	}
	
	arr_valida_96=this.valida_area(area_96,18);
	arr_valida_256=this.valida_area(area_256,12);
	if(arr_valida_96.length > 1 || arr_valida_256.length > 1 && factor==null && maximo==null){
		
		for(var j =1;j<arr_valida_96.length;j++){
			var text="ar"+arr_valida_96[j];
			document.getElementById(text).style.color='red';
		}
		for(var j =1;j<arr_valida_256.length;j++){
			var text="area"+arr_valida_256[j];
			document.getElementById(text).style.color='red';
		}
		error("Favor de repetir el ejercicio.");
	}else if(arr_valida_96.length == 1 && arr_valida_256.length == 1 && factor==6 && maximo==6){
		correcto("El ejercicio se realizo exitosamente.");
		//this.clean_imput();
	}else if(arr_valida_96.length == 1 && arr_valida_256.length == 1 && factor=='' || maximo==''){
		error("Favor de repetir el ejercicio.");
		//this.clean_imput();
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
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 5; i++) {
		document.getElementById("base"+i).value="";
		document.getElementById("altura"+i).value="";
	  	document.getElementById("area"+i).value="";
	}
	 
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

















