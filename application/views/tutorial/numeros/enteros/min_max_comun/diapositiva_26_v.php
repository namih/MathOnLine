<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Inés tiene 3 listones que miden 84 cm, 140 cm y 308 cm. Ella quiere cortar
		los 3 listones de tal modo que obtenga pedazos del mismo tamaño sin desperdiciar listón.¿Cúal es el 
		tamaño más grande de listón que Inés puede obtener?¿Cuántos pedazos obtendrán?</p>
	<input type="text" id="cm" /><label> cm y</label> <input id="pedazos" type="text"/><label>pedazos. </label>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar26();" value="Verificar" />
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
