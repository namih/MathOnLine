<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_11.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
<div class="container-fluid" id="div_1" style="display: block">
	<div>
		<p>Escribe todos los números primos que son factores de 30 (de menor a mayor):</p>
	</div>
	<input class="input-sm input-top5" type="text"  id="factor_primo" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm input-top5" onclick="verificar14();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm input-top5" onclick="ejercicio2();" value="Más ejercicios" />
	
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<div>
		<p>Escribe todos los números primos que son factores de 36 (de menor a mayor):</p>
	</div>
	<input class="input-sm input-top5" type="text"  id="factor_primo_1" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm input-top5" onclick="verificar14_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm btn-sm input-top5" onclick="ejercicio3();" value="Más ejercicios" />
	
  </div>
<div class="container-fluid" id="div_3" style="display: none">
	<div>
		<p>Escribe todos los números primos que son factores de 49 (de menor a mayor):</p>
	</div>
	<input class="input-sm input-top5" type="text"  id="factor_primo_2" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm input-top5" onclick="verificar14_2();" value="Verificar" />	
  </div>				
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>