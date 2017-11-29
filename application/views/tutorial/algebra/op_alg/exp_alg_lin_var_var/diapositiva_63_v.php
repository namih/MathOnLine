<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_var_var/var_variables.js"></script>
<div class="container-fluid">
	<div>
		<p>Sustituye el valor de las variables en la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>y</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mo>&#xA0;</mo><mo>+</mo><mn>3</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	</div>
  </div>