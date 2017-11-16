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

function validar_3 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 4 && denominador == 7) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_4 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 4 && denominador == 3) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_5 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 1 && denominador == 4) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_6 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 7 && denominador == 5) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_7 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == -1) {
		correcto();
	} else{
		error();
	};
}

function validar_8 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 9) {
		correcto();
	} else{
		error();
	};
}

function validar_9 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == -10) {
		correcto();
	} else{
		error();
	};
}

function validar_10 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 5 && denominador == 3) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_11 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 1 && denominador == 7) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_12 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 1 && denominador == 3) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_13 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 4 && denominador == 5) {
			correcto();
		} else {
			error();
		};
	};
}

function validar_14 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 3) {
		correcto();
	} else{
		error();
	};
}

function validar_15 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 2) {
		correcto();
	} else{
		error();
	};
}

function validar_16 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == -3) {
		correcto();
	} else{
		error();
	};
}

function validar_17 () {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	
	if (numerador!='' && denominador!='') {
		if (numerador == 2 && denominador == 5) {
			correcto();
		} else {
			error();
		};
	};
}