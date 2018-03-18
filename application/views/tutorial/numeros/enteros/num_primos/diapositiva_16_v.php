<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_16.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="container-fluid">
	<div>
		<p>La factorizacion en prmos la podemos obtener tambien apoyándonos en un diagrama de árbol:</p>
		<p>Primero encontramos dos factores del número, por ejemplo 9 y 10: </p>
		<p>Escribe en los espacios: </p>
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/enteros/primos/diapositiva16.png" align="center"/>
		<input class="input-sm input-sm-cs" type="text"  id="1" value=""/>
		<input class="input-sm input-sm-cs" type="text"  id="2" value=""/>
	</div>
	<br/><br/><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
  </div>		

