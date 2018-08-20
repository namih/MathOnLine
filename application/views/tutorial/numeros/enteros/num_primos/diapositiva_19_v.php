<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_19.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="container-fluid">
	<div>
		<p>Factoriza 85 en el producto de sus factores primos</p>
		<!--Imagen de arbol -->
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/enteros/primos/diapositiva19.png" align="center"/>
		<input  class="input-sm-cs input-sm" type="text"  id="1" value=""/>
		<input  class="input-sm-cs input-sm" type="text"  id="2" value=""/>
	</div>
	<input type="button" class="btn btn-success btn-sm input-top5" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>		

