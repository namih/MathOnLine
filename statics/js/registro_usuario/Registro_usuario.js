/**
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
		alert('Las contraseñas coinciden');
	} else {
		alert('Las contraseñas no coinciden');
	};
}

function validar_email() {
	var valor = document.getElementById('correo');
	valueForm=valor.value;
	
  var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
  	if(valueForm.search(patron)==0){
  		alert('ok');
		
	}
	else{
		 document.getElementById('msj_correo').style.display='inline';
		 document.getElementById('correo').style.borderColor = "red";
		 // document.getElementById('correo').style.border = "solid";
		
	}
}