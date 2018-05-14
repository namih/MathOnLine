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
  		     if (entero == 9 && seleccionado == 1) {
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
  		     if (entero == 9 && seleccionado == 2) {
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
