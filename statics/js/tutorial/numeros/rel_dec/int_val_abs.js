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

function fraccion_4_a () {
  var numerador_a = document.getElementById('numerador_4a').value;
  var denominador_a = document.getElementById('denominador_4b').value;
  var numerador_b = document.getElementById('numerador_4c').value;
  var denominador_b = document.getElementById('denominador_4d').value;
  var numerador_c = document.getElementById('numerador_4e').value;
  var denominador_c = document.getElementById('denominador_4f').value;

   if ((numerador_a != '' && denominador_a != '') && (numerador_b != '' && denominador_b != '') && (numerador_c != '' && denominador_c != '')) {
       if ((numerador_a == 4 && denominador_a == 17) &&(numerador_b == 4 && denominador_b == 17) && (numerador_c == 4 && denominador_c == 17)) {
             acierto();
            document.getElementById("indicador_c").innerHTML ='Efectivamente, <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mfrac><mn>4</mn><mn>17</mn></mfrac><mo>&#xA0;</mo><mi>y</mi><mo>&#xA0;</mo><mfrac><mn>4</mn><mn>17</mn></mfrac></math> son simétricos y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mfrac><mn>4</mn><mn>17</mn></mfrac></mrow></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfenced open="|" close="|"><mrow><mo>&#xA0;</mo><mfrac><mn>4</mn><mn>17</mn></mfrac></mrow></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>4</mn><mn>17</mn></mfrac></math>';

      }else{
        error();
      };
    };

}

function entero_8_a () {
  	var entero_a = document.getElementById('entero_a').value;
    var entero_b = document.getElementById('entero_b').value;
    var entero_c = document.getElementById('entero_c').value;
    var entero_d = document.getElementById('entero_d').value;
  	 if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
			   if (entero_a == -2.3 && entero_b == 2.3 && entero_c == 2.3 && entero_d == 2.3) {
  				     acierto();
              document.getElementById('recta_a').style.display = 'inline-block';
  			}else{
  				error();
  			};
  		};
}

function entero_8_b () {
  	var entero_a = document.getElementById('entero_uno_a').value;
    var entero_b = document.getElementById('entero_uno_b').value;
    var entero_c = document.getElementById('entero_uno_c').value;
    var entero_d = document.getElementById('entero_uno_d').value;
  	 if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
			   if (entero_a == 10 && entero_b == 10 && entero_c == -10 && entero_d == 10) {
  				     acierto();
              document.getElementById('recta_b').style.display = 'inline-block';
  			}else{
  				error();
  			};
  		};
}

function entero_8_c () {
  	var entero_a = document.getElementById('entero_dos_a').value;
    var entero_b = document.getElementById('entero_dos_b').value;
    var entero_c = document.getElementById('entero_dos_c').value;
    var entero_d = document.getElementById('entero_dos_d').value;
  	 if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
			   if (entero_a == -17 && entero_b == 17 && entero_c == 17 && entero_d == 17) {
  				     acierto();
              document.getElementById('recta_c').style.display = 'inline-block';
  			}else{
  				error();
  			};
  		};
}

function seleccionado_9 (){
    var res1 = document.getElementById('opcion_a');
    var res2 = document.getElementById('opcion_b');
    var seleccionado_a = res1.options[res1.selectedIndex].value;
    var seleccionado_b = res2.options[res2.selectedIndex].value;
    var respuesta_a = res1.options[res1.selectedIndex].text;
    var respuesta_b = res2.options[res2.selectedIndex].text;
        if (seleccionado_a == 1 && seleccionado_b == 3) {
            acierto();
        }
        else {
            error();
        }
}

