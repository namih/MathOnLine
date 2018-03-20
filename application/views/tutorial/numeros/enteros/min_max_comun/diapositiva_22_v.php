<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Encontrar el mínimo común multiplo de 5 y 15:</p>
	<label> 5 x  </label> <input type="text" size="5" id="num5"/> <label id="min"> = </label><br />
	<label>15 x  </label> <input type="text" size="5" id="num15"/> <label id="min_1"> =</label><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar22();" value="Verificar" />
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
