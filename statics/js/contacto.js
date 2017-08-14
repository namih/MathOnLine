function enviar_contacto() {
	
  var email = document.getElementById('email').value;
  var comentario = document.getElementById('comentario').value;
  var datos = {email:email, comentario:comentario};
  
  var validacion = validar_email_contaco();
  
  if(validacion == true){
  
	  if (comentario != "") {
	  	var url = base_url + 'Contacto_c/correo_contacto';
	  	$.ajax({	    
	       	url: url,	    
	       	data: {datos:datos},
	       	type: 'POST',
	       	success: function(data){
	       		alert(data);
		    },
		    error: function(jqXHR, textStatus, errorThrown,data){
	             if (jqXHR.status === 0) {
	                console.log('Not connect: Verify Network.');
	                } else if (jqXHR.status == 404) {
	                    console.log('Requested page not found [404]');
	                } else if (jqXHR.status == 500) {
	                    console.log('Internal Server Error [500].');
	                } else if (textStatus === 'parsererror') {
	                    console.log('Requested JSON parse failed.');
	                } else if (textStatus === 'timeout') {
	                    console.log('Time out error.');
	                } else if (textStatus === 'abort') {
	                    console.log('Ajax request aborted.');
	                } else {
	                    console.log('Uncaught Error: ' + jqXHR.responseText);
	                }
	                console.log(data+"--Error al cargar el contenido Url: "+url);              
	            }	    
	    });
	  	
	  	
	  } else{
	  	alert("XD");
	  };
  } else{
  	alert("XD");
  };
}

function validar_email_contaco() {
	var valor = document.getElementById('email');
	var valueForm = valor.value;
	
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

function tab_btn(event,element){
            var t = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
            if (t == 9){
                $('#'+element).focus();
                return false;
              }
              return true;
}