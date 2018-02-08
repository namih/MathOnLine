<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Un maestro desea dividir a un grupo de 168 niños y 120 niñas en el mayor número de equipos de niños y de niñas posible.</p>
	<div class="table-responsive">
		<p>¿Cuántos equipos va a formar?</p>
		<input type="text" id="num1" />
		<p>¿Cuántos niños hay en cada equipo?</p>
		<input type="text" id="num2" />
		<p>¿Cuántos niñas hay en cada equipo?</p>
		<input type="text" id="num3" />
	</div>	
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar42();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
