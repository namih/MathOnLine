<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<div id="first">
		<p align="justify">Observa que el número es mayor que un entero. Escribe el resultado como un número mixto, la respuesta debe estar reducida a su mínima expresión:</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>8</mn></mfrac><mo>&#xD7;</mo><mn>3</mn></math></h1></td>
					<td><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
					<td><h1 id="fraccion"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_6 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
							</annotation-xml></semantics></mi>
						<mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_6 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
							</annotation-xml></semantics></mi></mfrac></math></h1></td>
					<td><h4 style="display: none" id="mixto">
							
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_6()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_m" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_6()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_m" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_6()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_m" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h4></td>
				</tr>
			</table>
		</div>
		<div align="center" id="mix">
			<button type="button" class="btn btn-success" onclick="mostrar_mixto()">Mixto</button>
   	 	</div>
   	 	<div align="center" id="frac" style="display: none">
			<button type="button" class="btn btn-success" onclick="mostrar_fraccion()">Fracción</button>
   	 	</div>
		<div align="right">
			<button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
		</div>
	</div>
	<div id="second" style="display: none">
		<p align="justify">Observa que el número es mayor que un entero. Escribe el resultado como un número mixto, la respuesta debe estar reducida a su mínima expresión:</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>13</mn></mfrac><mo>&#xD7;</mo><mn>6</mn></math></h1></td>
					<td><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
					<td><h1 id="fraccion_uno"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_uno_6 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a_uno" placeholder="0" />
							</annotation-xml></semantics></mi>
						<mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_uno_6 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a_uno" placeholder="0" />
							</annotation-xml></semantics></mi></mfrac></math></h1></td>
					<td><h4 style="display: none" id="mixto_uno">
							
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_6_uno()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_uno_m" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_6_uno()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_uno_m" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_6_uno()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_uno_m" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h4></td>
				</tr>
			</table>
		</div>
		<div align="center" id="mix_uno">
			<button type="button" class="btn btn-success" onclick="mostrar_uno_mixto()">Mixto</button>
   	 	</div>
   	 	<div align="center" id="frac_uno" style="display: none">
			<button type="button" class="btn btn-success" onclick="mostrar_uno_fraccion()">Fracción</button>
   	 	</div>
		<div align="right">
			<button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
		</div>
	</div>
	<div id="third" style="display: none">
		<p align="justify">Observa que el número es mayor que un entero. Escribe el resultado como un número mixto, la respuesta debe estar reducida a su mínima expresión:</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>13</mn></mfrac><mo>&#xD7;</mo><mn>4</mn></math></h1></td>
					<td><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
					<td><h1 id="fraccion_dos"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_dos_6 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a_dos" placeholder="0" />
							</annotation-xml></semantics></mi>
						<mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_dos_6 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a_dos" placeholder="0" />
							</annotation-xml></semantics></mi></mfrac></math></h1></td>
							
					<td><h4 style="display: none" id="mixto_dos">
							
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_dos_mixta()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_dos_m" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_dos_mixta()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_dos_m" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_dos_mixta()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_dos_m" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h4></td>
				</tr>
			</table>
		</div>
		<div align="center" id="mix_dos">
			<button type="button" class="btn btn-success" onclick="mostrar_dos_mixto()">Mixto</button>
   	 	</div>
   	 	<div align="center" id="frac_dos" style="display: none">
			<button type="button" class="btn btn-success" onclick="mostrar_dos_fraccion()">Fracción</button>
   	 	</div>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>