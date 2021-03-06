/**
 *Metodo para validar los multiplos de 7  
 */
function verificar(){
	
	var num1 = new Number($("#1").val());
	var num2 = new Number($("#2").val());
	var num3 = new Number($("#3").val());
	var num4 = new Number($("#4").val());
	var num5 = new Number($("#5").val());
	var div = 7;
	
	var multiplo= [num1,num2,num3,num4,num5];
	var repetidos = this.eliminateDuplicates(multiplo);
	var errores=[];
	var res;
	if(repetidos.length == 5){
		for(var i=0;i<multiplo.length;i++){
			res=multiplo[i]%div;
			errores[i]=res;
		}
		var valida=this.valida_multiplo(errores);
		if(valida.length == 0){
			correcto("Se realizó satisfactoriamente el ejercicio.");
			this.clean_imput();
		}else{
			for(var i=0;i<valida.length;i++){
				document.getElementById((valida[i])+1).style.color='red';
			}
			error("No son multiplos de 7. Intentalo de nuevo");
		}

	}else{
		error("Verificar los datos ingresados.");
	}
}

/**
 *Metodo para validar los multiplos de 2
 */
function verificar2(){
	
	var num1 = new Number($("#21").val());
	var num2 = new Number($("#22").val());
	var num3 = new Number($("#23").val());
	var num4 = new Number($("#24").val());
	var num5 = new Number($("#25").val());
	var div = 2;
	
	var multiplo= [num1,num2,num3,num4,num5];
	var repetidos = this.eliminateDuplicates(multiplo);
	var errores=[];
	var res;
	if(repetidos.length == 5){
		for(var i=0;i<multiplo.length;i++){
			res=multiplo[i]%div;
			errores[i]=res;
		}
		var valida=this.valida_multiplo(errores);
		if(valida.length == 0){
			correcto("Se realizó satisfactoriamente el ejercicio.");
			this.clean_imput();
		}else{
			error("No son multiplos de 2. Intentalo de nuevo");
		}

	}else{
		error("Verificar los datos ingresados.");
	}
}

/**
 *Metodo para validar los multiplos de 2
 */
function verificar3(){
	
	var num1 = new Number($("#31").val());
	var num2 = new Number($("#32").val());
	var num3 = new Number($("#33").val());
	var num4 = new Number($("#34").val());
	var num5 = new Number($("#35").val());
	var div = 12;
	
	var multiplo= [num1,num2,num3,num4,num5];
	var repetidos = this.eliminateDuplicates(multiplo);
	var errores=[];
	var res;
	if(repetidos.length == 5){
		for(var i=0;i<multiplo.length;i++){
			res=multiplo[i]%div;
			errores[i]=res;
		}
		var valida=this.valida_multiplo(errores);
		if(valida.length == 0){
			correcto("Se realizó satisfactoriamente el ejercicio.");
			this.clean_imput();
		}else{
			error("No son multiplos de 12. Intentalo de nuevo");
		}

	}else{
		error("Verificar los datos ingresados.");
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
function valida_multiplo(arr_area){
	
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
	for (var i=1; i < 6; i++) {
	  document.getElementById(i).value="";
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
















