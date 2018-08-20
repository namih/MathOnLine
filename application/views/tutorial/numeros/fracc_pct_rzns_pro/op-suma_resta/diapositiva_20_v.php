 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
	<p align="justify">Suma las fracciones convirtiéndolas en fracciones con denominador común, es decir, con el mismo denominador. Simplifica tu resultado al máximo. Si el resultado que obtuviste es mayor a un entero, da clic  en el botón mixto y escribe los números correspondientes. NOTA: el botón de mas ejercicios aparece amas al centro en el segundo ejertcicio y el boton mixto disminuye el tamaño en 2 y 3</p>
		<div id="first">
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<div class=" col-lg-12 col-md-12  col-xs-12">
					<table>
						<tr align="center">
							<td><h1 style="color: blue"><math  xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>8</mn></mfrac></math></h1></td>
							<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
							<td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math></h1></td>
							<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=</h1></td>
						</tr>
					</table>
				</div>
				<div class=" col-lg-12 col-md-12  col-xs-12">
					<table>
						<tr align="center">
							<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
							<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
							<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
							<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
							<td><h1 id="fraccion"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
							<td><h4 style="display: none" id="mixto">
							
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_20 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_h" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_20 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_h" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_20 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_h" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h4></td>
					</tr>
				</table>
			</div>
		</div>
			<div align="center" id="mix">
				<button type="button" class="btn btn-success" onclick="mostrar_mixto_20()">Mixto</button>
   	 		</div>
   	 		<div align="center" id="frac" style="display: none">
				<button type="button" class="btn btn-success" onclick="mostrar_fraccion_20 ()">Fracción</button>
   	 		</div>
			<div align="right">
				<button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
			</div>
		</div>
	
</div>
<div id="second" style="display: none">
			<div class=" col-lg-12 col-md-12  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
					<tr align="center">
						<td><h1 style="color: blue"><math  xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1></td>
						<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
						<td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math></h1></td>
						<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=</h1></td>
					</tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
					<tr align="center">
						<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a_uno" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a_uno" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b_uno" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b_uno" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1 id="fraccion1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c_uno" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c_uno" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
					<td><h3 style="display: none" id="mixto1"><math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_20_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_uno_h" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_20_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_uno_h" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_20_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_uno_h" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h3></td>
					</tr>
				</table>
			</div>
		</div>
			<div align="center" id="mix_uno">
				<button type="button" class="btn btn-success" onclick="mostrar_mixto_20_uno()">Mixto</button>
   	 		</div>
   	 		<div align="center" id="frac_uno" style="display: none">
				<button type="button" class="btn btn-success" onclick="mostrar_fraccion_20_uno ()">Fracción</button>
   	 		</div>
			<div align="right">
				<button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
			</div>
		</div>
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>	

