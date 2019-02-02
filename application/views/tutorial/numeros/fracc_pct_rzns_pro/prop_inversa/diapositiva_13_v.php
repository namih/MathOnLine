<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/prop_inversa/diapositiva_12.ggb","showToolbar":false, height: 390, width: 480,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container_12');	
    });
</script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p>¿Qué sucede en la gráfica cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> es negativa y decrece?</p>
			<form method="post" action="#">
				<table>
					<td align="left">
						<input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> crece<br />
						<input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> decrece<br /><br />
					</td>
				</table>
			</form>
			<p>¿Qué sucede en la gráfica cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> es negativa y se acerca a cero?</p>
			<form method="post" action="#">
				<table>
					<td align="left">
						<input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> crece<br />
						<input type="checkbox" id="4" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> decrece<br /><br />
					</td>
				</table>
			</form>
			<p>Observa ue la hipérbola tiene dos secciones, las cuales se conocen como <i>ramas</i>.</p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container_12">
			</div>
		</div>	
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
