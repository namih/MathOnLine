/**
 *Metodo para pintar lineas de punto a punto. 
 * @param punto A
 * @param punto B
 */
function marcar (A,B){
	var applet = document.ggbApplet;
	applet.evalCommand(""+A+""+B+"= Line["+A+","+B+"]");
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar1(){
	
	var punto_1 = document.getElementById('1').value;	
	var punto_2 = document.getElementById('2').value;
	var punto_3 = document.getElementById('3').value;	
	var punto_4 = document.getElementById('4').value;

	if (punto_1!='' && punto_2 !='' && punto_3 !='' && punto_4 !='' ) {
		if (punto_1==15 && punto_2 ==25 && punto_3 ==20 && punto_4 ==60 ) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			clean_input(5);
			
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar2(){
	
	var punto_a = document.getElementById('1').value;	
	
	if (punto_a!='') {
		if (punto_a==39.66) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar3(){
	
	var punto_1 = document.getElementById('1').value;	
	var punto_2 = document.getElementById('2').value;
	var punto_3 = document.getElementById('3').value;	
	var punto_4 = document.getElementById('4').value;
	var punto_5 = document.getElementById('5').value;	
	var punto_6 = document.getElementById('6').value;
	var punto_7 = document.getElementById('7').value;	
	if (punto_1!='' && punto_2 !='' && punto_3 !='' && punto_4 !='' && punto_5 !='' && punto_6 !='' && punto_7 !='') {
		if (punto_1==8.24 && punto_2 ==8.24 && punto_3 ==8.24 && punto_4 ==8.24 && punto_5 ==11.66 && punto_6 ==11.66 && punto_7 ==32.96) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			clean_input(8);
			
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar4(){
	
	var punto_a = document.getElementById('1').value;	
	var punto_b = document.getElementById('2').value;
	
	if (punto_a!='' && punto_b !='') {
		if (punto_a==10 && punto_b== 10) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
			document.getElementById('2').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar5(){
	
	var punto_a = document.getElementById('1').value;	
	var punto_b = document.getElementById('2').value;
	
	if (punto_a!='' && punto_b !='') {
		if (punto_a=="-1" && punto_b== 0) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
			document.getElementById('2').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar6(){
	
	var punto_a = document.getElementById('1').value;	
	var punto_b = document.getElementById('2').value;
	
	if (punto_a!='' && punto_b !='') {
		if (punto_a==0 && punto_b== 5) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
			document.getElementById('2').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar7(){
	
	var punto_a = document.getElementById('1').value;	
	var punto_b = document.getElementById('2').value;
	
	if (punto_a!='' && punto_b !='') {
		if (punto_a==2 && punto_b== 0) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
			document.getElementById('2').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar8(){
	
	var punto_a = document.getElementById('1').value;	
	var punto_b = document.getElementById('2').value;
	
	if (punto_a!='' && punto_b !='') {
		if (punto_a==1 && punto_b== 11.62) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
			document.getElementById('2').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/**
 * Metodo para validar que las coordenadas sean las indicadas 
 */
function verificar9(){
	
	var punto_a = document.getElementById('1').value;	
	var punto_b = document.getElementById('2').value;
	
	if (punto_a!='' && punto_b !='') {
		if (punto_a==4 && punto_b== 4) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('1').value='';
			document.getElementById('2').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}

function clean_input (num) {
  for (var i=1; i < num; i++) {
    document.getElementById(i).value='';
  };
  
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
