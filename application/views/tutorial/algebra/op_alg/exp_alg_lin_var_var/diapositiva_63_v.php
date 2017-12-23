<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_var_var/var_variables.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Sustituye el valor de las variables en la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>y</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mo>&#xA0;</mo><mo>+</mo><mn>3</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>Sustituye el valor de las variables en la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>w</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>z</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>w</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>3</mn><mi>w</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>2</mn><mi>w</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>z</mi><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>6</mn><mi>z</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Sustituye el valor de las variables en la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>3</mn><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>a</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mo>&#xA0;</mo><mo>=</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" /></p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
  </div>