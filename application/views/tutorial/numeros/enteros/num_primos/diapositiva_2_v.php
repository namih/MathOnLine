<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_2.js"></script>
<div class="container-fluid">
	<div>
		<p> Encuentra los factores del 17. Escríbelos en las casillas.
		</p> 
		<br />
		<input  type="text"  id="1" value=""/>
		<input  type="text"  id="2" value=""/>
		<input  type="text"  id="3" value=""/>
		<input  type="text"  id="4" value=""/>
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
