<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_no_lin_var_var/no_var_variables.js"></script>
<div class="container-fluid">
	<div>
		<p>Simplifica la expresión sumando los coeficientes de los términos semejantes:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>6</mn><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math></p><br />
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	</div>
  </div>