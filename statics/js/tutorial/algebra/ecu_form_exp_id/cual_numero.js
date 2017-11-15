function correcto() {
	$('#correcta').show();
	$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
		$("#correcta").slideUp(500);
	});
}

function error() {
	$('#error').show();
	$("#error").fadeTo(2000, 500).slideUp(500, function(){
		$("#error").slideUp(500);
	});
}

function validar_1 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 10) {
		correcto();
	} else{
		error();
	};
}

function validar_2 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == -8) {
		correcto();
	} else{
		error();
	};
}
