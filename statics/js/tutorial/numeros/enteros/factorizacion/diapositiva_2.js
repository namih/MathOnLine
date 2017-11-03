/*
 * 
 */
function createTable(){
	$(box).empty(); 
	mytable = $('<table></table>').attr({ id: "basicTable" });
	var rows = new Number($("#rowcount").val());
	var cols = new Number($("#columncount").val());

	
	if(isNaN(rows)||isNaN(cols)){
		error("Favor de ingresar solo números.");
	}else{
		if (rows ==0 && cols ==0){
			correcto("Favor de ingresar los datos solicitados.");
		}else{
			if(rows*cols ==12){
				var tr = [];
				for (var i = 0; i < rows; i++) {
					var row = $('<tr></tr>').attr({ class: ["class1", "class2", "class3"].join(' ') }).appendTo(mytable);
					for (var j = 0; j < cols; j++) {
						$('<td></td>').text(" ").appendTo(row); 
					}
	
				}
				//console.log("TTTTT:"+mytable.html());
				mytable.appendTo("#box");	       
			}else{
				error("Los números ingresados no corresponden al área solicitada.");
			}
		}
	}
}
/*
 * 
 */
function verificar(){
	var base1 = new Number($("#base1").val());
	var base2 = new Number($("#base2").val());
	var base3 = new Number($("#base3").val());
	var base4 = new Number($("#base4").val());
	var base5 = new Number($("#base5").val());
	var base6 = new Number($("#base6").val());
	
	var altura1 = new Number($("#altura1").val()); 
	var altura2 = new Number($("#altura2").val());
	var altura3 = new Number($("#altura3").val()); 
	var altura4 = new Number($("#altura4").val());
	var altura5 = new Number($("#altura5").val()); 
	var altura6 = new Number($("#altura6").val());
	
	var base =[base1,base2,base3,base4,base5,base6];
	var altura=[altura1,altura2,altura3,altura4,altura5,altura6];
	
	var area=[];
	var res;
	
	var tamanio_base = this.eliminateDuplicates(base);
	var tamanio_altura = this.eliminateDuplicates(altura);

	if(tamanio_base.length == 6 && tamanio_altura.length == 6 ){
		for (var i=1; i<7; i++){
		res	=base[i-1]*altura[i-1];
		area[i]=res;
		document.getElementById("area"+i).value = res;
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
			this.clean_imput();
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
	  if(arr_area[i] != 12){
	  	out.push(i);	
	  }
	}	
	return out; 
}

/**
 * Metodo para limpiar los inputs
 */
function clean_imput(){
	for (var i=1; i < 7; i++) {
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



















