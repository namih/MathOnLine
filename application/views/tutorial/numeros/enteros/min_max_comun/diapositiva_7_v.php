<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">
	<p>Escribe el número como producto:</p>
	<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>8</mn><mn>2</mn></msup><mo>=</mo></math>
	<input class="input-sm input-top5" type="text" id="exp" placeholder="a x b"/>	

	<input type="button" class="btn btn-success btn-sm" onclick="valida7();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />
	<br />
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<p>Escribe el número como producto:</p>
	<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>5</mn><mn>6</mn></msup><mo>=</mo></math>
	<input class="input-sm input-top5" type="text" id="exp1" placeholder="a x b"/>	

	<input type="button" class="btn btn-success btn-sm" onclick="valida7_1();" value="Verificar" />
		<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />

	<br />
</div>
<div class="container-fluid" id="div_3" style="display: none">
	<p>Escribe el número como producto:</p>
	<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>4</mn><mn>3</mn></msup><mo>=</mo></math>
	<input class="input-sm input-top5" type="text" id="exp2" placeholder="a x b"/>	

	<input type="button" class="btn btn-success btn-sm" onclick="valida7_2();" value="Verificar" />
	<br />
</div>
<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 