<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_facto_2.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/tutorial/algebra/ecu_form_exp_id/Ecua_Cuadra_Facto_2/diapositiva_16.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<p>Encuentra los valores de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> que satisfacen la ecuación cuadratica 
	<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>17</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>70</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>.
	Hazlo a mano. Verifica tus respuestas ubicando tus soluciones en la gráfica.</p>
	<div align="center" id="applet_container">
	</div><br />
	<div id="vergrafica">
		<input type="button" class="btn btn-success btn-sm" onclick="ocultar()" value="Ocultar Gráfica" /><br />
	</div>
	<div id="grafica" style='display:none;'>
		<input type="button" class="btn btn-success btn-sm" onclick="grafica()" value="Ver Gráfica" /><br />
	</div>
</div>
