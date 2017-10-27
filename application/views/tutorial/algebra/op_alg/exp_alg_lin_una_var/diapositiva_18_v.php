<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_una_var/variables.js"></script>
<div class="container-fluid">
	<div>
		<p>¿Cual es el valor de las piezas juntas?</p>
		<p>Elige todas las opciones que sean correctas.</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi></math><br />
					<input type="checkbox" id="2" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>n</mi><mn>3</mn></msup></math><br />
					<input type="checkbox" id="3" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>+</mo><mi>n</mi><mo>+</mo><mi>n</mi></math><br />
					<input type="checkbox" id="4" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>+</mo><mn>3</mn></math><br />
					<input type="checkbox" id="5" /> <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mi>n</mi></math><br />
				</td>
		  	</table>
		</form>
		<br />
		<img src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_una_var/diapositiva_18.png" align="center"/>
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