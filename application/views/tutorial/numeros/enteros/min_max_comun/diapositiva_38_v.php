<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>1681</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>41</mn><mo>,</mo></math> encuentra
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>168100</mn></msqrt></math> </p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<msqrt><mn>168100</mn></msqrt>
		</math> <label> = </label> <input type="text" id="raiz" />
	</div>
    <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="valida4();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
