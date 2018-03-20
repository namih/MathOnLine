<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/aplicaciones/distancia.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/dist_punto_d26.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Confirma que el  cuadrilátero con vértices A(8,-3), B(6,5), C(-2,3), D(0,-5) es un cuadrado pues todos sus lados son iguales y sus diagonales son iguales.</p>
		<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="marcar('A','B')" type="button" class="btn btn-info">Marcar AB</button>
		<button onclick="marcar('B','C')" type="button" class="btn btn-info">Marcar BC</button>
		<button onclick="marcar('C','D')" type="button" class="btn btn-info">Marcar CD</button>
		<button onclick="marcar('D','A')" type="button" class="btn btn-info">Marcar DA</button>
		</div>
	</div>	
	<br /><br />
	<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
	</div>
	
	<div class="col-md-12  col-xs-12 table-responsive" id="box" align="center">
		<br /><br />
		<table>
				<tr>
					<label>AB =</label> <input id="1" size="5" />
				</tr>
				<tr>
					<label>BC =</label> <input id="2"  size="5" />
				</tr>
				<tr>
					<label>CD =</label> <input id="3"  size="5"/>
				</tr>
				<tr>
					<label>DA =</label> <input id="4"  size="5"/>
				</tr>
				<tr>
					<label>AC =</label> <input id="5"  size="5" />
				</tr>
				<tr>
					<label>BD =</label> <input id="6"  size="5"/>
				</tr>
				<tr>
					<label>Perimetro =</label> <input id="7"  size="5"/>
				</tr>
		</table>
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
