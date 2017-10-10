
function seleccionar_unidad () {
	var unidades = document.getElementById('uam').value;
	var matricula = document.getElementById('empl');
	if (unidades == 0) {
		matricula.disabled = true;
		matricula.value = '';
	} else if(unidades == 1){
		matricula.disabled = true;
		matricula.value = '';
	}else{
		matricula.disabled = false;

		
	};
	
}

function longitud_contrasenia () {
	var longi = document.getElementById('pwd').value;
	var longi_2 = document.getElementById('rpwd');
	var pwd = document.getElementById('pwd');
    var longi_cadena = 8;
    //alert(longi_cadena);
    if (longi.length < longi_cadena) {
   
    	longi_2.value = "";
    	longi_2.placeholder = "Tu contraseña debe tener al menos 8 caracteres";
		longi_2.focus();
		document.getElementById('pwd').value = "";
		document.getElementById('pwd').placeholder = "Tu contraseña debe tener al menos 8 caracteres";
		//document.getElementById('pwd').select();
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

function validar_email_consejo() {
	var valor = document.getElementById('correo');
	valueForm=valor.value;
	
  //var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
  var patron_latino = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,4}))$/;
  //var patron_oficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
  			  
  //if(valueForm.search(patron)==0){
  if(valueForm.search(patron_latino)==0){
  //if(valueForm.search(patron_oficial)==0){
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

function validar_correo_disponible() {
	document.getElementById('correo').style.borderColor = '';
    document.getElementById("error_email").style.display= 'none';
	
	var correo = document.getElementById('correo').value;
	var datos = {email:correo};
  	if(correo != ''){
  		var url_correo = base_url + 'Registro_consejo_c/correo_usuario_disponible';
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
  var matricula = document.getElementById('empl').value;
  var sexo = document.getElementById('sexo').value;
  
  
  var bandera_usuario = 1;
  var bandera_pass = 1;
  var bandera_email = 1;
  var bandera_sexo = 1;
  
  var datos ={
		user_name:usuario,
		password:contrasenia1,
		name:nombre,
		last_name:apellidos,
		sex:sexo,
		email:email,
		uam_identifier:matricula
	};
	
	var validar_pwd = comparar_contrasenia();
	var validar_correo = validar_email_consejo();
	
	if (email == "") {		
		var correo_vacio = document.getElementById("email");
		correo_vacio.className += " has-warning";
		document.getElementById("error_vacio_email").style.display= 'inline';
		bandera_email = 0;
	}
		 
	 if(usuario == ""){
		var usr = document.getElementById("usuario");
		usr.className += " has-warning";
		document.getElementById("error_user").style.display= 'inline';
		bandera_usuario = 0;
	 
	}
	  if(contrasenia1 == ""){
	 	var pwd_vacio = document.getElementById("error_pwd1");
		pwd_vacio.className += " has-warning";
		document.getElementById("error_vacio_pwd1").style.display= 'inline';
		bandera_pass = 0;
	 }
	  if(contrasenia2 == ""){
	 	var pwd2_vacio = document.getElementById("error_pwd2");
		pwd2_vacio.className += " has-warning";
		document.getElementById("error_vacio_pwd2").style.display= 'inline';
		bandera_pass = 0;
	 }
	if (sexo == 0) {
	 	var sex = document.getElementById("sex");
		sex.className += " has-warning";
		bandera_sexo = 0;
	 };
	
	if (
		validar_pwd == true && 
		validar_correo == true && 
		bandera_email == 1 &&
		bandera_usuario == 1 &&
		bandera_sexo == 1 &&
		bandera_pass == 1) {
		
		var url_registro = base_url + 'Registro_consejo_c/registrar_consejo';
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
  		var url_usuario = base_url + 'Registro_consejo_c/nombre_usuario_disponible';
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

function validar_sex () {
	var sex_error = document.getElementById('sex');
	sex_error.classList.remove("has-warning");
}

