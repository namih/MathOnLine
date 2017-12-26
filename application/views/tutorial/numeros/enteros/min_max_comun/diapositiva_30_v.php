<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>La operación que nos ayuda a encontrar el número que, 
		multiplicado por si mismo cierto número de veces, nos da una determinada cantidad, se llama <b>raíz</b></p>
	<p>Cuando buscamos un número que multiplicado por si mismo nos dé otro, se le llama <b> raíz cuadrada:</b></p>
	<p>Encuentra un número que multiplicado por si mismo nos de 25:</p>
	<div class="table-responsive">
	<input type="text" id="num1"/> <label> X </label> <input type="text" id="num2"/> <label> = 25</label>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar30();" value="Verificar" />
	</div>
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
