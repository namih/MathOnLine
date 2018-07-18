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

function resultado_1_a () {
  var res = document.getElementById('opcion_a');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_a').value;

    	 if (entero != '') {
  		     if (entero == -1 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_a').style.display = 'none';
                 document.getElementById('dos').style.display = 'inline-block';
                 document.getElementById('opciones_b').style.display = 'inline-block';


    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_b () {
  var res = document.getElementById('opcion_b');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_b').value;

    	 if (entero != '') {
  		     if (entero == -1 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_b').style.display = 'none';
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_c () {
  var entero = document.getElementById('entero_c').value;

    	 if (entero != '') {
  		     if (entero == 5 ) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_d () {
  var entero = document.getElementById('entero_d').value;

    	 if (entero != '') {
  		     if (entero == -7 ) {
    				     acierto();
                 document.getElementById('uno').style.display = 'none';
                 document.getElementById('dos').style.display = 'none';

                 document.getElementById('tres').style.display = 'none';
                 document.getElementById('cuatro').style.display = 'none';
                 document.getElementById('cinco').style.display = 'inline-block';
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/ec_val_abs/diapositiva_1_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_e () {
  var res = document.getElementById('opcion_c');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_e').value;

    	 if (entero != '') {
  		     if (entero == -1 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_c').style.display = 'none';
                 document.getElementById('siete').style.display = 'inline-block';
                 document.getElementById('opciones_d').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_f () {
  var res = document.getElementById('opcion_d');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_f').value;

    	 if (entero != '') {
  		     if (entero == -1 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_d').style.display = 'none';
                 document.getElementById('ocho').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_g () {
  var entero = document.getElementById('entero_g').value;

    	 if (entero != '') {
  		     if (entero == 9 ) {
    				     acierto();
                 document.getElementById('nueve').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_h () {
  var entero = document.getElementById('entero_h').value;

    	 if (entero != '') {
  		     if (entero == -11 ) {
    				     acierto();
                 document.getElementById('seis').style.display = 'none';
                 document.getElementById('siete').style.display = 'none';

                 document.getElementById('ocho').style.display = 'none';
                 document.getElementById('nueve').style.display = 'none';
                 document.getElementById('diez').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/ec_val_abs/diapositiva_1_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_i () {
  var res = document.getElementById('opcion_e');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_i').value;

    	 if (entero != '') {
  		     if (entero == -6 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_e').style.display = 'none';
                 document.getElementById('doce').style.display = 'inline-block';
                 document.getElementById('opciones_f').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_j () {
  var res = document.getElementById('opcion_f');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_j').value;

    	 if (entero != '') {
  		     if (entero == -6 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_f').style.display = 'none';
                 document.getElementById('trece').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_k () {
  var entero = document.getElementById('entero_k').value;

    	 if (entero != '') {
  		     if (entero == 7 ) {
    				     acierto();
                 document.getElementById('catorce').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_1_l () {
  var entero = document.getElementById('entero_l').value;

    	 if (entero != '') {
  		     if (entero == -7 ) {
    				     acierto();
                 document.getElementById('once').style.display = 'none';
                 document.getElementById('doce').style.display = 'none';

                 document.getElementById('trece').style.display = 'none';
                 document.getElementById('catorce').style.display = 'none';
                 document.getElementById('quince').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
  var entero_c = document.getElementById('entero_c').value;
  var entero_d = document.getElementById('entero_d').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == 24 && entero_b == 5 && entero_c == -14 && entero_d == 5) {
             acierto();


      }else{
        error();
      };
    };

}

function resultado_2_b () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
  var entero_c = document.getElementById('entero_g').value;
  var entero_d = document.getElementById('entero_h').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == 29 && entero_b == 9 && entero_c == -11 && entero_d == 9) {
             acierto();


      }else{
        error();
      };
    };

}

function resultado_2_c () {
  var entero_a = document.getElementById('entero_i').value;
  var entero_b = document.getElementById('entero_j').value;
  var entero_c = document.getElementById('entero_k').value;
  var entero_d = document.getElementById('entero_l').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == 1 && entero_b == -2 && entero_c == -5 && entero_d == -2) {
             acierto();


      }else{
        error();
      };
    };

}

function resultado_3_a () {
  var res = document.getElementById('opcion_a');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_a').value;

    	 if (entero != '') {
  		     if (entero == -2.5 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_a').style.display = 'none';
                 document.getElementById('dos').style.display = 'inline-block';
                 document.getElementById('opciones_b').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_b () {
  var res = document.getElementById('opcion_b');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_b').value;

    	 if (entero != '') {
  		     if (entero == -2.5 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_b').style.display = 'none';
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_c () {
  var entero = document.getElementById('entero_c').value;

    	 if (entero != '') {
  		     if (entero == -1.7) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_d () {
  var entero = document.getElementById('entero_d').value;

    	 if (entero != '') {
  		     if (entero == -3.2 ) {
    				     acierto();
                 document.getElementById('uno').style.display = 'none';
                 document.getElementById('dos').style.display = 'none';

                 document.getElementById('tres').style.display = 'none';
                 document.getElementById('cuatro').style.display = 'none';
                 document.getElementById('cinco').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/ec_val_abs/diapositiva_3_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_e () {
  var res = document.getElementById('opcion_c');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_e').value;

    	 if (entero != '') {
  		     if (entero == 0.2 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_c').style.display = 'none';
                 document.getElementById('siete').style.display = 'inline-block';
                 document.getElementById('opciones_d').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_f () {
  var res = document.getElementById('opcion_d');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_f').value;

    	 if (entero != '') {
  		     if (entero == 0.2 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_d').style.display = 'none';
                 document.getElementById('ocho').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_g () {
  var entero = document.getElementById('entero_g').value;

    	 if (entero != '') {
  		     if (entero == 1.0) {
    				     acierto();
                 document.getElementById('nueve').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_h () {
  var entero = document.getElementById('entero_h').value;

    	 if (entero != '') {
  		     if (entero == -0.65) {
    				     acierto();
                 document.getElementById('seis').style.display = 'none';
                 document.getElementById('siete').style.display = 'none';

                 document.getElementById('ocho').style.display = 'none';
                 document.getElementById('nueve').style.display = 'none';
                 document.getElementById('diez').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/ec_val_abs/diapositiva_3_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_i () {
  var res = document.getElementById('opcion_e');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_i').value;

    	 if (entero != '') {
  		     if (entero == 0.4 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_e').style.display = 'none';
                 document.getElementById('doce').style.display = 'inline-block';
                 document.getElementById('opciones_f').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_j () {
  var res = document.getElementById('opcion_f');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_j').value;

    	 if (entero != '') {
  		     if (entero == 0.4 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_f').style.display = 'none';
                 document.getElementById('trece').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_k () {
  var entero = document.getElementById('entero_k').value;

    	 if (entero != '') {
  		     if (entero == 3.4 ) {
    				     acierto();
                 document.getElementById('catorce').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_3_l () {
  var entero = document.getElementById('entero_l').value;

    	 if (entero != '') {
  		     if (entero == -2.6 ) {
    				     acierto();
                 document.getElementById('once').style.display = 'none';
                 document.getElementById('doce').style.display = 'none';

                 document.getElementById('trece').style.display = 'none';
                 document.getElementById('catorce').style.display = 'none';
                 document.getElementById('quince').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/ec_val_abs/diapositiva_3_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
  var entero_c = document.getElementById('entero_c').value;
  var entero_d = document.getElementById('entero_d').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == -3.375 && entero_b == -4 && entero_c == -4.625 && entero_d == -4) {
             acierto();


      }else{
        error();
      };
    };

}

function resultado_4_b () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
  var entero_c = document.getElementById('entero_g').value;
  var entero_d = document.getElementById('entero_h').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == -0.556 && entero_b == -0.667 && entero_c == -0.778 && entero_d == -0.667) {
             acierto();


      }else{
        error();
      };
    };

}

function resultado_4_c () {
  var entero_a = document.getElementById('entero_i').value;
  var entero_b = document.getElementById('entero_j').value;
  var entero_c = document.getElementById('entero_k').value;
  var entero_d = document.getElementById('entero_l').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == -0.093 && entero_b == 0 && entero_c == 0.093 && entero_d == 0) {
             acierto();


      }else{
        error();
      };
    };

}

function resultado_5 () {
  var res = document.getElementById('opcion');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    if (seleccionado == 2) {
    		acierto();
        document.getElementById('valores').style.display = 'inline-block';

    }else{
    			error();
    };
}

function puntos_5 () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
  var entero_c = document.getElementById('entero_c').value;
  var entero_d = document.getElementById('entero_d').value;


   if (entero_a != '' && entero_b != '' && entero_c != '' && entero_d != '') {
       if (entero_a == 35 && entero_b == 10 && entero_c == -15 && entero_d == 10) {
             acierto();
             /* hacer la carga de la grafica hasta que el resultado esté validado*/
              var applet = new GGBApplet({filename: base_url+"statics/ggb/ec_val_abs/diapositiva_5.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
              applet.inject('recta');

      }else{
        error();
      };
    };

}
