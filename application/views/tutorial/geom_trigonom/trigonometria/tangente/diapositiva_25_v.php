<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/tangente/tangente.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/circunferencia/circunferencia25.ggb","showToolbar":false, height: 225, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Anteriormente vimos como, al cambiar el valor de θ, cambia el valor de la tangente de θ. Si representamos ahora la relación entre θ y tan θ, 
			colocando a θ en el eje horizontal y a tan θ en el eje vertical, obtenemos una gráfica como la siguiente:</p>
		<p>Cambia el valor de θ para observar como se mueve el punto en la gráfica.</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
						<div align="center" id="applet_container">
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<h4 id="n"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math></h4>
						</div>					
						<div class="btn-group" id="opciones1">
							<button onclick="decrementar_49_1()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_1()" type="button" class="btn btn-info">></button>
						</div>
	</div>
</div>