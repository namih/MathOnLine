var result_frac = 0;
var ia = 1;
var ib = 1;

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

function mostrar_segundo () {
  	document.getElementById('first').style.display = 'none';
  	document.getElementById('second').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
}

function mostrar_tercero () {
  	document.getElementById('second').style.display = 'none';
  	document.getElementById('third').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
}

function mostrar_mixto () {
  	document.getElementById('fraccion').style.display = 'none';
  	document.getElementById('mixto').style.display = 'inline-block';
  	document.getElementById('mix').style.display = 'none';
  	document.getElementById('frac').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub, 'mixto']);
}

function mostrar_fraccion () {
  	document.getElementById('mixto').style.display = 'none';
  	document.getElementById('fraccion').style.display = 'inline-block';
  	document.getElementById('frac').style.display = 'none';
  	document.getElementById('mix').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub,'fraccion']);
}

function mostrar_uno_mixto () {
  	document.getElementById('fraccion_uno').style.display = 'none';
  	document.getElementById('mixto_uno').style.display = 'inline-block';
  	document.getElementById('mix_uno').style.display = 'none';
  	document.getElementById('frac_uno').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub, 'mixto_uno']);
}

function mostrar_uno_fraccion () {
  	document.getElementById('mixto_uno').style.display = 'none';
  	document.getElementById('fraccion_uno').style.display = 'inline-block';
  	document.getElementById('frac_uno').style.display = 'none';
  	document.getElementById('mix_uno').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub,'fraccion_uno']);
}

function mostrar_dos_mixto () {
  	document.getElementById('fraccion_dos').style.display = 'none';
  	document.getElementById('mixto_dos').style.display = 'inline-block';
  	document.getElementById('mix_dos').style.display = 'none';
  	document.getElementById('frac_dos').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub, 'mixto_dos']);
}

function mostrar_dos_fraccion () {
  	document.getElementById('mixto_dos').style.display = 'none';
  	document.getElementById('fraccion_dos').style.display = 'inline-block';
  	document.getElementById('frac_dos').style.display = 'none';
  	document.getElementById('mix_dos').style.display = 'inline-block';
  	MathJax.Hub.Queue(["Reprocess",MathJax.Hub,'fraccion_dos']);
}


function fraccion_2 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
		if (parseFloat(result_frac) == 0.8) {
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
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 2.25) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_uno_6 () {
  	var numerador = document.getElementById('numerador_a_uno').value;
  	var denominador = document.getElementById('denominador_a_uno').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 5.538461538461538) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_dos_6 () {
  	var numerador = document.getElementById('numerador_a_dos').value;
  	var denominador = document.getElementById('denominador_a_dos').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 3.6923076923076925) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_mixta_6 () {
	var entero = document.getElementById('entero_m').value;
  	var numerador = document.getElementById('numerador_m').value;
  	var denominador = document.getElementById('denominador_m').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 2 && numerador == 2 && denominador == 8) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_6_uno () {
	var entero = document.getElementById('entero_uno_m').value;
  	var numerador = document.getElementById('numerador_uno_m').value;
  	var denominador = document.getElementById('denominador_uno_m').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 5 && numerador == 7 && denominador == 13) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_6_dos () {
	var entero = document.getElementById('entero_dos_m').value;
  	var numerador = document.getElementById('numerador_dos_m').value;
  	var denominador = document.getElementById('denominador_dos_m').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 3 && numerador == 12 && denominador == 13) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_7 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 3.5) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_mixta_7 () {
	var entero = document.getElementById('entero_m').value;
  	var numerador = document.getElementById('numerador_m').value;
  	var denominador = document.getElementById('denominador_m').value;
  	if (entero != '' && numerador != '' && denominador != '') {
		if (entero == 3 && numerador == 1 && denominador == 2) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function incrementar_8 () {
  	  	switch (ia) {
		case 1:
			document.getElementById("numero").innerHTML ='2';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_dos.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		case 2:
			document.getElementById("numero").innerHTML ='3';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_tres.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/correcto.png";
			ia++;
			break;
		case 3:
			document.getElementById("numero").innerHTML ='4';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_cuatro.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		case 4:
			document.getElementById("numero").innerHTML ='5';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_cinco.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		case 5:
			document.getElementById("numero").innerHTML ='6';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_seis.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		case 6:
			document.getElementById("numero").innerHTML ='7';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_siete.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		case 7:
			document.getElementById("numero").innerHTML ='8';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_ocho.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		case 8:
			document.getElementById("numero").innerHTML ='9';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_nueve.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia++;
			break;
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_8 () {
	console.log(ia);
  	switch (ia) {
  		
		case 9:
			document.getElementById("numero").innerHTML ='8';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_ocho.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		case 8:
			document.getElementById("numero").innerHTML ='7';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_siete.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		case 7:
			document.getElementById("numero").innerHTML ='6';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_seis.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		case 6:
			document.getElementById("numero").innerHTML ='5';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_cinco.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		case 5:
			document.getElementById("numero").innerHTML ='4';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_cuatro.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		case 4:
			document.getElementById("numero").innerHTML ='3';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_tres.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/correcto.png";
			
			ia--;
			break;
		case 3:
			document.getElementById("numero").innerHTML ='2';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_dos.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		case 2:
			document.getElementById("numero").innerHTML ='1';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_uno.png";
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
		
			
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_9 () {
  	  	switch (ia) {
		case 1:
			document.getElementById("numero").innerHTML ='2';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_sextos.png";
			document.getElementById("fraction").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>6</mn></mfrac></math>';
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/correcto.png";
			ia++;
			break;
			}
		MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_9 () {
	console.log(ia);
  	switch (ia) {
  		case 2:
			document.getElementById("numero").innerHTML ='1';
			document.getElementById("cuadro").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_tres.png";
			document.getElementById("fraction").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>';
			document.getElementById("bien").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png";
			ia--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function fraccion_10 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 0.16666666666666666) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function entero_10 () {
  	var entero = document.getElementById('entero').value;
  	  	if (entero != '') {
			if (entero == 1) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function fraccion_11_a () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 0.16666666666666666) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_11_b () {
  	var numerador = document.getElementById('numerador_b').value;
  	var denominador = document.getElementById('denominador_b').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 0.16666666666666666) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_12 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
		result_frac = numerador / denominador;
		console.log(result_frac);
		if (parseFloat(result_frac) == 1.6666666666666667) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}