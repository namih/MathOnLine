/**
* La función registrar manda al controlador Registro_usuario_c los datos que ingresó la persona que desea registrarse
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function actualizar() {
  var id_usuario = document.getElementById('id_user').value;
  var usuario = document.getElementById('usr').value;
  var contrasenia1 = document.getElementById('pwd').value;
  var contrasenia2 = document.getElementById('rpwd').value;
  var email = document.getElementById('correo').value;
  var nombre = document.getElementById('name').value;
  var apellidos = document.getElementById('last').value;
  var nacimiento = document.getElementById('anio').value;
  var sexo = document.getElementById('sexo').value;
  var avatar = $('#id_avatar_user').val();

			       
  var bandera_usuario = 1;
  var bandera_pass = 1;
  var bandera_email = 1;
  var bandera_anio = 1;
  var bandera_sexo = 1;
  
  
  var datos ={
  		id_avatar:avatar,
  		id_user:id_usuario,
		user_name:usuario,
		password:contrasenia1,
		name:nombre,
		last_name:apellidos,
		sex:sexo,
		year_birthday:nacimiento,
		email:email
		
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
		$.ajax({
		type:'post',
		url: base_url + 'Perfil_usuario_c/actualizar_perfil',
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		
		success: function() {
			//alert('OK');
			$('#Registro').modal('toggle');
			location.href = "/mathonline";
		},
		error: function() {
			alert('failure');
		}
	});
	} else{
		return false;
		
	};
}   


