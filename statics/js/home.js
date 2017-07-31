
/**
 * mainContent: actualiza contenido del div principal con ajax
 *
 * @author Nohemí Domínguez López
 * @return 
 * @param 
 * @version MathOnline V1.0
 */
function loadContent(ruta) {
	$.ajax({	    
       	url: ruta,	    
       	data: {},
       	type: 'POST',
       	success: function(data){
       		console.log(data);
       		$('#section_main_content').html(data);
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
}

/**
 * loadOptionMenu: actualiza contenido del div de opcion de menu con ajax
 *
 * @author Nohemí Domínguez López
 * @return 
 * @param 
 * @version MathOnline V1.0
 */
function loadOptionMenu(ruta) {
	$.ajax({	    
       	url: ruta,	    
       	data: {},
       	type: 'POST',
       	success: function(data){
       		console.log(data);
       		$('#opcion_menu').html(data);
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
}

/**
 * login_user: recupera los datos para realizar el login del usuario
 *
 * @author Nohemí Domínguez López
 * @return 
 * @param 
 * @version MathOnline V1.0
 */
function login_user(){
	var username_user = $('#username_user').val().trim();
	var password_user = $('#password_user').val().trim();
	var msjerror='';
	var msjSuccess='';

	if(username_user!='' && password_user!=''){
	    var url = base_url + 'Home_c/login';
		$.ajax({	    
	       	url: url,	    
	       	data: {'username-user':username_user,'password-user':password_user},
	       	type: 'POST',
	       	success: function(data){
	       		if(Number(data)==1){
		           window.location.replace(base+'Home_student_c/tutorial_by_user_id'); 
	          	}else{
	        	   alert('error_usuario');
	        	}
		/*
		          msjError=data;
		    msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
		    msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
		    $("#error_valid_form").html(msjSuccess);          */	       		
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
	}else{
		msjError="Todos los campos son obligatorios.";
		msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
		msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
		$("#error_valid_form").html(msjSuccess);
	}
	

}
/**
 * recover_pass: recupera la contraseña de un usuario
 *
 * @author Nohemí Domínguez López
 * @return 
 * @param 
 * @version MathOnline V1.0
 */
function recover_pass(){
	var email_user = $('#email_user').val().trim();
	var msjerror='';
	var msjSuccess='';

	if(validarEmail(email_user)){
	    var url = base_url + 'Home_c/recover_pass';
		$.ajax({	    
	       	url: url,	    
	       	data: {'email-user':email_user},
	       	type: 'POST',
	       	success: function(data){
	       		msjError=data;
				msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban fa-2x"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
				msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
				$("#error_recover_pass").html(msjSuccess);	       		
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
	}else{
		msjError="Debe ingresar un correo válido.";
		msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
		msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
		$("#error_recover_pass").html(msjSuccess);
	}
	

}


/**
 * validarEmail: valida que un string tenga la estructura de un correo electrónico
 *
 * @author Nohemí Domínguez López
 * @return bool
 * @param string-email cadena a validar
 * @version MathOnline V1.0
 */
function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email)){
        valido=0;}
    else{
    	valido=1;
    }
    return valido;
}


$('form').on('submit',function(e){
	e.preventDefault();
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : $(this).attr('action'),
        data     : $(this).serialize(),
        success  : function(data) {
       		if(Number(data)==1){
        		$(location).attr('href', 'home_c/goHomeUser');
          	}else{
				var username_user = $('#username_user').val().trim();
				var password_user = $('#password_user').val().trim();
				var msjerror='';
				var msjSuccess='';

				if(username_user!='' && password_user!=''){
	        	   	msjError=data;
				    msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
				    msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
				    $("#error_valid_form").html(msjSuccess);
				}else{
					msjError="Debe ingresar un usuario y contraseña.";
					msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
					msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
					$("#error_valid_form").html(msjSuccess);
				}	
        	}

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
});