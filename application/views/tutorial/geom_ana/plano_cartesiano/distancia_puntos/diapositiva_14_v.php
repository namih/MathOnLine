<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/distancia_puntos/distancia.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/dist_punto_d13.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-lg-12">
	  <p align="justify">Para los siguientes pares de puntos, calcula la distancia entre ellos, dando tu respuesta con 2 decimales:</p>
	  <label>AB = </label> <input id="dist" />
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
	</div>
</div>
<br />
<br />	
	<input type="button" class="btn btn-success btn-sm" onclick="verificar3();" value="Verificar" />	
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>