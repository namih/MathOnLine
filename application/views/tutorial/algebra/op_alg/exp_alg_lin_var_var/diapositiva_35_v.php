<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_var_var/var_variables.js"></script>
<div class="container-fluid">
	<div>
		<p>¿Cuál es el valor de las figuras juntas?</p>
		<!-- size="4" -->
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva5" id="1"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>n</mi><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>m</mi></math><br />
		  			<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva5" id="2"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>m</mi></math><br />
					<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva5" id="3"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mi>m</mi></math><br />
		  			<input type="radio" onclick="acierto(<?php echo $paginador['actual']; ?>)" name="diapositiva5" id="4"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>n</mi><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mfrac><mi>m</mi><mn>2</mn></mfrac></math><br />
  				</td>
  			</table>
		</form>
		<br />
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_35.png" align="center"/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	 	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 	</div>
	</div>
  </div>
  