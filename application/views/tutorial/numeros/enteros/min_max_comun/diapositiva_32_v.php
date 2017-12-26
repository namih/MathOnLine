<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Cuando buscamos un número que multiplicado por si mismo 3 veces nos dé otro. se le llama <b>raíz cúbica</b> </p>
	<p>Encuentra un número que multiplicado por si mismo 3 veces nos dé 64</p>
	<p>Comprueba tu resultado :</p>
	<div class="table-responsive">
	<input type="text" id="1"/> <label> X </label> <input type="text" id="2"/> <label> X </label> <input type="text" id="3" /><label> = </label> <input type="text" id="4"readonly="" />
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar32();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
