 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_1.js"></script>
<div class="container-fluid">
	<div>
		<p>Los multiplos de un número se obtienen multiplicando dicho número por un entero</p>
		<p>Escribe 5 multiplos de 7:</p>
	</div>
	<input  type="text"  id="1" value=""/>
	<input  type="text"  id="2" value=""/>
	<input  type="text"  id="3" value=""/>
	<input  type="text"  id="4" value=""/>
	<input  type="text"  id="5" value=""/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
