<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_facto_1.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/tutorial/algebra/ecu_form_exp_id/Ecua_Cuadra_Facto_1/diapositiva_40.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<p>Encuentra los valores de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> que satisfacen la ecuación cuadratica
	<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mfrac><mn>1</mn><mn>4</mn></mfrac><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>.
	Hazlo en tu cuaderno. Verifica tus respuestas ubicando tus soluciones en la gráfica.</p>
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p>*Factoriza la ecuación.</p>
			<p>*Iguala cada factor a 0.</p>
			<p>*Despeja y obtén los valores de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>.</p>
			<p>*Observa la gráfica y localiza en ella los valores encontrados para <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>.</p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
			</div>
		</div>	
	</div>
	<div id="vergrafica">
		<input type="button" class="btn btn-success btn-sm" onclick="ocultar()" value="Ocultar Gráfica" /><br />
	</div>
	<div id="grafica" style='display:none;'>
		<input type="button" class="btn btn-success btn-sm" onclick="grafica()" value="Ver Gráfica" /><br />
	</div>
</div>
