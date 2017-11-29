<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_var_var/var_variables.js"></script>
<div class="container-fluid">
	<div>
		<p>Simplifica la expresión. Utiliza el signo / para escribir las fracciones.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mo>(</mo><mo>-</mo><mn>3</mn><mo>)</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mo>(</mo><mo>-</mo><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>)</mo><mi>y</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>y</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> + <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> + <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" /></p><br />
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	</div>
  </div>