<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_11.js"></script>
<div class="container-fluid" id="div_1" style="display: block">
	<div>
		<p>Escribe todos los números primos que son factores de 30 (de menor a mayor):</p>
	</div>
	<br/><br/><br /><!-- factores 2,3,5-->
	<input type="text"  id="factor_primo" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar14();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />
	
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<div>
		<p>Escribe todos los números primos que son factores de 36 (de menor a mayor):</p>
	</div>
	<br/><br/><br />
	<input type="text"  id="factor_primo_1" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar14_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />
	
  </div>
<div class="container-fluid" id="div_3" style="display: none">
	<div>
		<p>Escribe todos los números primos que son factores de 49 (de menor a mayor):</p>
	</div>
	<br/><br/><br />
	<input type="text"  id="factor_primo_2" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar14_2();" value="Verificar" />	
  </div>				
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>