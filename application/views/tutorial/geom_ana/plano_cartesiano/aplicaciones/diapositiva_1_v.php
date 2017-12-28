<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/aplicaciones/distancia.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/dist_punto_d14.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Dibuja el triángulo con vértices I(0,-5), J(-9,7), K(16,7).</p>
		<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="marcar('I','J')" type="button" class="btn btn-info">Marcar IJ</button>
		<button onclick="marcar('J','K')" type="button" class="btn btn-info">Marcar JK</button>
		<button onclick="marcar('K','I')" type="button" class="btn btn-info">Marcar KI</button>
		</div>
	</div>	
	<br /><br />
	<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
	</div>
	<div class="col-md-12  col-xs-12 table-responsive" id="box" align="center">
		<p>Calcula la longitud de los segmentos:</p>
		<label>IJ =</label> <input id="1" />
		<label>JK =</label> <input id="2" />
		<label>KI =</label> <input id="3" />
		<p> Y el perimetro del triángulo </p>
		<label>Perimetro =</label> <input id="4" />
	</div>
</div>
<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar3();" value="Verificar" />	

<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 
