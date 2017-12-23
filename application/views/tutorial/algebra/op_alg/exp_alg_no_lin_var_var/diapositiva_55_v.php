<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_no_lin_var_var/no_var_variables.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>¿Son semejantes los siguientes términos?</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>7</mn><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup></math></p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva55" id="1">Si<br />
		  			<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva55" id="2">No<br />
  				</td>
  			</table>
		</form>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>¿Son semejantes los siguientes términos?</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><msup><mi>a</mi><mn>2</mn></msup><msup><mi>b</mi><mn>3</mn></msup></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><msup><mi>a</mi><mn>2</mn></msup><msup><mi>b</mi><mn>3</mn></msup></math></p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva55" id="3">Si<br />
		  			<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva55" id="4">No<br />
  				</td>
  			</table>
		</form>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>¿Son semejantes los siguientes términos?</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>6</mn><msup><mi>x</mi><mn>3</mn></msup><msup><mi>y</mi><mn>2</mn></msup></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><msup><mi>x</mi><mn>2</mn></msup><msup><mi>y</mi><mn>3</mn></msup></math></p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva55" id="5">Si<br />
		  			<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva55" id="6">No<br />
  				</td>
  			</table>
		</form>
		</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
  </div>