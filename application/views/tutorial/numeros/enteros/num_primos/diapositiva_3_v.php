<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_3.js"></script>
<div class="container-fluid">
	<div class="panel-body" >
		<p> Encuentra los factores del 47. Escríbelos en las casillas.
		</p> 
		<br />
		<input  type="text"  id="1"/>
		<input  type="text"  id="2"/>
		<input  type="text"  id="3"/>
		<input  type="text"  id="4"/>
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
