<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/prop_inversa/diapositiva_19.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container_19');	
    });
</script>
<div class="container-fluid">
	<p>Observa que la gráfica de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>60</mn><mi>x</mi></math>
		 forma una linea recta, a diferencia de las gráfica de proporcionalidad inversa que vimos anteriormente.
	</p>
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p>¿Qué sucede en la gráfica cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>crece?</p>
			<form method="post" action="#">
				<table>
					<td align="left">
						<input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> crece<br />
						<input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> decrece<br /><br />
					</td>
				</table>
			</form>
			<p>¿Qué sucede en la gráfica cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> decrece?</p>
			<form method="post" action="#">
				<table>
					<td align="left">
						<input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> crece<br />
						<input type="checkbox" id="4" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> decrece<br /><br />
					</td>
				</table>
			</form>
			<p>En este caso, la relación entre el número de pintores y el número de metros cuadrados es de <i>proporcionalidad directa</i>. 
				Si no recuerdas las caracteristicas de este tipo de relación, consulta la primer parte de este tutorial.</p>
		</div>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container_19">
			</div>
		</div>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
