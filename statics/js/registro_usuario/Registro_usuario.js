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
/**
* La función seleccion permite escoger la unidad uam a la que pertenece y con la elección se auto-chequeala opción "estudia",
* se habilita la caja de texto correspondiente a "Matricula" y de acorde a la unidad uam seleccionada en el desplegable de carreras se muestran las que son impartidas en la unidad.
*
* @author María del Carmen Chávez Conde
* @param NA
* @return  Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/

function seleccionar_unidad () {
	var unidades = document.getElementById('uam').value;
	var matricula = document.getElementById('mat');
	var estudia = document.getElementById('estudia');
	var licenciatura = document.getElementById('carrera');
	if (unidades == 0) {
		matricula.disabled = true;
		licenciatura.disabled = true;
		matricula.value = '';
		licenciatura.value = 0;
		estudia.checked = false;
	} else if(unidades == 1){
		
		matricula.disabled = true;
		licenciatura.disabled = true;
		matricula.value = '';
		
		estudia.checked = false;
	}else{
		matricula.disabled = false;
		licenciatura.disabled = false ;
		estudia.checked = true;
		
		$('#carrera').empty();
		var datos = {'unidad':unidades};
		var url_lic = base_url + 'Registro_usuario_c/obtener_licenciatura';
		$.ajax({
		type:'post',
		url: url_lic,
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function(respuesta) {
			var lista_lic = JSON.parse(respuesta);
			var carreras = document.getElementById('carrera');
			for (var i=0; i < lista_lic.length; i++) {
			  var option = document.createElement('option');
			  option.innerHTML = lista_lic[i];
			  option.text = lista_lic[i]['degree'];
			  option.value = lista_lic[i]['id_degree'];
			  carreras.appendChild(option);
			};
				
		},
		error: function() {
			alert('failure');
		}
	});
	};
	
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
	document.getElementById("error_vacio_pwd1").style.display= 'none';
	document.getElementById("error_vacio_pwd2").style.display= 'none';
	var pass1 = document.getElementById("error_pwd1");
	pass1.classList.remove("has-warning");
	var pass2 = document.getElementById("error_pwd2");
	pass2.classList.remove("has-warning");
	
	var contrasenia1 = document.getElementById('pwd').value;
	var contrasenia2 = document.getElementById('rpwd').value;
	
	if(contrasenia1 != ""){
		if(contrasenia2 == contrasenia1){
			return true;
		}else{
			document.getElementById('pwd').value = "";
			document.getElementById('rpwd').value = "";
			document.getElementById('pwd').placeholder = "Las contraseñas no coinciden";
			document.getElementById('pwd').focus();;
		}
	}else{
		return false;
	}
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
  var carrera = document.getElementById('carrera').value;
  var matricula = document.getElementById('mat').value;
  var estudia = document.getElementById('estudia').checked;
  var trabaja = document.getElementById('trabaja').checked;
  var unidad = document.getElementById('uam').value;
  if (unidad == 0) {
  	carrera = 1;
  } else{};
  
  var bandera_usuario = 1;
  var bandera_pass = 1;
  var bandera_email = 1;
  var bandera_anio = 1;
  var bandera_sexo = 1;
  
  
  var datos ={
		user_name:usuario,
		password:contrasenia1,
		name:nombre,
		last_name:apellidos,
		sex:sexo,
		year_birthday:nacimiento,
		id_degree:carrera,
		email:email,
		uam_identifier:matricula,	
		is_student:estudia,
		is_employed:trabaja
	};
	
	var validar_pwd = comparar_contrasenia();
	var validar_correo = validar_email();
	
	if (nacimiento == '' ) {
		var anio_vacio = document.getElementById("error_vacio_anio");
		anio_vacio.className += " has-warning";
		document.getElementById("error_anio").style.display= 'inline';
		bandera_anio = 0;
	} 
	 if (email == '') {
	 	var correo_vacio = document.getElementById("email");
		correo_vacio.className += " has-warning";
		document.getElementById("error_vacio_email").style.display= 'inline';
		bandera_email = 0;
	}
	  if(contrasenia1 == ''){
	 	var pwd_vacio = document.getElementById("error_pwd1");
		pwd_vacio.className += " has-warning";
		document.getElementById("error_vacio_pwd1").style.display= 'inline';
		bandera_pass = 0;
	 }
	  if(contrasenia2 == ''){
	 	var pwd2_vacio = document.getElementById("error_pwd2");
		pwd2_vacio.className += " has-warning";
		document.getElementById("error_vacio_pwd2").style.display= 'inline';
		bandera_pass = 0;
	 }
	 
	 if(usuario == ''){
	 	var usr = document.getElementById("usuario");
		usr.className += " has-warning";
		document.getElementById("error_user").style.display= 'inline';
		bandera_usuario = 0;
	 }
	 if (sexo == 0) {
	 	var sex = document.getElementById("sex");
		sex.className += " has-warning";
		bandera_sexo = 0;
	 };
	
	if (
		validar_pwd == true && 
		validar_correo == true && 
		bandera_anio == 1 &&
		bandera_email == 1 &&
		bandera_usuario == 1 &&
		bandera_sexo == 1 &&
		bandera_pass == 1) {
		
		var url_registro = base_url + 'Registro_usuario_c/registrar_usuario';
		$.ajax({
		type:'post',
		url: url_registro,
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function() {
			$('#Registro').modal('toggle');
		},
		error: function() {
			alert('failure');
		}
	});
	} else{
		return false;
		
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
  		var url_usuario = base_url + 'Registro_usuario_c/nombre_usuario_disponible';
  		$.ajax({
  			type:'post',
					url: url_usuario,
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function(msj) {
						if (msj == 'SI') {
							document.getElementById('usr').style.borderColor = 'green';
							document.getElementById("error_user").style.display= 'none';
						} else{
							var usuario = document.getElementById("usuario");
							usuario.className += " has-error";
							document.getElementById("error_username").style.display= 'inline';
							document.getElementById('usr').value = '';
							document.getElementById('usr').placeholder = 'Nombre de usuario no disponible';
						};
					},
					error: function(msj) {
						alert('Failure: '+ msj);
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
	
	var correo = document.getElementById('correo').value;
	var datos = {email:correo};
  	if(correo != ''){
  		var url_correo = base_url + 'Registro_usuario_c/correo_usuario_disponible';
  		$.ajax({
  			type:'post',
					url: url_correo,
					data: {datos:datos},
					datatype: 'json',
					cache: false,
					success: function(msj) {
						if (msj == 'SI') {
							document.getElementById('correo').style.borderColor = 'green';
							document.getElementById("error_vacio_email").style.display= 'none';
						} else{
							var usuario = document.getElementById("email");
							usuario.className += " has-error";
							document.getElementById("error_email").style.display= 'inline';
							document.getElementById('correo').value = '';
							document.getElementById('correo').placeholder = 'Correo no disponible';
						};
					},
					error: function(msj) {
						alert('Failure: '+ msj);
					}
				});
  			
  		
  	}
}
 function es_numero (numero) {
  if (!/^([0-9])*$/.test(numero)) {
  	return false;
  };
}
  
function validar_anio () {
	document.getElementById("error_anio").style.display= 'none';
	var anio_error = document.getElementById('error_vacio_anio');
	var anio = document.getElementById('anio');
	anio_error.classList.remove("has-warning");
	var anio_long = document.getElementById('anio').value;
	if (anio_long.length != 4) {
		anio.value = "";
		document.getElementById('anio').placeholder = "0000";
		document.getElementById('anio').focus();
	} else {
		var valor = es_numero(anio.value);
		if (valor == false) {
			anio.value = "";
			document.getElementById('anio').placeholder = "0000";
			document.getElementById('anio').focus();
		};
	};
	  
}  

function validar_matricula () {
	var matricula = document.getElementById('mat');
	var valor = es_numero(matricula.value);
		if (valor == false) {
			matricula.value = "";
			document.getElementById('mat').placeholder = "Sólo números";
			document.getElementById('mat').focus();
		};
	
	  
}  

function validar_sex () {
  
	var sex_error = document.getElementById('sex');
	sex_error.classList.remove("has-warning");
}
