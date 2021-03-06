<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">Cuando en una fracción dividimos el numerador y denominador entre un número mayor que 1, para encontrar una fracción equivalente, se dice que se reduce o se simplifica.</p>
	<p align="justify">Simplifica la siguiente fracción hasta que el numerador y el denominador ya no tengan un divisor común:</p>
	<h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xF7;</mo><mo>?</mo></mrow><mrow><mn>12</mn><mo>&#xA0;</mo><mo>&#xF7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar_30()" size="1" type="text" id="incognita"></h1>
	<h1 id="resultado"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>?</mo><mo>?</mo></mfrac></math></h1>
	<p align="justify">Cuando una fracción no se puede simplificar se dice que es una fracción irreducible.</p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
