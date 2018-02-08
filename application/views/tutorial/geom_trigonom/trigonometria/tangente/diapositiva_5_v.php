<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/tangente/tangente.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/circunferencia/circunferencia6.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Arrastra el punto de manera que el ángulo θ sea 270º, es decir, de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac></math> radianes</p>
		<p>¿Cuánto vale la tangente de θ en este caso?</p>
		<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
			<mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow>
				<mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow></mfrac>
				<mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
					<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
					  </annotation-xml>
					</semantics>
				</mi><mn>
					<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
					  </annotation-xml>
					</semantics>
				</mn></mfrac></math></h3>
	</div>
	<div align="center" id="applet_container" >
	</div>	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
