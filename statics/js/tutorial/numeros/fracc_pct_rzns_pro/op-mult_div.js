var result_frac = 0;
var ia = 1;
var ib = 1;
var ia_uno = 1;
var ib_uno = 1;
var ia_dos = 1;
var ib_dos = 1;

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

function incrementar_13_a () {
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

function decrementar_13_a () {
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

function numero_14 () {
  	var entero = document.getElementById('entero').value;
  	  	if (entero != '') {
			if (entero == 1) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function fraccion_14 () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	var numerador_d = document.getElementById('numerador_d').value;
  	var denominador_d = document.getElementById('denominador_d').value;
  	var numerador_e = document.getElementById('numerador_e').value;
  	var denominador_e = document.getElementById('denominador_e').value;
  	if ((numerador_a != '' && denominador_a != '') && (numerador_b != '' && denominador_b != '') && (numerador_c != '' && denominador_c != '') && (numerador_d != '' && denominador_d != '')) {
  		result_frac_1 = numerador_a / denominador_a;
  		result_frac_2 = numerador_b / denominador_b;
  		result_frac_3 = numerador_c / denominador_c;
  		result_frac_4 = numerador_d / denominador_d;
  		result_frac_5 = numerador_e / denominador_e;
		if ((parseFloat(result_frac_1) == 0.25) && (parseFloat(result_frac_2) == 0.25) && (parseFloat(result_frac_3) == 0.5) && (parseFloat(result_frac_4) == 0.5) && (parseFloat(result_frac_5) == 0.25)) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function numero_15_a () {
  	var entero = document.getElementById('numero_a').value;
  	  	if (entero != '') {
			if (entero == 1) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function numero_15_b () {
  	var entero = document.getElementById('numero_b').value;
  	  	if (entero != '') {
			if (entero == 8) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function fraccion_15 () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	var numerador_c = document.getElementById('numerador_c').value;
  	var denominador_c = document.getElementById('denominador_c').value;
  	var numerador_d = document.getElementById('numerador_d').value;
  	var denominador_d = document.getElementById('denominador_d').value;
  	var numerador_e = document.getElementById('numerador_e').value;
  	var denominador_e = document.getElementById('denominador_e').value;
  	if ((numerador_a != '' && denominador_a != '') && (numerador_b != '' && denominador_b != '') && (numerador_c != '' && denominador_c != '') && (numerador_d != '' && denominador_d != '') && (numerador_e != '' && denominador_e != '')) {
  		result_frac_1 = numerador_a / denominador_a;
  		result_frac_2 = numerador_b / denominador_b;
  		result_frac_3 = numerador_c / denominador_c;
  		result_frac_4 = numerador_d / denominador_d;
  		result_frac_5 = numerador_e / denominador_e;
		if ((parseFloat(result_frac_1) == 0.125) && (parseFloat(result_frac_2) == 0.125) && (parseFloat(result_frac_3) == 0.5) && (parseFloat(result_frac_4) == 0.25) && (parseFloat(result_frac_5) == 0.125)) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_16 () {
  	var numerador = document.getElementById('numerador_a').value;
  	var denominador = document.getElementById('denominador_a').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 0.375) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function numero_17_a () {
  	var entero = document.getElementById('numero_a').value;
  	  	if (entero != '') {
			if (entero == 16) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function numero_17_b () {
  	var entero = document.getElementById('numero_b').value;
  	  	if (entero != '') {
			if (entero == 12) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}

function numero_17_c () {
  	var entero = document.getElementById('numero_c').value;
  	  	if (entero != '') {
			if (entero == 15) {
  				acierto();
  			}else{
  				error();
  			};	
  		};
}


function fraccion_17 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 3.75) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function numerador_18 () {
	var numerador_a = document.getElementById('numero_a').value;
	var numerador_b = document.getElementById('numero_b1').value;
	var numerador_c = document.getElementById('numero_b2').value;
	var numerador_d = document.getElementById('numero_b3').value;
	var numerador_e = document.getElementById('numerador').value;
  	if (numerador_a != '' && numerador_b != '' && numerador_c != '' && numerador_d != '' && numerador_e != '') {
		if (numerador_a == 2 && numerador_b == 4 && numerador_c == 2 && numerador_d == 8 && numerador_e == 9) {
  			acierto();
  		}else{
  			error();
  		};
  	};
}

function fraccion_19 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
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

function fraccion_19_uno () {
  	var numerador = document.getElementById('numerador_uno').value;
  	var denominador = document.getElementById('denominador_uno').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 5.5) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_19_dos () {
  	var numerador = document.getElementById('numerador_dos').value;
  	var denominador = document.getElementById('denominador_dos').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 4.5) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_20 () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_a != '' && denominador_a != '' && numerador_b != '' && denominador_b != '') {
  		result_frac1 = numerador_a / denominador_a;
  		result_frac2 = numerador_b / denominador_b;
  		console.log(result_frac1);
  		console.log(result_frac2);
		if (parseFloat(result_frac1) == 3.75 && parseFloat(result_frac2) == 3.95) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_20_uno () {
  	var numerador_a = document.getElementById('numerador_a_uno').value;
  	var denominador_a = document.getElementById('denominador_a_uno').value;
  	var numerador_b = document.getElementById('numerador_b_uno').value;
  	var denominador_b = document.getElementById('denominador_b_uno').value;
  	if (numerador_a != '' && denominador_a != '' && numerador_b != '' && denominador_b != '') {
  		result_frac1 = numerador_a / denominador_a;
  		result_frac2 = numerador_b / denominador_b;
  		console.log(result_frac1);
  		console.log(result_frac2);
		if (parseFloat(result_frac1) == 2.8333333333333335 && parseFloat(result_frac2) == 2.361111111111111) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_20_dos () {
  	var numerador_a = document.getElementById('numerador_a_dos').value;
  	var denominador_a = document.getElementById('denominador_a_dos').value;
  	var numerador_b = document.getElementById('numerador_b_dos').value;
  	var denominador_b = document.getElementById('denominador_b_dos').value;
  	if (numerador_a != '' && denominador_a != '' && numerador_b != '' && denominador_b != '') {
  		result_frac1 = numerador_a / denominador_a;
  		result_frac2 = numerador_b / denominador_b;
  		console.log(result_frac1);
  		console.log(result_frac2);
		if (parseFloat(result_frac1) == 4.833333333333333 && parseFloat(result_frac2) == 3.2222222222222223 ) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function respuesta_21 () {
  	var opcion1 = document.getElementById('r1').cheked;
  	var opcion2 = document.getElementById('r2').cheked;
  	var opcion3 = document.getElementById('r3').cheked;
  	switch (ia) {
		case 1:
			error();
			ia++;
			break;	
		case 2:
			error();
			ia++;
			break;
		case 3:
			acierto();
			ia++;
			break;
		
	}
	
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

function fraccion_26 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 1.3333333333333333) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_26_uno () {
  	var numerador = document.getElementById('numerador_uno').value;
  	var denominador = document.getElementById('denominador_uno').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 0.45454545454545453) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_26_dos () {
  	var numerador = document.getElementById('numerador_dos').value;
  	var denominador = document.getElementById('denominador_dos').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 0.3333333333333333) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_28 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 0.25) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_28_uno () {
  	var numerador = document.getElementById('numerador_uno').value;
  	var denominador = document.getElementById('denominador_uno').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 0.75) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}


function fraccion_28_dos () {
  	var numerador = document.getElementById('numerador_dos').value;
  	var denominador = document.getElementById('denominador_dos').value;
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

function fraccion_33 () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_a != '' && denominador_a != '' && numerador_b != '' && denominador_b != '') {
  		result_frac1 = numerador_a / denominador_a;
  		console.log(result_frac1);
  		result_frac2 = numerador_b / denominador_b;
  		console.log(result_frac2);
		if ((parseFloat(result_frac1) == 0.6666666666666666) && (parseFloat(result_frac2) == 0.2222222222222222)) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_35 () {
  	var numerador = document.getElementById('numerador').value;
  	var denominador = document.getElementById('denominador').value;
  	if (numerador != '' && denominador != '') {
  		result_frac = numerador / denominador;
  		console.log(result_frac);
		if (parseFloat(result_frac) == 0.1) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_36 () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_a != '' && denominador_a != '' && numerador_b != '' && denominador_b != '') {
  		result_frac1 = numerador_a / denominador_a;
  		console.log(result_frac1);
  		result_frac2 = numerador_b / denominador_b;
  		console.log(result_frac2);
		if ((parseFloat(result_frac1) == 0.125) && (parseFloat(result_frac2) == 0.125)) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function fraccion_37 () {
  	var numerador_a = document.getElementById('numerador_a').value;
  	var denominador_a = document.getElementById('denominador_a').value;
  	var numerador_b = document.getElementById('numerador_b').value;
  	var denominador_b = document.getElementById('denominador_b').value;
  	if (numerador_a != '' && denominador_a != '' && numerador_b != '' && denominador_b != '') {
  		result_frac1 = numerador_a / denominador_a;
  		console.log(result_frac1);
  		result_frac2 = numerador_b / denominador_b;
  		console.log(result_frac2);
		if ((parseFloat(result_frac1) == 0.5) && (parseFloat(result_frac2) == 0.1)) {
  			acierto();	
  		}else{
  			error();
  		};
  	};
}

function respuesta_38 () {
  	var opcion1 = document.getElementById('r1').cheked;
  	var opcion2 = document.getElementById('r2').cheked;
  	switch (ia) {
		case 1:
			acierto();
			ia++;
			break;	
		case 2:
			error();
			ia++;
			break;
		
	}
	
}

