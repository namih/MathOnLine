<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>729</mn><mn>3</mn></mroot><mo>=</mo><mo>&#xA0;</mo><mn>9</mn><mo>,</mo></math> evalúa
		<math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>5832</mn><mn>3</mn></mroot></math> </p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>5832</mn><mn>3</mn></mroot>
		</math><label> = </label> <input class="input-sm input-top5" size="15"  type="text" id="1" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar40();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />	
	
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>4913</mn><mn>3</mn></mroot><mo>=</mo><mo>&#xA0;</mo><mn>17</mn><mo>,</mo></math> evalúa
		<math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>4913000</mn><mn>3</mn></mroot></math> </p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>4913000</mn><mn>3</mn></mroot>
		</math><label> = </label> <input class="input-sm input-top5" size="15"  type="text" id="2" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar40_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />	
	
</div>
<div class="container-fluid" id="div_3" style="display: none">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>729</mn><mn>3</mn></mroot><mo>=</mo><mo>&#xA0;</mo><mn>9</mn><mo>,</mo></math> evalúa
		<math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>5832</mn><mn>3</mn></mroot></math> </p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>5832</mn><mn>3</mn></mroot>
		</math><label> = </label> <input class="input-sm input-top5" size="15"  type="text" id="3" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar40_2();" value="Verificar" />
	<!-- <input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />	 -->
	
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 