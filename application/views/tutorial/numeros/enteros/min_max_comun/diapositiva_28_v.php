<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Encuentra el número que al multiplicarse por si mismo de 49.</p>
	<input type="text" id="1"/>
	<br /><br /><br /> 
	<label>Comprueba el resultado: </label><input type="text" id="2" readonly=""/> <label> X </label><input type="text" id="3" readonly/> <label> = </label><input type="text" id="4" readonly/>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar28();" value="Verificar" />
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
