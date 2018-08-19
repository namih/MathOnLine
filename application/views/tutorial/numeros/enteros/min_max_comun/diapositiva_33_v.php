<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Encuentra la raíz cuadrada de 8</p>
	<math xmlns="http://www.w3.org/1998/Math/MathML">
		<mroot>
			<mn>8</mn><mn>3</mn>
		</mroot>
	</math> <label>=</label> <input class="input-sm input-top5" size="10" type="text" id="1" />
	<p>Comprueba tu resultado :</p>
	
	<div class="table-responsive div-border0">
	<input class="input-sm input-top5" size="5" type="text" id="2" readonly=""/> <label><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label> <input class="input-sm input-top5" size="5" type="text" id="3" readonly=""/>  <label><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label> <input class="input-sm input-top5" size="5" type="text" id="4" readonly=""/><label>  = </label> <input class="input-sm input-top5" size="3" type="text" id="5" />
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar33();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
