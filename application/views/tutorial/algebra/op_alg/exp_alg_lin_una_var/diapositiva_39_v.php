<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_una_var/variables.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Simplifica la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></p><br />
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>Simplifica la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>z</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>z</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>z</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>z</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>z</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>z</mi></math></p><br />
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Simplifica la expresión:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mi>b</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math></p><br />
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 </div>
  </div>