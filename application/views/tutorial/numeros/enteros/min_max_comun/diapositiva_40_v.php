<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>729</mn><mn>3</mn></mroot><mo>=</mo><mo>&#xA0;</mo><mn>9</mn><mo>,</mo></math> evalúa
		<math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>5832</mn><mn>3</mn></mroot></math> </p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>5832</mn><mn>3</mn></mroot>
		</math><label> = </label> <input type="text" id="1" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar40();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
