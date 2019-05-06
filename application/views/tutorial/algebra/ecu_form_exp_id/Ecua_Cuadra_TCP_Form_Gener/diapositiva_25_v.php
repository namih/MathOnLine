<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/tutorial/algebra/ecu_form_exp_id/Ecua_Cuadra_TCP_Form_Gener/diapositiva_25.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<p>Observa la gráfica de la función <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mfrac><mn>3</mn><mn>4</mn></mfrac></math>.</p>
	<p>Localiza las raíces buscando el o los valores de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> para los cuales <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> es cero.</p>
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mfrac><mn>3</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn><mo>.</mo><mn>3</mn></math></p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>1</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /> &emsp;&emsp; y &emsp;&emsp; <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>2</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="2" size="4" /></p>
			<p>Compara estos valores con los que obtuviste utilizando el método de completar cuadrados.</p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
			</div>
		</div>	
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>
