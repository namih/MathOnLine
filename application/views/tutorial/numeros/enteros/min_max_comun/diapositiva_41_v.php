<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Hay dos satélites a distintas alturas, en órbita alrededor de la Tierra. A uno le toma 16 horas completar una órbita, y al otro le toma 
		18 horas. En algún momento, los dos están sobre la Ciudad de México.
		Apartir de ese momento, ¿En cúantas horas volverán a estar los dos sobre la Ciudad de México?</p>
	<div class="table-responsive"><input type="text" id="num1" /><label>horas</label></div>	
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="valida4();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
