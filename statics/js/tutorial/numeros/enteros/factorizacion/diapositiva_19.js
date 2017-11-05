/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida(){	
	var res  =  $('input[name="optradio"]:checked').val();
	
	if (res=='S') {
		correcto("Correcto");
	}else if (res == 'N') {
		error("Favor de repetir el ejercicio");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}

/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function valida21(){	
	var res  =  $('input[name="optradio"]:checked').val();
	
	if (res=='N') {
		correcto("Correcto");
	}else if (res == 'S') {
		error("Favor de repetir el ejercicio");
	}
	
	if (res!='S' && res!='N' ){
		error("Selecciona una de las opciones disponibles.");
	}
}
/*
 * 
 */
function verificar(){
	var base1 = new Number($("#base1").val());
	var base2 = new Number($("#base2").val());
	var base3 = new Number($("#base3").val());
	
	var altura1 = new Number($("#altura1").val()); 
	var altura2 = new Number($("#altura2").val());
	var altura3 = new Number($("#altura3").val()); 
	
	var base =[base1,base2,base3];
	var altura=[altura1,altura2,altura3];
	
	var area=[];
	var res;
	
	var tamanio_base = this.eliminateDuplicates(base);
	var tamanio_altura = this.eliminateDuplicates(altura);

	if(tamanio_base.length == 3 && tamanio_altura.length == 3 ){
		for (var i=1; i<4; i++){
		res	=base[i-1]*altura[i-1];
		area[i]=res;
		document.getElementById("area"+i).value = res;
		document.getElementById("area"+i).style.color='black';
		}
		arr_valida=this.valida_area(area);
		if(arr_valida.length > 1){
			for(var j =1;j<arr_valida.length;j++){
				var text="area"+arr_valida[j];
				document.getElementById(text).style.color='red';
			}
			error("Favor de repetir el ejercicio.");
		}else{
			correcto("El ejercicio se realizo exitosamente.");
			//this.clean_imput();
		}
	}else{
		
		error("Validar que los datos ingresados sean correctos.");
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














