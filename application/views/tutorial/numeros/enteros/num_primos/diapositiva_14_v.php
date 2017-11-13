<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_11.js"></script>
<div class="container-fluid">
	<div>
		<p>Escribe todos los números primos que son factores de 30 (de menor a mayor):</p>
	</div>
	<br/><br/><br /><!-- factores 2,3,5-->
	<input type="text"  id="factor_primo" value="" placeholder="1,2,3,4"/>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar14();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
  </div>		
