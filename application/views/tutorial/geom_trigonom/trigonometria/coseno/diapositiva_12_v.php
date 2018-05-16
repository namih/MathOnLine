<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/coseno/coseno.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/circunferencia/circunferencia6.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container_15');	
    });
</script>
<div class="container-fluid">
	<p>Arrastra el punto del deslizador de manera que el ángulo θ sea 225º, es decir de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>5</mn><mi>&#x3C0;</mi></mrow><mn>4</mn></mfrac></math> radianes.</p>
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p>Observa que el triángulo que tomamos en cuenta es el que se muestra en amarillo.</p>
			<p>¿Cuánto vale el coseno de θ en este caso?</p>
			<p>Encuentra el valor de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> utilizando el teorema de Pitágoras</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>
				<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
					  </annotation-xml>
					</semantics>
			</mn><mn>
				<semantics>
					  <annotation-xml encoding="application/xhtml+xml">
					  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
					  </annotation-xml>
					</semantics>
			</mn></mfrac></math></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container_15">
			</div>
		</div>	
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
