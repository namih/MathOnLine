/**
* La función seleccion permite escoger la unidad uam a la que pertenece y con la elección se auto-chequeala opción "estudia",
* se habilita la caja de texto correspondiente a "Matricula" y de acorde a la unidad uam seleccionada en el desplegable de carreras se muestran las que son impartidas en la unidad.
*
* @author María del Carmen Chávez Conde
* @param NA
* @return  Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/

function seleccion () {
  	var unidades = document.getElementById('uam').value;
	var matricula = document.getElementById('carrera');
	
	if (unidades == 0) {
		matricula.disabled = true;
		matricula.value = '';
		estudia.checked = false;
	} else if(unidades == 1){
		
		matricula.disabled = true;
		matricula.value = '';
		estudia.checked = false;
	}else{
		matricula.disabled = false;
		estudia.checked = true;
	};
}

function seleccionar_unidad () {
	var unidades = document.getElementById('uam').value;
	var matricula = document.getElementById('mat');
	var estudia = document.getElementById('estudia');
	var licenciatura = document.getElementById('carrera');
	if (unidades == 0) {
		matricula.disabled = true;
		licenciatura.disabled = true;
		matricula.value = '';
		estudia.checked = false;
	} else if(unidades == 1){
		
		matricula.disabled = true;
		licenciatura.disabled = true;
		matricula.value = '';
		estudia.checked = false;
	}else{
		matricula.disabled = false;
		licenciatura.disabled = false;
		estudia.checked = true;
	};
	if(unidades != 0){
		var datos = {'unidad':unidades};
		$.ajax({
		type:'post',
		url: "http://localhost/MathOnLine/index.php/Registro_usuario_c/registrar_usuario",
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function() {
			var carreras = document.getElementById('carrera');
			var option = document.createElement('option');
			option.text = 'hola';
			carreras.add(option);
			
		},
		error: function() {
			alert('failure');
		}
	});
	}
  
}
/**
* La función comparar_contrasenia verifica que las contraseñas sean del mismo tamaño así como
* los mismos caracteres
*
* @author María del Carmen Chávez Conde
* @param NA
* @return TRUE cuando los strings coinciden, FALSE si los strings no coinciden. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/

function comparar_contrasenia () {
	var contraseña1 = document.getElementById('pwd').value;
	var contraseña2 = document.getElementById('rpwd').value;
	
	if (contraseña1 == contraseña2) {
		return true;
	} else {
		return false;
	};
}

/**
* La función validar_email verifica que el correo electrónico con el que se registró el usuario
* este escrito con la estructura "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/".
*@author María del Carmen Chávez Conde
* @param NA
* @return TRUE cuando el correo electrónico esta escrito correctamente, FALSE cuando el correo electrónico no esta escrito correctamente. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/

function validar_email() {
	var valor = document.getElementById('correo');
	valueForm=valor.value;
	
  var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
  	if(valueForm.search(patron)==0){
  		return true;
	}
	else{
		 return false;
	}
}

/**
* La función registrar manda al controlador Registro_usuario_c los datos que ingresó la persona que desea registrarse
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function registrar () {
  var usuario = document.getElementById('usr').value;
  var contrasenia1 = document.getElementById('pwd').value;
  var contrasenia2 = document.getElementById('rpwd').value;
  var email = document.getElementById('correo').value;
  var nombre = document.getElementById('name').value;
  var apellidos = document.getElementById('last').value;
  var nacimiento = document.getElementById('anio').value;
  var sexo = document.getElementById('sexo').value;
  var unidad = document.getElementById('uam').value;
  var matricula = document.getElementById('mat').value;
  var estudia = document.getElementById('estudia').value;
  var trabaja = document.getElementById('trabaja').value;
  
  var datos ={
		user_name:usuario,
		password:contrasenia1,
		name:nombre,
		last_name:apellidos,
		sex:sexo,
		year_birthday:nacimiento,
		id_unit_uam:unidad,
		email:email,
		uam_identifier:matricula,	
		is_student:estudia,
		is_employeed:trabaja
	};
	
	var validar_pwd = comparar_contrasenia();
	var validar_correo = validar_email();
	
	if (validar_pwd == true && validar_correo ==true) {
		$.ajax({
		type:'post',
		url: "http://localhost/MathOnLine/index.php/Registro_usuario_c/registrar_usuario",
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function() {
			alert('success');
		},
		error: function() {
			alert('failure');
		}
	});
	} else{
		alert('error');
	};
}
/**
* La función registrar manda al controlador Registro_usuario_c los datos que ingresó la persona que desea registrarse
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function validar_username() {
	document.getElementById('usr').style.borderColor = '';
    document.getElementById("error_username").style.display= 'none';
	
	var user = document.getElementById('usr').value;
	var datos = {user_name:user};
  	if(user != ''){
  		$.ajax({
  			type:'post',
					url: "http://localhost/MathOnLine/index.php/Registro_usuario_c/nombre_usuario_disponible",
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function(msj) {
						if (msj == 'SI') {
							document.getElementById('usr').style.borderColor = 'green';
						} else{
							var usuario = document.getElementById("usuario");
							usuario.className += " has-error";
							document.getElementById("error_username").style.display= 'inline';
							document.getElementById('usr').value = '';
							document.getElementById('usr').placeholder = 'Nombre de usuario no disponible';
						};
					},
					error: function(msj) {
						alert('Failure: '+msj);
					}
				});
  			
  		
  	}
}

/**
* La función registrar manda al controlador Registro_usuario_c los datos que ingresó la persona que desea registrarse
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/

function validar_correo () {
	document.getElementById('correo').style.borderColor = '';
    document.getElementById("error_email").style.display= 'none';
	
	var user = document.getElementById('correo').value;
	var datos = {email:user};
  	if(user != ''){
  		$.ajax({
  			type:'post',
					url: "http://localhost/MathOnLine/index.php/Registro_usuario_c/correo_usuario_disponible",
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function(msj) {
						if (msj == 'SI') {
							document.getElementById('usr').style.borderColor = 'green';
						} else{
							var usuario = document.getElementById("email");
							usuario.className += " has-error";
							document.getElementById("error_email").style.display= 'inline';
							document.getElementById('correo').value = '';
							document.getElementById('correo').placeholder = 'Correo no disponible';
						};
					},
					error: function(msj) {
						alert('Failure: '+msj);
					}
				});
  			
  		
  	}
}
  
