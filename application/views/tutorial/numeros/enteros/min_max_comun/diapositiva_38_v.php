<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>1681</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>41</mn><mo>,</mo></math> encuentra
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>168100</mn></msqrt></math> </p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<msqrt><mn>168100</mn></msqrt>
		</math> <label> = </label> <input type="text" id="1" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar38();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />	
	<br />
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>841</mn></msqrt><mo>=</mo><mn>29</mn></math> encuentra
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>3364</mn></msqrt></math></p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>3364</mn></msqrt></math>
		<label> = </label> <input type="text" id="2" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar38_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />		
	<br />
</div>
<div class="container-fluid" id="div_3" style="display: none">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>961</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>31</mn><mo>,</mo></math> encuentra
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>3844</mn></msqrt></math> </p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<msqrt><mn>3844</mn></msqrt>
		</math> <label> = </label> <input type="text" id="3" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar38_2();" value="Verificar" />
	<br />
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 