<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/int_val_abs.js"></script>

<div class="container-fluid">


		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify">Usa la definición de valor absoluto para responder a la siguiente pregunta</p>
			<table>
					<tr align="center">
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mi>y</mi></mrow></mfenced><mo>=</mo></math></td>
						<td><span></span>
						<select id="opcion_a">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>-</mo><mi>y</mi></math></a></option>
								<option value="2" id="r2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo><mi>x</mi></math></a></option>
								<option value="3" id="r3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>x</mi><mo>-</mo><mi>y</mi><mo>)</mo></math></a></option>
						</select></td>
						<td>&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#x2265;</mo><mi>y</mi></math></td>
					</tr>
			</table>
			<p align="center">y</p>
			<table>
					<tr align="center">
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mi>y</mi></mrow></mfenced><mo>=</mo></math></td>
						<td><span></span>
						<select id="opcion_b" onchange="seleccionado_9 ()">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>-</mo><mi>y</mi></math></a></option>
								<option value="2" id="r2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo><mi>x</mi></math></a></option>
								<option value="3" id="r3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>x</mi><mo>-</mo><mi>y</mi><mo>)</mo></math></a></option>
						</select></td>
						<td>&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&lt;</mo><mi>y</mi></math></td>
					</tr>
			</table>
		</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>
