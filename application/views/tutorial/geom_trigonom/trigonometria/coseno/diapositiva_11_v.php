<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/coseno/coseno.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/circunferencia/circunferencia6.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Sabemos ahora que, cuando θ vale <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>4</mn></mfrac></math>,</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mo>-</mo><mn>1</mn></mrow><msqrt><mn>2</mn></msqrt></mfrac></math></p>
		<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mi>o</mi><mi>s</mi><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
		<mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo>
				<mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow><mrow>
					<mi>H</mi><mi>i</mi><mi>p</mi><mi>o</mi><mi>t</mi><mi>e</mi><mi>n</mi><mi>u</mi><mi>s</mi><mi>a</mi></mrow></mfrac>
				<mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>x</mi><mi>r</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
		<mi>
			<semantics>
			  <annotation-xml encoding="application/xhtml+xml">
			  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
			  </annotation-xml>
			</semantics>
		</mi><mi>
			<semantics>
			  <annotation-xml encoding="application/xhtml+xml">
			  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
			  </annotation-xml>
			</semantics>
		</mi></mfrac></math></h3>
	</div>
	<div align="center" id="applet_container" >
	</div>	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
