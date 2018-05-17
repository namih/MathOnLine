<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/des_val_abs.js"></script>

<div class="container-fluid">

	<div id="first" class=" col-lg-12 col-md-12  col-xs-12">
		<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12" id="uno">
			<p align="left">Resuelve la desigualdad <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn></mrow></mfenced><mo>&#x2264;</mo><mn>11</mn></math> siguiendo los pasos que a continuación se muestran.</p>
			<p align="left">1. Analiza en primer lugar los valores que puede tomar <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn></mrow></mfenced></math> de acuerdo al signo que puede tener <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mn>4</mn></math></p>
			<table>
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn></mrow></mfenced><mo>=</mo></math></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><span></span>
						<select id="opcion_a">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1">a</option>
								<option value="2" id="r2">b</option>

						</select></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mn>4</mn><mo>&#x2265;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#x2265;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_4_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_a" >
			<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>4</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mn>4</mn></math>  </p>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="dos" style="display:none" >
			<p align="left">y</p>
			<table align="center">
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn></mrow></mfenced><mo>=</mo></math></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><span></span>
						<select id="opcion_b">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1">a</option>
								<option value="2" id="r2">b</option>

						</select></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mn>4</mn><mo>&lt;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&lt;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_4_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_b" style="display:none" >
			<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>4</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>+</mo><mn>4</mn></math>  </p>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="tres" style="display:none" >
			<p align="left">2. Regresa a la desigualdad, ahora sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#x2265;</mo><mo>-</mo><mn>4</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn></mrow></mfenced><mo>=</mo><mi>x</mi><mo>+</mo><mn>4</mn><mo>&#x2265;</mo><mn>11</mn></math>.</p>
			<p align="left">Resuelve la desigualdad anterior, encuentra el valor de y:</p>
			<table align="center">
					<tr align="center">
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><span></span>
						<select id="opcion_c">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2265;</mo></math></option>
								<option value="2" id="r2">=</option>
								<option value="3" id="r2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2264;</mo></math></option>
						</select></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_4_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_c" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#x2265;</mo><mo>-</mo><mn>4</mn></math></td>
					</tr>
			</table>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="cuatro" style="display:none" >
			<p align="left">3. También sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&lt;</mo><mo>-</mo><mn>4</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn></mrow></mfenced><mo>=</mo><mo>-</mo><mo>(</mo><mi>x</mi><mo>+</mo><mn>4</mn><mo>)</mo><mo>&#x2265;</mo><mn>11</mn></math>.</p>
			<p align="left">Resuelve la desigualdad anterior, encuentra el valor de x:</p>
				<table align="center">
					<tr align="center">
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

						<td><span></span>
						<select id="opcion_d">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2265;</mo></math></option>
								<option value="2" id="r2">=</option>
								<option value="3" id="r3"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2264;</mo></math></option>
						</select></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_4_d ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_d" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#x2265;</mo><mo>-</mo><mn>4</mn></math></td>
					</tr>
			</table>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="cinco" style="display:none" >
			<p align="left">4. Has encontrado los intervalos para la solución de la desigualdad dada.</p>
			<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#x2208;</mo><mo>[</mo><mo>-</mo><mn>15</mn><mo>,</mo><mo>&#xA0;</mo><mo>-</mo><mn>4</mn><mo>)</mo><mo>,</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#x2208;</mo><mo>(</mo><mo>-</mo><mn>4</mn><mo>,</mo><mn>7</mn><mo>)</mo></math></p>
			<p align="left">Coloca el punto rojo sobre la primera solución que encontraste.</p>
		</div>

		<div id="recta_a" class=" col-lg-6 col-md-6  col-xs-6" style="display:none">

		</div>


		<div class=" col-lg-12 col-md-12  col-xs-12" align="right">
		 <button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
		</div>
	</div>

</div>
