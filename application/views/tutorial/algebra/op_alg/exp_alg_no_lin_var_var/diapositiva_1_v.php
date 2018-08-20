<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_no_lin_var_var/no_var_variables.js"></script>
<div class="container-fluid">
	<div>
		<p>¿Cuánto mide el área del cuadrado rosa? Recuerda que el área de un cuadrado se obtiene multiplicando lado por lado. Hay más de una respuesta correcta:</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>x</mi></math><br />
					<input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>(</mo><mi>x</mi><mo>)</mo></math><br />
					<input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math><br />
					<input type="checkbox" id="4" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>x</mi></math><br />
					<input type="checkbox" id="5" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mi>x</mi></math><br />
				</td>
			</table>
		</form>
		<br />
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_no_lin_var_var/diapositiva_1.png" align="center"/>
		<br />
		<br /><input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	 	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 	</div>
	</div>
  </div>