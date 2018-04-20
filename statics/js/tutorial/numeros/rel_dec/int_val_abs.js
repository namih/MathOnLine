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
        	     MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_e () {
  	var entero = document.getElementById('entero_c').value;
  	 if (entero != '') {
			   if (entero == 1.96) {
  				     acierto();
               document.getElementById('seccion_5').style.display = 'inline-block';
               MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}

function entero_3_f () {
  	var entero = document.getElementById('entero_b').value;
  	 if (entero != '') {
			   if (entero == 10) {
  				     acierto();
               document.getElementById('seccion').style.display = 'none';
               document.getElementById('seccion_1').style.display = 'none';
               document.getElementById('seccion_2').style.display = 'inline-block';
        	     MathJax.Hub.Queue(["Reprocess",MathJax.Hub]);
  			}else{
  				error();
  			};
  		};
}
