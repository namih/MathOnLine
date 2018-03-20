<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/aplicaciones/distancia.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/dist_punto_d27.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>¿Cómo encontraríamos las coordenadas de un punto C sobre el eje X que equiste de los puntos A(2,1), B(-2,3)?</p>
		<p>En general, si las coordenadas de A son (x1,y1), las coordenadas de B, son (x2,y2) y las coordenadas de C son (x3,0), tendremos que igualar las expresiones:</p>
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><msup><mfenced><mrow><mi>x</mi><mn>1</mn><mo>-</mo><mi>x</mi><mn>3</mn></mrow></mfenced><mn>2</mn></msup><mo>+</mo><mo>(</mo><mi>y</mi><mn>1</mn><mo>-</mo><mn>0</mn><msup><mo>)</mo><mn>2</mn></msup></msqrt><mo>=</mo><msqrt><msup><mfenced><mrow><mi>x</mi><mn>2</mn><mo>-</mo><mi>x</mi><mn>3</mn></mrow></mfenced><mn>2</mn></msup><mo>+</mo><mo>(</mo><mi>y</mi><mn>2</mn><mo>-</mo><mn>0</mn><msup><mo>)</mo><mn>2</mn></msup></msqrt></math>
		<p> y despejar x3, inténtalo.</p>
	</div>	

	<div class="col-md-12  col-xs-12 table-responsive" id="box" align="center">
		<br /><br />
		<table>
				<tr>
					<label>C = (</label><input id="1" size="5"/><label>,</label><input id="2" size="5"/><label>)</label>
				</tr>
		</table>
	</div>
		<br /><br />
	<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
	</div>
	
</div>
<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar5()" value="Verificar" />	

<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 
