/**document.getElementById('msj_correo').style.display='inline';
		 document.getElementById('correo').style.borderColor = "red";
* La función password verifica que las contraseñas sean del mismo tamaño así como
* los mismos caracteres
*
* @author María del Carmen Chávez Conde
* @param NA
* @return TRUE cuando los strings coinciden, FALSE si los strings no coinciden. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/

function seleccion () {
  	var unidades = document.getElementById('uam').value;
	var matricula = document.getElementById('mat');
	var estudia = document.getElementById('estudia');
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


function comparar_contrasenia () {
	var contraseña1 = document.getElementById('pwd').value;
	var contraseña2 = document.getElementById('rpwd').value;
	
	if (contraseña1 == contraseña2) {
		return true;
	} else {
		return false;
	};
}

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