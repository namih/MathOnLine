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
		<p>Sabemos ahora que, cuando θ vale <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mi>&#x3C0;</mi></mrow><mn>4</mn></mfrac></math>,</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><msqrt><mn>2</mn></msqrt></mfrac><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo>
			<mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mo>-</mo><mn>1</mn></mrow><msqrt><mn>2</mn></msqrt></mfrac></math></p>
		<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mfenced><mfrac><mrow><mn>7</mn><mi>&#x3C0;</mi></mrow><mn>4</mn></mfrac></mfenced><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
		<mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow>
				<mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow></mfrac>
				<mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
					  </annotation-xml>
					</semantics>
					</mi>
					<mi>
						<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
					  </annotation-xml>
					</semantics>
					</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
					<mi>
						<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="3" />
					  </annotation-xml>
					</semantics>
				</mi></math></h3>
	</div>
	<div align="center" id="applet_container" >
	</div>	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
