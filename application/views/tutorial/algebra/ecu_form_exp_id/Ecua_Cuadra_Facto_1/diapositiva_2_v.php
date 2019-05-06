<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_facto_1.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
  var applet = new GGBApplet({filename: base_url+"statics/ggb/tutorial/algebra/ecu_form_exp_id/Ecua_Cuadra_Facto_1/diapositiva_2.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
  window.addEventListener("load", function() {
        applet.inject('applet_container');  
    });
</script>
<div class="container-fluid">
  <p>Observa que al factorizar el lado izquierdo en la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>, obtenemos un producto de dos factores: <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>(</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>)</mo></math> y que éste debe ser igual a cero.</p>
  <p>Sabemos que. <u>Para que un producto de dos factores sea igual a cero, al menos uno de los dos factores debe ser cero.</u></p>
  <p>Esto quiere decir, en este caso, que: <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math> o bien <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
  <p>¿Cuánto vale <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> en la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>? <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /></p>
  <p>Tenemos, entonces, que los valores de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> que resueven la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math> son:</p>
  <p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>1</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="2" size="4" /> &emsp;&emsp;
  <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>2</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="3" size="4" /></p>
  <p>Nota: Los subíndices 1 y 2 se usan para nombrar las dos soluciones de la ecuación.</p>
  <div id="applet_container" style='display:none;'>
  </div><br />
  <div id="vergrafica">
    <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
    <input type="button" class="btn btn-success btn-sm" onclick="mostrar()" value="VER GRÁFICA" /><br />
  </div>
  <div id="grafica" style='display:none;'>
    <input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" />
    <input type="button" class="btn btn-success btn-sm" onclick="mostrar1()" value="OCULTAR GRÁFICA" /><br />
  </div>
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>