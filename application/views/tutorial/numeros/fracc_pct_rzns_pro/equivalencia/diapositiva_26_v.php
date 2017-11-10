<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">¿Son equivalentes las siguientes fracciones?</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>8</mn></mfrac></math></p>
	<p align="justify">¿Qué número debe multiplciarse por el numerador de la primera fracción (3) para obtener el numerador de la segunda fracción (9)?</p>
	<p><input placeholder="?" style="text-align: center" onchange="error()" size="1" type="text" id="incognita"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
