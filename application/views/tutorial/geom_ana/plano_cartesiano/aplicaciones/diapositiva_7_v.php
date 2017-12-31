<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/aplicaciones/distancia.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/dist_punto_d29.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>¿Qué coordenadas tiene un punto C sobre el eje X que equista de los puntos A(-3,-2), B(4,5)?</p>

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
	<input type="button" class="btn btn-success btn-sm" onclick="verificar7();" value="Verificar" />	

<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 
