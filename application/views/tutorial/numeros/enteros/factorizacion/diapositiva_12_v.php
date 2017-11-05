<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_12.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros3.css">
<div class="container-fluid">
	<div>
		<p> Escribe todos los números enteros (positivos) que dan por resultado 16 al ser multiplicados por otro entero.</p>
		<br />
		<input class"input-sm2" type="text"  id="1"/>
		<input class"input-sm2" type="text"  id="2"/>
		<input class"input-sm2" type="text"  id="3"/>
		<input class"input-sm2" type="text"  id="4"/>
		<input class"input-sm2" type="text"  id="5"/>
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
