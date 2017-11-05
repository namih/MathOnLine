function verificar(){
	var base1 = new Number($("#base1").val());
	var base2 = new Number($("#base2").val());
	var base3 = new Number($("#base3").val());
	var base4 = new Number($("#base4").val());
	var base5 = new Number($("#base5").val());
	var base6 = new Number($("#base6").val());
	var base7 = new Number($("#base7").val());
	var base8 = new Number($("#base8").val());
	
	var altura1 = new Number($("#altura1").val()); 
	var altura2 = new Number($("#altura2").val());
	var altura3 = new Number($("#altura3").val()); 
	var altura4 = new Number($("#altura4").val()); 
	var altura5 = new Number($("#altura5").val());
	var altura6 = new Number($("#altura6").val()); 
	var altura7 = new Number($("#altura7").val()); 
	var altura8 = new Number($("#altura8").val());
	
	var base =[base1,base2,base3,base4,base5,base6,base7,base8];
	var altura=[altura1,altura2,altura3,altura4,altura5,altura6,altura7,altura8];
	
	var area=[];
	var res;
	
	var tamanio_base = this.eliminateDuplicates(base);
	var tamanio_altura = this.eliminateDuplicates(altura);

	if(tamanio_base.length == 8 && tamanio_altura.length == 8 ){
		for (var i=1; i<9; i++){
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
	  if(arr_area[i] != 120){
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
