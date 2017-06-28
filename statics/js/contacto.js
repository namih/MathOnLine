function enviar_contacto() {
  var email = document.getElementById('email').value;
  var comentario = document.getElementById('comentario').value;
  
  var datos = {email:email, comentario:comentario};
  
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
}