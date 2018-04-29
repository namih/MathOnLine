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

function respuesta_2 (){
    var res = document.getElementById('opcion');
    var seleccionado = res.options[res.selectedIndex].value;
    var respuesta = res.options[res.selectedIndex].text;
        if (seleccionado == 4) {
            acierto();
        }
        else {
            error();
        }
}

function entero_3_a () {
  	var entero = document.getElementById('entero_a').value;

  	 if (entero != '') {
		     if (entero == 10) {
  				     acierto();
               document.getElementById('seccion_1').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>1</mn><mn>6</mn></mfrac></math>';
        	     MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			 }else{
  				     error();
  			};
  		};
}

function entero_3_b () {
  	var entero = document.getElementById('entero_b').value;
  	 if (entero != '') {
			   if (entero == 10) {
  				     acierto();
               document.getElementById('seccion').style.display = 'none';
               document.getElementById('seccion_1').style.display = 'none';
               document.getElementById('seccion_2').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>2</mn><mn>6</mn></mfrac></math>';
        	     MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_c () {
  	var entero = document.getElementById('entero_c').value;
  	 if (entero != '') {
			   if (entero == 1.96) {
  				     acierto();
               document.getElementById('seccion_3').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>2</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_d () {
  	var entero = document.getElementById('entero_d').value;
  	 if (entero != '') {
			   if (entero == 1.96) {
  				     acierto();
               document.getElementById('seccion').style.display = 'none';
               document.getElementById('seccion_1').style.display = 'none';
               document.getElementById('seccion_2').style.display = 'none';
               document.getElementById('seccion_3').style.display = 'none';
               document.getElementById('seccion_4').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>3</mn><mn>6</mn></mfrac></math>';
        	     MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function fraccion_3_a () {
  	var numerador = document.getElementById('numerador_3a').value;
    var denominador = document.getElementById('denominador_3b').value;
  	 if (numerador != '' && denominador != '') {
			   if (numerador == 2 && denominador == 3) {
  				     acierto();
               document.getElementById('seccion_5').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>3</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function fraccion_3_b () {
  var numerador = document.getElementById('numerador_3c').value;
  var denominador = document.getElementById('denominador_3d').value;
   if (numerador != '' && denominador != '') {
       if (numerador == 2 && denominador == 3) {
             acierto();
             document.getElementById('seccion').style.display = 'none';
             document.getElementById('seccion_1').style.display = 'none';
             document.getElementById('seccion_2').style.display = 'none';
             document.getElementById('seccion_3').style.display = 'none';
             document.getElementById('seccion_4').style.display = 'none';
             document.getElementById('seccion_5').style.display = 'none';
             document.getElementById('seccion_6').style.display = 'inline-block';
             document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>4</mn><mn>6</mn></mfrac></math>';
             MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
      }else{
        error();
      };
    };

}

function entero_3_e () {
  	var entero = document.getElementById('entero_e').value;
  	 if (entero != '') {
			   if (entero == 12) {
  				     acierto();
               document.getElementById('seccion_7').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>4</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_f () {
  	var entero = document.getElementById('entero_f').value;
  	 if (entero != '') {
			   if (entero == 12) {
  				     acierto();
               document.getElementById('seccion').style.display = 'none';
               document.getElementById('seccion_1').style.display = 'none';
               document.getElementById('seccion_2').style.display = 'none';
               document.getElementById('seccion_3').style.display = 'none';
               document.getElementById('seccion_4').style.display = 'none';
               document.getElementById('seccion_5').style.display = 'none';
               document.getElementById('seccion_6').style.display = 'none';
               document.getElementById('seccion_7').style.display = 'none';
               document.getElementById('seccion_8').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>5</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_g () {
  	var entero = document.getElementById('entero_g').value;
  	 if (entero != '') {
			   if (entero == 1.58) {
  				     acierto();
               document.getElementById('seccion_9').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>5</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_h () {
  	var entero = document.getElementById('entero_h').value;
  	 if (entero != '') {
			   if (entero == 1.58) {
  				     acierto();
               document.getElementById('seccion').style.display = 'none';
               document.getElementById('seccion_1').style.display = 'none';
               document.getElementById('seccion_2').style.display = 'none';
               document.getElementById('seccion_3').style.display = 'none';
               document.getElementById('seccion_4').style.display = 'none';
               document.getElementById('seccion_5').style.display = 'none';
               document.getElementById('seccion_6').style.display = 'none';
               document.getElementById('seccion_7').style.display = 'none';
               document.getElementById('seccion_8').style.display = 'none';
               document.getElementById('seccion_9').style.display = 'none';
               document.getElementById('seccion_10').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>6</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function fraccion_3_c () {
  	var numerador = document.getElementById('numerador_3e').value;
    var denominador = document.getElementById('denominador_3f').value;
  	 if (numerador != '' && denominador != '') {
			   if (numerador == 1 && denominador == 3) {
  				     acierto();
               document.getElementById('seccion_11').style.display = 'inline-block';
               document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>6</mn><mn>6</mn></mfrac></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function fraccion_3_d () {
  var numerador = document.getElementById('numerador_3g').value;
  var denominador = document.getElementById('denominador_3h').value;
   if (numerador != '' && denominador != '') {
       if (numerador == 1 && denominador == 3) {
             acierto();
             document.getElementById("indicador").innerHTML ='Ejercicio: <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac bevelled="true"><mn>6</mn><mn>6</mn></mfrac></math>';
             MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
      }else{
        error();
      };
    };

}

function entero_4_a () {
  	var entero_a = document.getElementById('entero_a').value;
    var entero_b = document.getElementById('entero_b').value;
    var entero_c = document.getElementById('entero_c').value;
  	 if (entero_a != '' && entero_b != '' && entero_c != '') {
			   if (entero_a == 12 && entero_b == 12 && entero_c == 12) {
  				     acierto();
               document.getElementById("indicador_a").innerHTML ='Efectivamente, -12 y 12 son simétricos y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>12</mn></mrow></mfenced><mo>=</mo><mfenced open="|" close="|"><mn>12</mn></mfenced><mo>=</mo><mn>12</mn></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_4_b () {
  	var entero_d = document.getElementById('entero_d').value;
    var entero_e = document.getElementById('entero_e').value;
    var entero_f = document.getElementById('entero_f').value;
  	 if (entero_d != '' && entero_e != '' && entero_f != '') {
			   if (entero_d == 1.08 && entero_e == 1.08 && entero_f == 1.08) {
  				     acierto();
               document.getElementById("indicador_b").innerHTML ='Efectivamente, -1.08 y 1.08 son simétricos y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>1.08</mn></mrow></mfenced><mo>=</mo><mfenced open="|" close="|"><mn>1.08</mn></mfenced><mo>=</mo><mn>1.08</mn></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_4_c () {
  	var entero_a = document.getElementById('entero_g').value;
    var entero_b = document.getElementById('entero_h').value;
    var entero_c = document.getElementById('entero_i').value;
  	 if (entero_a != '' && entero_b != '' && entero_c != '') {
			   if (entero_a == 12 && entero_b == 12 && entero_c == 12) {
  				     acierto();
               document.getElementById("indicador").innerHTML ='Efectivamente, -12 y 12 son simétricos y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>12</mn></mrow></mfenced><mo>=</mo><mfenced open="|" close="|"><mn>12</mn></mfenced><mo>=</mo><mn>12</mn></math>';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}
