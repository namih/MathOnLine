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

function simbolo_1 () {
  var res = document.getElementById('opcion');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;



  		     if (seleccionado == 3) {
    				     acierto();

                 document.getElementById('info').style.display = 'inline-block';
    			 }else{
    				     error();
    			};


}

function resultado_2_a () {
  var res = document.getElementById('opcion_a');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_a').value;

    	 if (entero != '') {
  		     if (entero == 5 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_a').style.display = 'none';
                 document.getElementById('dos').style.display = 'inline-block';
                 document.getElementById('opciones_b').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_b () {
  var res = document.getElementById('opcion_b');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_b').value;

    	 if (entero != '') {
  		     if (entero == 5 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_b').style.display = 'none';
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_c () {
  var res = document.getElementById('opcion_c');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_c').value;

    	 if (entero != '') {
  		     if (entero == 17 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_d () {
  var entero = document.getElementById('entero_d').value;
  var res = document.getElementById('opcion_d');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;

    	 if (entero != '') {
  		     if (entero == -7 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('uno').style.display = 'none';
                 document.getElementById('dos').style.display = 'none';

                 document.getElementById('tres').style.display = 'none';
                 document.getElementById('cuatro').style.display = 'none';
                 document.getElementById('cinco').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_2_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_e () {
  var res = document.getElementById('opcion_e');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_e').value;

    	 if (entero != '') {
  		     if (entero == 6 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_c').style.display = 'none';
                 document.getElementById('siete').style.display = 'inline-block';
                 document.getElementById('opciones_d').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_f () {
  var res = document.getElementById('opcion_f');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_f').value;

    	 if (entero != '') {
  		     if (entero == 6 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_d').style.display = 'none';
                 document.getElementById('ocho').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_g () {
  var entero = document.getElementById('entero_g').value;
  var res = document.getElementById('opcion_g');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == 24 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('nueve').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_h () {
  var entero = document.getElementById('entero_h').value;
  var res = document.getElementById('opcion_h');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == -12 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('seis').style.display = 'none';
                 document.getElementById('siete').style.display = 'none';

                 document.getElementById('ocho').style.display = 'none';
                 document.getElementById('nueve').style.display = 'none';
                 document.getElementById('diez').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_2_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_i () {
  var res = document.getElementById('opcion_i');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_i').value;

    	 if (entero != '') {
  		     if (entero == 9 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_e').style.display = 'none';
                 document.getElementById('doce').style.display = 'inline-block';
                 document.getElementById('opciones_f').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_j () {
  var res = document.getElementById('opcion_j');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_j').value;

    	 if (entero != '') {
  		     if (entero == 9 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_f').style.display = 'none';
                 document.getElementById('trece').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_k () {
  var entero = document.getElementById('entero_k').value;

    	 if (entero != '') {
  		     if (entero == 23 ) {
    				     acierto();
                 document.getElementById('catorce').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_2_l () {
  var entero = document.getElementById('entero_l').value;

    	 if (entero != '') {
  		     if (entero == -5 ) {
    				     acierto();
                 document.getElementById('once').style.display = 'none';
                 document.getElementById('doce').style.display = 'none';

                 document.getElementById('trece').style.display = 'none';
                 document.getElementById('catorce').style.display = 'none';
                 document.getElementById('quince').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_2_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_3_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -10.02 && entero_b == 1.4) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_3_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_3_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -5.26 && entero_b == 5.52) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_3_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_3_c () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -6.43 && entero_b == 5.81) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_3_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');


    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_a () {
  var res = document.getElementById('opcion_a');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_a').value;

    	 if (entero != '') {
  		     if (entero == -4 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_a').style.display = 'none';
                 document.getElementById('dos').style.display = 'inline-block';
                 document.getElementById('opciones_b').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_b () {
  var res = document.getElementById('opcion_b');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_b').value;

    	 if (entero != '') {
  		     if (entero == -4 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_b').style.display = 'none';
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_c () {
  var res = document.getElementById('opcion_c');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_c').value;

    	 if (entero != '') {
  		     if (entero == 7 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_d () {
  var entero = document.getElementById('entero_d').value;
  var res = document.getElementById('opcion_d');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;

    	 if (entero != '') {
  		     if (entero == -15 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('uno').style.display = 'none';
                 document.getElementById('dos').style.display = 'none';

                 document.getElementById('tres').style.display = 'none';
                 document.getElementById('cuatro').style.display = 'none';
                 document.getElementById('cinco').style.display = 'inline-block';
                 document.getElementById('recta_a').style.display = 'inline-block';

                /* hacer la carga de la grafica hasta que el resultado esté validado*/
                 var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_4_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                 applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_e () {
  var res = document.getElementById('opcion_e');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_e').value;

    	 if (entero != '') {
  		     if (entero == 4 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_c').style.display = 'none';
                 document.getElementById('siete').style.display = 'inline-block';
                 document.getElementById('opciones_d').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_f () {
  var res = document.getElementById('opcion_f');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_f').value;

    	 if (entero != '') {
  		     if (entero == 4 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_d').style.display = 'none';
                 document.getElementById('ocho').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_g () {
  var entero = document.getElementById('entero_g').value;
  var res = document.getElementById('opcion_g');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == 15 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('nueve').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_h () {
  var entero = document.getElementById('entero_h').value;
  var res = document.getElementById('opcion_h');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == -7 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('seis').style.display = 'none';
                 document.getElementById('siete').style.display = 'none';

                 document.getElementById('ocho').style.display = 'none';
                 document.getElementById('nueve').style.display = 'none';
                 document.getElementById('diez').style.display = 'inline-block';
                 document.getElementById('recta_b').style.display = 'inline-block';


                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_4_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_i () {
  var res = document.getElementById('opcion_i');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_i').value;

    	 if (entero != '') {
  		     if (entero == 7 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_e').style.display = 'none';
                 document.getElementById('doce').style.display = 'inline-block';
                 document.getElementById('opciones_f').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_j () {
  var res = document.getElementById('opcion_j');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_j').value;

    	 if (entero != '') {
  		     if (entero == 7 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_f').style.display = 'none';
                 document.getElementById('trece').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_4_k () {
  var entero = document.getElementById('entero_k').value;
  var res = document.getElementById('opcion_k');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '' && seleccionado != '') {
  		     if (entero == 22 && seleccionado == 3) {

    				     acierto();
                 document.getElementById('catorce').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};
}

function resultado_4_l () {
  var entero = document.getElementById('entero_l').value;
  var res = document.getElementById('opcion_l');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '' && seleccionado != '') {
  		     if (entero == -8 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('once').style.display = 'none';
                 document.getElementById('doce').style.display = 'none';

                 document.getElementById('trece').style.display = 'none';
                 document.getElementById('catorce').style.display = 'none';
                 document.getElementById('quince').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_4_3.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_5_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -5.12 && entero_b == 25.44) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_5_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_5_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -17.41 && entero_b == 31.97) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_5_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_5_c () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -41.71 && entero_b == 1) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_5_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_a () {
  var res = document.getElementById('opcion_a');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_a').value;

    	 if (entero != '') {
  		     if (entero == 3 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_a').style.display = 'none';
                 document.getElementById('dos').style.display = 'inline-block';
                 document.getElementById('opciones_b').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_b () {
  var res = document.getElementById('opcion_b');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_b').value;

    	 if (entero != '') {
  		     if (entero == 3 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_b').style.display = 'none';
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_c () {
  var res = document.getElementById('opcion_c');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_c').value;

    	 if (entero != '') {
  		     if (entero == 9 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_d () {
  var entero = document.getElementById('entero_d').value;
  var res = document.getElementById('opcion_d');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;

    	 if (entero != '') {
  		     if (entero == -3 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('uno').style.display = 'none';
                 document.getElementById('dos').style.display = 'none';

                 document.getElementById('tres').style.display = 'none';
                 document.getElementById('cuatro').style.display = 'none';
                 document.getElementById('cinco').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_6_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_e () {
  var res = document.getElementById('opcion_e');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_e').value;

    	 if (entero != '') {
  		     if (entero == -5 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_c').style.display = 'none';
                 document.getElementById('siete').style.display = 'inline-block';
                 document.getElementById('opciones_d').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_f () {
  var res = document.getElementById('opcion_f');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_f').value;

    	 if (entero != '') {
  		     if (entero == -5 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_d').style.display = 'none';
                 document.getElementById('ocho').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_g () {
  var entero = document.getElementById('entero_g').value;
  var res = document.getElementById('opcion_g');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == 6 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('nueve').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_h () {
  var entero = document.getElementById('entero_h').value;
  var res = document.getElementById('opcion_h');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == -16 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('seis').style.display = 'none';
                 document.getElementById('siete').style.display = 'none';

                 document.getElementById('ocho').style.display = 'none';
                 document.getElementById('nueve').style.display = 'none';
                 document.getElementById('diez').style.display = 'inline-block';
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_6_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_i () {
  var res = document.getElementById('opcion_i');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_i').value;

    	 if (entero != '') {
  		     if (entero == -2 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_e').style.display = 'none';
                 document.getElementById('doce').style.display = 'inline-block';
                 document.getElementById('opciones_f').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_j () {
  var res = document.getElementById('opcion_j');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_j').value;

    	 if (entero != '') {
  		     if (entero == -2 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_f').style.display = 'none';
                 document.getElementById('trece').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_k () {
  var entero = document.getElementById('entero_k').value;
  var res = document.getElementById('opcion_k');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '' && seleccionado != '') {
  		     if (entero == 8 && seleccionado == 1 ) {
    				     acierto();
                 document.getElementById('catorce').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_6_l () {
  var entero = document.getElementById('entero_l').value;
  var res = document.getElementById('opcion_l');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '' && seleccionado != '') {
  		     if (entero == -12 && seleccionado == 3 ) {
    				     acierto();
                 document.getElementById('once').style.display = 'none';
                 document.getElementById('doce').style.display = 'none';

                 document.getElementById('trece').style.display = 'none';
                 document.getElementById('catorce').style.display = 'none';
                 document.getElementById('quince').style.display = 'inline-block';
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_6_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_7_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -12.52 && entero_b == 2.48) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_7_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_7_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -17.75 && entero_b == 17.75) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_7_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_7_c () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -11.86 && entero_b == 11.53) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_7_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_8_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -48.97 && entero_b == 38.91) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_8_a.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_8_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -48.31 && entero_b == 26.25) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_8_b.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_8_c () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -5.20 && entero_b == 4.95) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_8_c.ggb","showToolbar":false, height: 300, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_a () {
  var res = document.getElementById('opcion_a');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_a').value;

    	 if (entero != '') {
  		     if (entero == -8 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_a').style.display = 'none';
                 document.getElementById('dos').style.display = 'inline-block';
                 document.getElementById('opciones_b').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_b () {
  var res = document.getElementById('opcion_b');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_b').value;

    	 if (entero != '') {
  		     if (entero == -8 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_b').style.display = 'none';
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_c () {
  var res = document.getElementById('opcion_c');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_c').value;

    	 if (entero != '') {
  		     if (entero == 4 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_d () {
  var entero = document.getElementById('entero_d').value;
  var res = document.getElementById('opcion_d');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;

    	 if (entero != '') {
  		     if (entero == -20 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('uno').style.display = 'none';
                 document.getElementById('dos').style.display = 'none';

                 document.getElementById('tres').style.display = 'none';
                 document.getElementById('cuatro').style.display = 'none';
                 document.getElementById('cinco').style.display = 'inline-block';
                 document.getElementById('recta_a').style.display = 'inline-block';

                /* hacer la carga de la grafica hasta que el resultado esté validado*/
                 var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_9_a.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                 applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_e () {
  var res = document.getElementById('opcion_e');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_e').value;

    	 if (entero != '') {
  		     if (entero == -2 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_c').style.display = 'none';
                 document.getElementById('siete').style.display = 'inline-block';
                 document.getElementById('opciones_d').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_f () {
  var res = document.getElementById('opcion_f');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_f').value;

    	 if (entero != '') {
  		     if (entero == -2 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_d').style.display = 'none';
                 document.getElementById('ocho').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_g () {
  var entero = document.getElementById('entero_g').value;
  var res = document.getElementById('opcion_g');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == 4 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('nueve').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_h () {
  var entero = document.getElementById('entero_h').value;
  var res = document.getElementById('opcion_h');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '') {
  		     if (entero == -8 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('seis').style.display = 'none';
                 document.getElementById('siete').style.display = 'none';

                 document.getElementById('ocho').style.display = 'none';
                 document.getElementById('nueve').style.display = 'none';
                 document.getElementById('diez').style.display = 'inline-block';
                 document.getElementById('recta_b').style.display = 'inline-block';


                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_9_b.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_i () {
  var res = document.getElementById('opcion_i');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_i').value;

    	 if (entero != '') {
  		     if (entero == 5 && seleccionado == 2) {
    				     acierto();
                 document.getElementById('opciones_e').style.display = 'none';
                 document.getElementById('doce').style.display = 'inline-block';
                 document.getElementById('opciones_f').style.display = 'inline-block';
    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_j () {
  var res = document.getElementById('opcion_j');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
  var entero = document.getElementById('entero_j').value;

    	 if (entero != '') {
  		     if (entero == 5 && seleccionado == 1) {
    				     acierto();
                 document.getElementById('opciones_f').style.display = 'none';
                 document.getElementById('trece').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function resultado_9_k () {
  var entero = document.getElementById('entero_k').value;
  var res = document.getElementById('opcion_k');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '' && seleccionado != '') {
  		     if (entero == 13 && seleccionado == 1) {

    				     acierto();
                 document.getElementById('catorce').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};
}

function resultado_9_l () {
  var entero = document.getElementById('entero_l').value;
  var res = document.getElementById('opcion_l');
  var seleccionado = res.options[res.selectedIndex].value;
  var respuesta = res.options[res.selectedIndex].text;
    	 if (entero != '' && seleccionado != '') {
  		     if (entero == -3 && seleccionado == 3) {
    				     acierto();
                 document.getElementById('once').style.display = 'none';
                 document.getElementById('doce').style.display = 'none';

                 document.getElementById('trece').style.display = 'none';
                 document.getElementById('catorce').style.display = 'none';
                 document.getElementById('quince').style.display = 'inline-block';

                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_9_c.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_10_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 3.52 && entero_b == 13.16) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_10_a.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_10_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 5.45 && entero_b == 14.47) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_10_b.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_10_c () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -23.97 && entero_b == 16.83) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_10_c.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_11_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -8.72 && entero_b == 17.55) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_11_a.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_11_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -2.91 && entero_b == 0.40) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_11_b.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                  applet.inject('recta_b');

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_11_c () {
  var entero_a = document.getElementById('entero_e').value;
  var entero_b = document.getElementById('entero_f').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 0.68 && entero_b == 6.88) {
    				     acierto();
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_11_c.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
                  applet.inject('recta_c');

    			 }else{
    				     error();
    			};
    		};

}

function respuesta_12 (){
    var res = document.getElementById('opcion');
    var seleccionado = res.options[res.selectedIndex].value;
    var respuesta = res.options[res.selectedIndex].text;
        if (seleccionado == 4) {
            acierto();
            document.getElementById('dos').style.display = 'inline-block';
        }
        else {
            error();
        }
}

function intervalo_12_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == -15 && entero_b == 35) {
    				     acierto();
                 
                 /* hacer la carga de la grafica hasta que el resultado esté validado*/
                  var applet = new GGBApplet({filename: base_url+"statics/ggb/des_val_abs/diapositiva_12.ggb","showToolbar":false, height: 150, "showMenuBar": false}, true);
                  applet.inject('recta_a');

    			 }else{
    				     error();
    			};
    		};

}

function respuesta_13 (){
    var res = document.getElementById('opcion');
    var seleccionado = res.options[res.selectedIndex].value;
    var respuesta = res.options[res.selectedIndex].text;
        if (seleccionado == 3) {
            acierto();
            document.getElementById('dos').style.display = 'inline-block';
        }
        else {
            error();
        }
}

function intervalo_13_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 4.77 && entero_b == 4.82) {
    				     acierto();
                 document.getElementById('tres').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_13_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 2.19 && entero_b == 2.18) {
    				     acierto();
                 document.getElementById('cuatro').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function error_13_a () {
  	var entero = document.getElementById('error_a').value;

  	 if (entero != '') {
		     if (entero == 0.239) {
  				     acierto();
               document.getElementById('cinco').style.display = 'inline-block';

  			 }else{
  				     error();
  			};
  		};
}

function porcentaje_13_a () {
  	var entero = document.getElementById('porcentaje_a').value;

  	 if (entero != '') {
		     if (entero == 1.037) {
  				     acierto();
               document.getElementById('seis').style.display = 'inline-block';

  			 }else{
  				     error();
  			};
  		};
}

function error_13_b () {
  	var entero = document.getElementById('error_b').value;

  	 if (entero != '') {
		     if (entero == 0.241) {
  				     acierto();
               document.getElementById('siete').style.display = 'inline-block';

  			 }else{
  				     error();
  			};
  		};
}

function porcentaje_13_b () {
  	var entero = document.getElementById('porcentaje_b').value;

  	 if (entero != '') {
		     if (entero == 1.046) {
  				     acierto();
               document.getElementById('ocho').style.display = 'inline-block';

  			 }else{
  				     error();
  			};
  		};
}

function intervalo_14_a () {
  var entero_a = document.getElementById('entero_a').value;
  var entero_b = document.getElementById('entero_b').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 7.8 && entero_b == 0.001) {
    				     acierto();
                 document.getElementById('dos').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}

function intervalo_14_b () {
  var entero_a = document.getElementById('entero_c').value;
  var entero_b = document.getElementById('entero_d').value;
    	 if (entero_a != '' && entero_b != '') {
  		     if (entero_a == 7.799 && entero_b == 7.801) {
    				     acierto();
                 document.getElementById('dos').style.display = 'inline-block';

    			 }else{
    				     error();
    			};
    		};

}
