<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/ec_val_abs.js"></script>

<div class="container-fluid">


		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify">Regresemos al problema inicial de la introducción al valor absoluto. Si se tiene una antena retransmisora a <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>10</mn><mo>&#xA0;</mo><mi>k</mi><mi>m</mi></math> de la estación de radio, ¿en qué lugares respecto a la estación de radio se puede colocar una nueva antena retransmisora de manera que se encuentre exactamente a <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>25</mn><mo>&#xA0;</mo><mi>k</mi><mi>m</mi></math> de la antena?. </p>
			<table>
					<tr align="center">
						<td><h5> a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>25</mn></mrow></mfenced><mo>=</mo><mn>10</mn></math></h5></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h5> b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>10</mn></mrow></mfenced><mo>=</mo><mn>25</mn></math></h5></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h5> c) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>10</mn></mrow></mfenced><mo>=</mo><mn>25</mn></math></h5></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h5> d) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>25</mn></mrow></mfenced><mo>=</mo><mn>10</mn></math></h5></td>
					</tr>
					<tr align="justify">
						<td><span>Respuesta:</span>
						<select id="opcion" onchange="resultado_5 ()">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1">a</option>
								<option value="2" id="r2">b</option>
								<option value="3" id="r2">c</option>
								<option value="4" id="r2">d</option>
						</select></td>
					</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="valores" style="display:none">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
					<p align="left">Resuelve la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>10</mn></mrow></mfenced><mo>=</mo><mn>25</mn></math> para encontrar las posibles posiciones en las que se debe colocar la nueva antena.</p>
					<table>
							<tr align="center">
								<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&gt;</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
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

				<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
					<table>
						<tr align="center">
							<p align="left">y</p>
							<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_c" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&lt;</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="puntos_5 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_d" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
						</tr>
					</table>
				</div>
		</div>

		<div id="recta" align="center" class=" col-lg-12 col-md-12  col-xs-12" style="display:none">

		</div>

</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>
