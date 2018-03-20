/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar3(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==5) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar4(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==10) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar5(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==12.04) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar7(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==2.23) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar8(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==12.52) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar9(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==3.16) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar10(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==14.31) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar11(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==5.09) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar12(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==7.21) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar13(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==10.29) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
	}
}
/*
 * Funcion para validar los datos inggresados de la distancia
 */
function verificar14(){
	
	var distancia = document.getElementById('dist').value;	
	
	if (distancia!='') {
		if (distancia==4.24) {
			correcto("El ejercicio se realizó exitosamente");
		}else{
			error("Favor de volver a repetir");
			document.getElementById('dist').value='';
		}
	}else{
		error("Favor de ingresar los datos.");
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
