<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_facto_2.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
  var applet = new GGBApplet({filename: base_url+"statics/ggb/tutorial/algebra/ecu_form_exp_id/Ecua_Cuadra_Facto_2/diapositiva_4.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
  window.addEventListener("load", function() {
        applet.inject('applet_container');  
    });
</script>
<div class="container-fluid">
  <p>En este caso, observamos que las dos ecuaciones que deben de ser cero son iguales <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>.</p>
  <p>Tenemos un valor de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> que hacen ambas ecuaciones igual a cero simultáneamente.</p>
  <p>Para que <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math> &emsp;&emsp; <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /></p>
  <p>Por lo tanto <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>1</mn></msub></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>2</mn></msub></math> tienen el mismo valor. Observa la gráfica a qué punto corresponde esta solución.</p>
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