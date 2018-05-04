<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/int_val_abs.js"></script>

<div class="container-fluid">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify">Si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math> son reales, ¿Cómo se compara <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mi>b</mi></mrow></mfenced></math> con <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mi>a</mi></mfenced><mfenced open="|" close="|"><mi>b</mi></mfenced></math>? </p>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12">
				<table align="center">
					<tr>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mi>b</mi></mrow></mfenced></math></h4></td>
						<td>&nbsp;&nbsp;</td>
						<td><select id="opcion_a" onchange="operacion_16 ()">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><</a></option>
								<option value="2" id="r2">=</a></option>
								<option value="3" id="r3">></a></option>
								</select></td>
						<td>&nbsp;&nbsp;</td>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mi>a</mi></mfenced><mfenced open="|" close="|"><mi>b</mi></mfenced></math></h4></td>
					</tr>
				</table>

				<div id="info_a" style="display:none">
						<p align="left" style="color:red">Regresa a la página anterior y haz los ejercicios nuevamente, observa con cuidado la relación entre lo números.</p>
				</div>
			</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>
