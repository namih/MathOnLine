<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/definicion/definicion_d2.ggb","showToolbar":false, height: 250, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<p>Antes de resolver el problema, necesitamos estudiar algunos conceptos de trigonometría:</p>
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p>Modifica el valor de A. Puedes usar las flechitas o teclear un número.</p>
			<p><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
			<p>Observa cómo se modifica el triángulo y cómo cambian los cocientes</p>
			<p>Arrastra nuevamente el punto P para modificar el tamaño del triangulo y observa lo que pasa a los cocientes.</p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
			</div>
		</div>
	</div>
</div>
