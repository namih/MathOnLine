 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_18.js"></script>
 <div class="container-fluid">
	<div>
		<p>Factoriza 150 en el producto de sus factores primos</p>
		<!--Imagen de arbol -->
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/enteros/primos/diapositiva18.png" align="center"/>
		<div class="table-responsive">
			<input  type="text"  id="1" value=""/>
			<input  type="text"  id="2" value=""/>
			<input  type="text"  id="3" value=""/>
			<input  type="text"  id="4" value=""/>
			<br /><br />
			<p>Escribe la descomposición en primos</p> 
			<label>150=</label ><input id="11" size=7  /><label>X</label></ ><input label id="22" size=7 /><label>X</label></label ><input id="33" size=7 /><label>X</label></label  ><input id="44" size=7/>
		</div>
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

