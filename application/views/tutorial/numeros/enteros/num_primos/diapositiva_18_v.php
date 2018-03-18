 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_18.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/num_primos/styles_primos.css">
 <div class="container-fluid">
	<div>
		<p>Factoriza 150 en el producto de sus factores primos</p>
		<!--Imagen de arbol -->
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/enteros/primos/diapositiva18.png" align="center"/>
		<div class="table-responsive div-border0">
			<input class="input-sm input-sm-cc input-top5" type="text"  id="1" value=""/>
			<input class="input-sm input-sm-cc input-top5" type="text"  id="2" value=""/>
			<input class="input-sm input-sm-cc input-top5" type="text"  id="3" value=""/>
			<input class="input-sm input-sm-cc input-top5" type="text"  id="4" value=""/>
			<br /><br />
			<p>Escribe la descomposición en primos</p> 
			<div class="table-responsive div-border0">
			&nbsp;&nbsp;&nbsp;<label>150=</label>
			<input class="input-sm input-top5" size="10" id="11"/>
			<label class="input-top5">X</label>
			<input class="input-sm input-top5" id="22" />
			<label class="input-top5">X</label>
			<input class="input-sm input-top5" id="33" /><label class="input-top5">X</label>
			<input class="input-sm input-top5" id="44" />&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
  </div>		

