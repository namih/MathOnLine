<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/int_val_abs.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<div class="container-fluid">
	<div id="first" class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">Cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math> tienen el mismo signo. ¿Cómo se compara <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mi>b</mi></mrow></mfenced></math> con <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mi>a</mi></mfenced><mo>+</mo><mfenced open="|" close="|"><mi>b</mi></mfenced></math> ?</p>
			<p align="left">Para resolver esta pregunta resuelve lo siguiente:</p>
			<table>
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>4</mn><mo>+</mo><mn>3</mn></mrow></mfenced><mo>=</mo></math></h4></td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
				</table>
				<table>
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>4</mn></mrow></mfenced><mo>+</mo><mfenced open="|" close="|"><mn>3</mn></mfenced><mo>=</mo></math></h4></td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">entonces</p>
				<table align="center">
					<tr>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>4</mn><mo>+</mo><mn>3</mn></mrow></mfenced></math></h4></td>
						<td>&nbsp;&nbsp;</td>
						<td><select id="opcion_a" onchange="operacion_13_a ()">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><</a></option>
								<option value="2" id="r2">=</a></option>
								<option value="3" id="r3">></a></option>
								</select></td>
						<td>&nbsp;&nbsp;</td>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>4</mn></mrow></mfenced><mo>+</mo><mfenced open="|" close="|"><mn>3</mn></mfenced></math></h4></td>
					</tr>
				</table>
		</div>
		<div id="recta_a" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" style="display:none">

		</div>
		<div align="right">
		 <button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
		</div>
	</div>

	<div id="second" style="display:none" class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">Cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math> tienen el mismo signo.¿Cómo se compara <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mi>b</mi></mrow></mfenced></math> con <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mi>a</mi></mfenced><mo>+</mo><mfenced open="|" close="|"><mi>b</mi></mfenced></math> ?</p>
			<p align="left">Para resolver esta pregunta resuelve lo siguiente:</p>
			<table>
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>0</mn><mo>+</mo><mo>(</mo><mo>-</mo><mn>10</mn><mo>)</mo></mrow></mfenced><mo>=</mo></math></h4></td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_uno_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
				</table>
				<table>
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mn>0</mn></mfenced><mo>+</mo><mfenced open="|" close="|"><mrow><mo>-</mo><mn>10</mn></mrow></mfenced><mo>=</mo></math></h4></td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_uno_b" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">entonces</p>
				<table align="center">
					<tr>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>0</mn><mo>+</mo><mo>(</mo><mo>-</mo><mn>10</mn><mo>)</mo></mrow></mfenced></math></h4></td>
						<td>&nbsp;&nbsp;</td>
						<td><select id="opcion_uno_a" onchange="operacion_13_b ()">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><</a></option>
								<option value="2" id="r2">=</a></option>
								<option value="3" id="r3">></a></option>
								</select></td>
						<td>&nbsp;&nbsp;</td>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mn>0</mn></mfenced><mo>+</mo><mfenced open="|" close="|"><mrow><mo>-</mo><mn>10</mn></mrow></mfenced></math></h4></td>
					</tr>
				</table>
		</div>
		<div id="recta_b" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" style="display:none">

		</div>
		<div align="right">
			 <button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
		</div>
	</div>

	<div id="third" style="display:none"  class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">Cuando <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math> tienen el mismo signo.¿Cómo se compara <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mi>b</mi></mrow></mfenced></math> con <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mi>a</mi></mfenced><mo>+</mo><mfenced open="|" close="|"><mi>b</mi></mfenced></math> ?</p>
			<p align="left">Para resolver esta pregunta resuelve lo siguiente:</p>
			<table>
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>3</mn><mo>+</mo><mo>(</mo><mo>-</mo><mn>2</mn><mo>)</mo></mrow></mfenced><mo>=</mo></math></h4></td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_dos_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
				</table>
				<table>
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>3</mn></mrow></mfenced><mo>+</mo><mfenced open="|" close="|"><mrow><mo>-</mo><mn>2</mn></mrow></mfenced><mo>=</mo></math></h4></td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_dos_b" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">entonces</p>
				<table align="center">
					<tr>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>3</mn><mo>+</mo><mo>(</mo><mo>-</mo><mn>2</mn><mo>)</mo></mrow></mfenced></math></h4></td>
						<td>&nbsp;&nbsp;</td>
						<td><select id="opcion_dos_a" onchange="operacion_13_c ()">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><</a></option>
								<option value="2" id="r2">=</a></option>
								<option value="3" id="r3">></a></option>
								</select></td>
						<td>&nbsp;&nbsp;</td>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>3</mn></mrow></mfenced><mo>+</mo><mfenced open="|" close="|"><mrow><mo>-</mo><mn>2</mn></mrow></mfenced></math></h4></td>
					</tr>
				</table>
		</div>
		<div id="recta_c" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" style="display:none">

		</div>
	</div>


</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>
