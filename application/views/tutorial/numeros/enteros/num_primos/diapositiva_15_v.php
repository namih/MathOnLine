<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_15.js"></script>
<div class="container-fluid">
	<div>
		<p>Regresamos  lo que se comentó anteriormente.</p>
		<!--Colocar imagen -->
		<p>Escribe nuevamente los factores de 12:</p>
		<div class="table-responsive">
			<input type="text"  id="1" value=""/>
			<input type="text"  id="2" value=""/>
			<input type="text"  id="3" value=""/>
			<input type="text"  id="4" value=""/>
			<input type="text"  id="5" value=""/>
			<input type="text"  id="6" value=""/>
		</div>
		<p>¿Cuáles de estos números, los factores de 12, son primos?.</p>
		<div class="table-responsive">
			<input type="text"  id="7" value=""/>
			<input type="text"  id="8" value=""/>
		</div>
		<p>Estos números se llaman los <b>factores primos de 12</b>.</p>
		<p> Utiliza <b>únicamente estos dos</b> factores primos para expresar al 12 como resultado de una multiplicación.Puedes repetir números.</p>
		<div class="table-responsive">
		<input type="text"  id="9" value=""/><label> X </label>
		<input type="text"  id="10" value=""/><label> X </label>
		<input type="text"  id="11" value=""/> <label> =12 </label>
		</div>
		<p>Esto se le conoce como <b>factorizacion en primos.</b></p>
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

