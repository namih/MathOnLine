<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">Encuentra un número por el cual multiplicar el numerador y el denominador de la fracción de la izquierda para obtener la fracción de la derecha y verifciar que ambas fracciones son equivalentes:</p>
	<h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar_25()" size="1" type="text" id="incognita"></h1>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
