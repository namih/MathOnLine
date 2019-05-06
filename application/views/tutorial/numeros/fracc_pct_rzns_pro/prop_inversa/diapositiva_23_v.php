<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/prop_inversa/diapositiva_12.ggb","showToolbar":false, height: 390, width: 450,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container_23_a');	
    });
</script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/prop_inversa/diapositiva_12.ggb","showToolbar":false, height: 390, width: 450,"showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container_23_b');	
    });
</script>
<div class="container-fluid">
	<p>Seleccione la gráfica que representa la situación del tiempo de llenado de tanque con distintas mangueras:</p>
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container_23_a">
			</div>
			<p>Gráfica 1</p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container_23_b">
			</div>
			<p>Gráfica 2</p>
		</div>	
	</div>
	<form method="post" action="#">
		<table>
			<td align="left">
				<input type="checkbox" id="1" /> Gráfica 1<br />
				<input type="checkbox" id="2" /> Gráfica 2<br /><br />
			</td>
		</table>
	</form>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
