<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Encuentra la raíz cuadrada de 121</p>
	<math xmlns="http://www.w3.org/1998/Math/MathML">
		<msqrt>
			<mn>121</mn>
		</msqrt>
	</math> <label>=</label> <input type="text" id="raiz" />
	<p>Comprueba tu resultado :</p>
	
	<div class="table-responsive">
	<input type="text" id="num1"/> <label> X </label> <input type="text" id="num2"/> <label> = </label> <input type="text" id="num3" />
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
