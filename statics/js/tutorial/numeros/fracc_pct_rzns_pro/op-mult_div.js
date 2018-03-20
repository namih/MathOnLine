function acierto () {
  	$('#correcta').show();
	$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
	$("#correcta").slideUp(500);
	});	
}

function error () {
  	$('#error').show();
	$("#error").fadeTo(2000, 500).slideUp(500, function(){
	$("#error").slideUp(500);
	});
}

function fraccion_2 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 10 && denominador == 3) {
  			
  			acierto();	
  		}else{
  			
  			error();
  		};
  	};
}

function fraccion_3 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 10 && denominador == 3) {
  			
  			acierto();	
  		}else{
  			
  			error();
  		};
  	};
}

function fraccion_4 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 10 && denominador == 3) {
  			
  			acierto();	
  		}else{
  			
  			error();
  		};
  	};
}

function fraccion_mixta_5 () {
	var entero_h = document.getElementById('entero').value;
  	var numerador_h = document.getElementById('numerador').value;
  	var denominador_h = document.getElementById('denominador').value;
  	if (entero_h != '' && numerador_h != '' && denominador_h != '') {
		if (entero_h == 3 && numerador_h == 1 && denominador_h == 3) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_6 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		if (numerador == 18 && denominador == 8) {
  			
  			acierto();	
  		}else{
  			
  			error();
  		};
  	};
}