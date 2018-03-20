<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Adivina cuáles son los 4 números mayores de 120 y menores de 200,
		que son pares, que tiene al 3 como factor, pero el 4 y el 9 no son sus factores. (de menor a mayor)</p>
	<input type="text" id="1"/>
	<input type="text" id="2"/>
	<input type="text" id="3"/>
	<input type="text" id="4"/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar27();" value="Verificar" />
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
