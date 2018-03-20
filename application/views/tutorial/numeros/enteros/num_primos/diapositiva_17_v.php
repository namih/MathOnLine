<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_17.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="container-fluid">
	
		<p>Después encontramos dos factores para cada uno de los números que acabamos de escribir.</p>
		<p> Completa lo que falta </p>
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/enteros/primos/diapositiva17.png" align="center"/>
	<div class="table-responsive div-border0">
		<input class="input-sm input-sm-cc input-top5" type="text"  id="1" value=""/>
		<input class="input-sm input-sm-cc input-top5" type="text"  id="2" value=""/>
		<input class="input-sm input-sm-cc input-top5" type="text"  id="3" value=""/>
		<input class="input-sm input-sm-cc input-top5" type="text"  id="4" value=""/>
	</div>
		<br />
		<p>Seguimos este procedimiento <b>hasta que todos los factores sean primos.</b></p>
		<p>Asi podemos escribir el número como <b>producto de primos.</b></p>
		<div class="table-responsive div-border0">
			<input class="input-sm input-top5" type="text"  id="5" value=""/><label> X </label>
			<input class="input-sm input-top5" type="text"  id="6" value=""/><label> X </label>
			<input class="input-sm input-top5" type="text"  id="7" value=""/><label> X </label>
			<input class="input-sm input-top5" size="10" type="text"  id="8" value=""/><label> = 90 </label>
		</div>
	<input type="button" class="btn btn-success btn-sm input-top5" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