function operacion_10_a () {
  	var entero = document.getElementById('result_a').value;
    if (entero != '') {
		     if (entero == -36) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
}

function operacion_10_b () {
  	var entero = document.getElementById('result_b').value;
    if (entero != '') {
		     if (entero == 209) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
}

function operacion_10_c () {
  	var entero = document.getElementById('result_c').value;
    if (entero != '') {
		     if (entero == 23) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
}

function operacion_11_a () {
  	var entero_a = document.getElementById('entero_a').value;
    var entero_b = document.getElementById('entero_b').value;
    var opcion = document.getElementById('opcion_a');

    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;


    if (entero_a != '' && entero_b !='' ) {
		     if (entero_a == 4 && entero_b == 2 && seleccionado_a == 1) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
}

function operacion_11_b () {
  	var entero_a = document.getElementById('entero_uno_a').value;
    var entero_b = document.getElementById('entero_uno_b').value;
    var opcion = document.getElementById('opcion_uno_a');

    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;


    if (entero_a != '' && entero_b !='' ) {
		     if (entero_a == 3 && entero_b == 15 && seleccionado_a == 1) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
    }

      function operacion_11_c () {
        	var entero_a = document.getElementById('entero_dos_a').value;
          var entero_b = document.getElementById('entero_dos_b').value;
          var opcion = document.getElementById('opcion_dos_a');

          var seleccionado_a = opcion.options[opcion.selectedIndex].value;
          var respuesta_a = opcion.options[opcion.selectedIndex].text;


          if (entero_a != '' && entero_b !='' ) {
      		     if (entero_a == 3 && entero_b == 11 && seleccionado_a == 1) {
        				     acierto();
        			 }else{
        				     error();
        			};
        		};
}

function operacion_12_a () {
  	var entero_a = document.getElementById('entero_a').value;
    var entero_b = document.getElementById('entero_b').value;
    var opcion = document.getElementById('opcion_a');

    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;


    if (entero_a != '' && entero_b !='' ) {
		     if (entero_a == 1 && entero_b == 13 && seleccionado_a == 1) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
}

function operacion_12_b () {
  	var entero_a = document.getElementById('entero_uno_a').value;
    var entero_b = document.getElementById('entero_uno_b').value;
    var opcion = document.getElementById('opcion_uno_a');

    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;


    if (entero_a != '' && entero_b !='' ) {
		     if (entero_a == 2 && entero_b == 4 && seleccionado_a == 1) {
  				     acierto();
  			 }else{
  				     error();
  			};
  		};
    }


    function operacion_12_c () {
        var entero_a = document.getElementById('entero_dos_a').value;
        var entero_b = document.getElementById('entero_dos_b').value;
        var opcion = document.getElementById('opcion_dos_a');

        var seleccionado_a = opcion.options[opcion.selectedIndex].value;
        var respuesta_a = opcion.options[opcion.selectedIndex].text;


        if (entero_a != '' && entero_b !='' ) {
             if (entero_a == 4 && entero_b == 6 && seleccionado_a == 1) {
                   acierto();
             }else{
                   error();
            };
          };
    }

    function operacion_13_a () {
      	var entero_a = document.getElementById('entero_a').value;
        var entero_b = document.getElementById('entero_b').value;
        var opcion = document.getElementById('opcion_a');

        var seleccionado_a = opcion.options[opcion.selectedIndex].value;
        var respuesta_a = opcion.options[opcion.selectedIndex].text;


        if (entero_a != '' && entero_b !='' ) {
    		     if (entero_a == 7 && entero_b == 7 && seleccionado_a == 2) {
      				     acierto();
      			 }else{
      				     error();
      			};
      		};
    }

    function operacion_13_b () {
      	var entero_a = document.getElementById('entero_uno_a').value;
        var entero_b = document.getElementById('entero_uno_b').value;
        var opcion = document.getElementById('opcion_uno_a');

        var seleccionado_a = opcion.options[opcion.selectedIndex].value;
        var respuesta_a = opcion.options[opcion.selectedIndex].text;


        if (entero_a != '' && entero_b !='' ) {
    		     if (entero_a == 10 && entero_b == 10 && seleccionado_a == 2) {
      				     acierto();
      			 }else{
      				     error();
      			};
      		};
        }


function operacion_13_c () {
  var entero_a = document.getElementById('entero_dos_a').value;
  var entero_b = document.getElementById('entero_dos_b').value;
  var opcion = document.getElementById('opcion_dos_a');

  var seleccionado_a = opcion.options[opcion.selectedIndex].value;
  var respuesta_a = opcion.options[opcion.selectedIndex].text;


  if (entero_a != '' && entero_b !='' ) {
      if (entero_a == 5 && entero_b == 5 && seleccionado_a == 2) {
          acierto();
      }else{
            error();
      };
  };
}

function operacion_14_a () {
    var opcion = document.getElementById('opcion_a');
    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;
      if (seleccionado_a == 1) {
               acierto();
         }else{
               error();
        };

}

function operacion_14_b () {
    var opcion = document.getElementById('opcion_b');
    var seleccionado_b = opcion.options[opcion.selectedIndex].value;
    var respuesta_b = opcion.options[opcion.selectedIndex].text;
      if (seleccionado_b == 2) {
               acierto();
         }else{
               error();
        };

}

function operacion_14_c () {
    var opcion = document.getElementById('opcion_c');
    var seleccionado_c = opcion.options[opcion.selectedIndex].value;
    var respuesta_c = opcion.options[opcion.selectedIndex].text;
      if (seleccionado_c == 2) {
               acierto();
               document.getElementById('info').style.display = 'inline-block';
         }else{
               error();
        };

}

function operacion_15_a () {
    var entero_a = document.getElementById('entero_a').value;
    var entero_b = document.getElementById('entero_b').value;
    var opcion = document.getElementById('opcion_a');

    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;


    if (entero_a != '' && entero_b !='' ) {
         if (entero_a == 12 && entero_b == 12 && seleccionado_a == 2) {
               acierto();
         }else{
               error();
        };
      };
}

function operacion_15_b () {
    var entero_a = document.getElementById('entero_uno_a').value;
    var entero_b = document.getElementById('entero_uno_b').value;
    var opcion = document.getElementById('opcion_b');

    var seleccionado_a = opcion.options[opcion.selectedIndex].value;
    var respuesta_a = opcion.options[opcion.selectedIndex].text;


    if (entero_a != '' && entero_b !='' ) {
         if (entero_a == 63 && entero_b == 63 && seleccionado_a == 2) {
               acierto();
         }else{
               error();
        };
      };
    }

    function operacion_15_c () {
      var entero_a = document.getElementById('entero_dos_a').value;
      var entero_b = document.getElementById('entero_dos_b').value;
      var opcion = document.getElementById('opcion_c');

      var seleccionado_a = opcion.options[opcion.selectedIndex].value;
      var respuesta_a = opcion.options[opcion.selectedIndex].text;


      if (entero_a != '' && entero_b !='' ) {
          if (entero_a == 14 && entero_b == 14 && seleccionado_a == 2) {
              acierto();
          }else{
                error();
          };
      };
    }

    function operacion_16 () {
        var opcion = document.getElementById('opcion_a');
        var seleccionado_a = opcion.options[opcion.selectedIndex].value;
        var respuesta_a = opcion.options[opcion.selectedIndex].text;
        if (seleccionado_a == 2) {
            acierto();

        }else{
              error();
              document.getElementById('info_a').style.display = 'inline-block';
            };
    }
