<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/int_ecu_cuad_pt2.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/int_ecu_cuad_pt2_d1.ggb","showToolbar":false, height: 500, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>

<div class="container-fluid">
	<div class="col-xs-12 col-sm-12 col-lg-12">
	  <p align="justify">Las ecuaciones cuadráticas pueden asociarse con funciones del tipo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mi>a</mi><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mi>b</mi><mi>x</mi><mo>+</mo><mi>c</mi></math>, cuya gráfica representa una parábola.</p>
	  <p align="justify">Observa la gráfica de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><msup><mi>x</mi><mn>2</mn></msup><mo>-</mo><mn>4</mn></math>.</p>
	  <p align="justify">Cambia el valor de x con las flechas y observa la ubicación del punto P(x,y) sobre la gráfica.</p>
	  <div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="disminuir_1()" type="button" class="btn btn-info"><</button>
		<button id="valor" type="button" class="btn">0</button>
		<button onclick="incrementar_1()" type="button" class="btn btn-info">></button>
	</div>
	<p>¿Cuántas intersecciones tiene la gráfica con el eje x? <input placeholder="0" style="text-align: center" onchange="validar_1()" size="1" type="text" id="interseccion"></p>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12" id="applet_container">
	</div>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>