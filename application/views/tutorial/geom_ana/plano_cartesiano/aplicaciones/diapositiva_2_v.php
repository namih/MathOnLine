<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/aplicaciones/distancia.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/dist_punto_d25.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Un cuadrilátero tiene L(-3,4),M(2,16),N(8,6),O(0,0). Calcula su perímetro con 3 cifras decimales.</p>
		<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="marcar('L','M')" type="button" class="btn btn-info">Marcar LM</button>
		<button onclick="marcar('M','N')" type="button" class="btn btn-info">Marcar MN</button>
		<button onclick="marcar('N','O')" type="button" class="btn btn-info">Marcar NO</button>
		<button onclick="marcar('O','L')" type="button" class="btn btn-info">Marcar OL</button>
		</div>
	</div>	
	<br /><br />
	<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
	</div>
	
	<div class="col-md-12  col-xs-12 table-responsive" id="box" align="center">
		<br /><br />
		<label>Perimetro =</label> <input id="1" size="5" />
	</div>
</div>
<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar2();" value="Verificar" />	

<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 
