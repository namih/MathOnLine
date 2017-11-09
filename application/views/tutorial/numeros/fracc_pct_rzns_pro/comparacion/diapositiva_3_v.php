<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/comparacion.js"></script>

<div class="container-fluid">
	<p align="justify">Selecciona el botón adecuado para indicar si la fracción de la izquierda es menor (<), mayor (>) o igual (=) que la fracción de la derecha.</p>
	<br />
	<h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>?</mo><mo>&#xA0;</mo><mfrac><mn>2</mn><mn>2</mn></mfrac></math></h1>
	<br />
	 <div class="btn-group" id="opciones">
	 	<button onclick="correcto()" type="button" class="btn btn-info"><</button>
	 	<button onclick="error()" type="button" class="btn btn-info">=</button>
	 	<button   onclick="error()" type="button" class="btn btn-info">></button>
	 </div>
	 <br />
	 <br />		
	 <div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 </div>
	 <div id="error" style="display: none" class="alert alert-warning">
	 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 </div>
</div>
