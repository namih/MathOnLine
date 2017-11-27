<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Encuentra el número que al multiplicarse por si mismo 3 veces de 64.</p>
	<input type="text" id="1"/>
	<br /><br /><br /> 
	<label>Comprueba el resultado: </label><input type="text" id="2"/> <label> X </label><input type="text" id="3"/><label> X </label><input type="text" id="4"/>  <label> = </label><input type="text" id="5"/>
	<input type="button" class="btn btn-success btn-sm" onclick="valida4();" value="Verificar" />
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
