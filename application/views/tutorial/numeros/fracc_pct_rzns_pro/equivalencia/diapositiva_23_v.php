<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">¿Comó puedo saber si dos fracciones son equivalentes? Por ejemplo:</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>10</mn></mfrac></math></p>
	<p align="justify">Recuerda que al multiplicar o dividir el numerador y el denominador de una fracción por el mismo número se obtienen fracciones equivalentes. Podemos entonces ver si es posible multiplicar el numerador y denominador de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math> por el mismo número para obtener la fracción <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>10</mn></mfrac></math>.</p>
	<p align="justify">¿Qué número debe multiplicarse por el numerador de la primera fracción (3) para obtener el numerador de la segunda fracción (6)?</p>
	<p><input placeholder="?" style="text-align: center" onchange="validar_23()" size="5" type="text" id="incognita"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
