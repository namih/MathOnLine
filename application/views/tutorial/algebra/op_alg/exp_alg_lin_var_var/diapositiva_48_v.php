<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_var_var/var_variables.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Simplifica la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>4</mn><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>8</mn><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>m</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>10</mn><mi>m</mi><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi></math> + <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi></math></p><br />
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>Simplifica la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mi>x</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mi>y</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>6</mn><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> + <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="4" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math></p><br />
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Simplifica la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>5</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>8</mn><mi>y</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>3</mn><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="5" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> + <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="6" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math></p><br />
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
  </div>