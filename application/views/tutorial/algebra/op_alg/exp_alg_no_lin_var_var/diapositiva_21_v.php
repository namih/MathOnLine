<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_no_lin_var_var/no_var_variables.js"></script>
<div class="container-fluid">
	<div>
		<p>¿Son semejantes los siguientes términos?</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>7</mn><mi>x</mi><msup><mi>y</mi><mn>2</mn></msup></math></p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva21" id="1">Si<br />
		  			<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva21" id="2">No<br />
  				</td>
  			</table>
		</form>
		<br />
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	 	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 	</div>
	</div>
  </div>