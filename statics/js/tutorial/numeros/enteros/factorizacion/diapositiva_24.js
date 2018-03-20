/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar(){
	var numeros = [1,3,5,15];
	var num1= new Number($("#1").val());
	var num2= new Number($("#2").val());
	var num3= new Number($("#3").val());
	var num4= new Number($("#4").val());
	
	if (isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)) {
		var array_num =[num1,num2,num3,num4];
		error("Favor de ingresar solo números.");	
		this.clean_imput();
	}else{
		var array_num =[num1,num2,num3,num4];
		var array_order=array_num.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		//alert(tamanio.length);
		if(tamanio.length == 4){
			if(this.compara_array(array_order,numeros,4)){
			correcto("El ejercicio se realizo satisfactoriamente.");
			this.clean_imput();
			
			}else{
			error("Favor de repetir nuevamente.");
			this.clean_imput();
			}
		}else{
			error("Favor de validar los datos ingresados.");
			this.clean_imput();
		}
	}
}

/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar2(){
	var numeros = [1,2,4,5,10,20];
	var num1= new Number($("#11").val());
	var num2= new Number($("#12").val());
	var num3= new Number($("#13").val());
	var num4= new Number($("#14").val());
	var num5= new Number($("#15").val());
	var num6= new Number($("#16").val());
	
	if (isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)||isNaN(num5)||isNaN(num6)) {
		var array_num =[num1,num2,num3,num4,num5,num6];
		error("Favor de ingresar solo números.");	
		this.clean_imput();
	}else{
		var array_num =[num1,num2,num3,num4,num5,num6];
		var array_order=array_num.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		//alert(tamanio.length);
		if(tamanio.length == 6){
			if(this.compara_array(array_order,numeros,6)){
			correcto("El ejercicio se realizo satisfactoriamente.");
			this.clean_imput();
			
			}else{
			error("Favor de repetir nuevamente.");
			this.clean_imput();
			}
		}else{
			error("Favor de validar los datos ingresados.");
			this.clean_imput();
		}
	}
}


/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
/**
 * Metodo para validar que los datos ingresados sean de acuerdo a lo solicitado
 */
function verificar3(){
	var numeros = [1,2,4,7,14,28];
	var num1= new Number($("#21").val());
	var num2= new Number($("#22").val());
	var num3= new Number($("#23").val());
	var num4= new Number($("#24").val());
	var num5= new Number($("#25").val());
	var num6= new Number($("#26").val());
	
	if (isNaN(num1)||isNaN(num2)||isNaN(num3)||isNaN(num4)||isNaN(num5)||isNaN(num6)) {
		var array_num =[num1,num2,num3,num4,num5,num6];
		error("Favor de ingresar solo números.");	
		this.clean_imput();
	}else{
		var array_num =[num1,num2,num3,num4,num5,num6];
		var array_order=array_num.sort(function(a, b){return a-b});
		var tamanio=this.eliminateDuplicates(array_order);
		//alert(tamanio.length);
		if(tamanio.length == 6){
			if(this.compara_array(array_order,numeros,6)){
			correcto("El ejercicio se realizo satisfactoriamente.");
			this.clean_imput();
			
			}else{
			error("Favor de repetir nuevamente.");
			this.clean_imput();
			}
		}else{
			error("Favor de validar los datos ingresados.");
			this.clean_imput();
		}
	}
}





/**
 *Metodo para eliminar los datos que se repiten en el arreglo  
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
 * 
 */
function div1(){
	document.getElementById('div1').style.display='none';
	document.getElementById('div2').style.display='block';
	
}
/**
 * 
 */
function div2(){
	document.getElementById('div2').style.display='none';
	document.getElementById('div3').style.display='block';
	
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
function compara_array(arr1,arr2,conta){
	var cont=0;
	for(var i=0,j=arr1.length; i<j; i++){
	  if(arr1[i]==arr2[i]){
	  	cont=cont+1;
	  }
	}	
	if(cont==conta){
		return true;
	}else{
		return false;
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













