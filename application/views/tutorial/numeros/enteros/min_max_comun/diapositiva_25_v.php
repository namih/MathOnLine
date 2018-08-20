<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Una prisión tiene faros giratorios a los lados de la entrada principal. Al faro A le toma 30 segs, completar una revolución de 360°.
		Al faro B le toma 25 segs.En algún momento, los dos faros iluminan el punto C. ¿En cuánto tiempo volverán a iluminar simultáneamente el punto C?</p>
	<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/enteros/min_max_comun/diapositiva_24.png" align="center"/>
	<label>En </label> <input class="input-sm input-top5" size="15" id="seg" type="text" /><label>segs.</label> 
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar25();" value="Verificar" />
	<br /><br /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
