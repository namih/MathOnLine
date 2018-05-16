<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/seno/seno.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/circunferencia/seno.ggb","showToolbar":false, height: 225, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<div id="principio">
		<div style="margin-bottom: 20px" class=" col-lg-12 col-md-12 col-xs-12">
			<p>Escribe un ángulo para el cual el seno tenga el valor dado.</p>
						<div align="center" id="applet_container" >
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<h4 id="n"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math></h4>
						</div>					
						<div class="btn-group" id="opciones1">
							<button onclick="decrementar_49_1()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_1()" type="button" class="btn btn-info">></button>
						</div>
						<br />
						<br />
						<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi></math>
							<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="number" step="0.01" id="1" />
							<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
			<div id="respuesta" class=" col-lg-12 col-md-12  col-xs-12" style='display:none;'>
				<p>Observa que existen varias respuestas correctas:</p>
				<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><mo>&#xA0;</mo><mo>-</mo><mn>3</mn><mi>&#x3C0;</mi><mo>,</mo><mo>&#xA0;</mo><mo>-</mo><mn>2</mn><mi>&#x3C0;</mi><mo>,</mo><mo>&#xA0;</mo><mo>-</mo><mi>&#x3C0;</mi><mo>,</mo><mo>&#xA0;</mo><mn>0</mn><mo>,</mo><mo>&#xA0;</mo><mi>&#x3C0;</mi><mo>,</mo><mo>&#xA0;</mo><mn>2</mn><mi>&#x3C0;</mi><mo>,</mo><mo>&#xA0;</mo><mn>3</mn><mi>&#x3C0;</mi><mo>,</mo><mo>&#xA0;</mo><mo>.</mo><mo>.</mo><mo>.</mo></math>
			</div>
		</div>
	</div>
</div>