
/**
 * recover_pass: recupera la contraseña de un usuario
 *
 * @author Nohemí Domínguez López
 * @return 
 * @param 
 * @version 1.0
 */
function recover_pass(){
	var username_user = $('#username_user').val().trim();
	var msjerror='';
	var msjSuccess='';

	if(validarEmail(username_user)){
	    var url = base_url + 'Home_c/recover_pass';
		$.ajax({	    
	       	url: url,	    
	       	data: {'username-user':username_user},
	       	type: 'POST',
	       	success: function(data){
	       		msjError=data;
				msjSuccess = '<div class="alert alert-danger alert-dismissable"><i class="fa fa-ban"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+msjError+'</div>';
				msjSuccess+='<script>$(".alert-dismissable").alert();window.setTimeout(function() { $(".alert-dismissable").fadeOut(); }, 5000);</script>';
				$("#error_valid_form").html(msjSuccess);	       		
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
		$("#error_valid_form").html(msjSuccess);
	}
	

}


function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email)){
        valido=0;}
    else{
    	valido=1;
    }
    return valido;
}