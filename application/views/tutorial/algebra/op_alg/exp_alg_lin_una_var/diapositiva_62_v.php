<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_una_var/variables.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Simplifica la expresión sumando los coeficientes de la variable:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>6</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>8</mn><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>7</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>9</mn><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p><br />
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>Simplifica la expresión sumando los coeficientes de la variable:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>4</mn><mi>z</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mfrac><mn>3</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>5</mn><mi>z</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>z</mi><mo>&#xA0;</mo><mo>+</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="4" size="4" /></p><br />
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Simplifica la expresión sumando los coeficientes de la variable:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>7</mn><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mfrac><mn>2</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mfrac><mn>2</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mn>3</mn><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="5" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#xA0;</mo><mo>+</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="6" size="4" /></p><br />
	</div>
	 <div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
  </div>