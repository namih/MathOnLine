 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	<p align="justify">Convierte cada número mixto en una fracción. Después, resta las fracciones con denominador común. Como resultado que obtendrás es mayor a un entero, escribe como un número mixto.</p>
	<div id="first">
		<div class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>-</mo><mn>1</mn><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
				<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
			</tr>
		</table>
	</div>
	<div class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_42_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_42_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></mfra>
				</math></h3></td>
				<td><h1 style="color: red">&nbsp;-&nbsp;</h1></td>	
				<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_42_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_42_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></mfra>
				</math></h3></td>
				<td><h1 style="color: red">&nbsp;=</h1></td>
			</tr>
		</table>
	</div>	
	<div class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
					
				<td><h3>
					<math xmlns="http://www.w3.org/1998/Math/MathML">
						<mfrac>
							<mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="numerador_42 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
							<mi>
								<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_42_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c" placeholder="0" />
								</annotation-xml>
							</semantics>
							</mi>
						</mfrac>
					</math>
				</h3></td>
				<td><h1 style="color: red">&nbsp;-&nbsp;</h1></td>
				<td><h3>
					<math xmlns="http://www.w3.org/1998/Math/MathML">
						<mfrac>
							<mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="numerador_42 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_d" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
							<mi>
								<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_42_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_d" placeholder="0" />
								</annotation-xml>
							</semantics>
							</mi>
						</mfrac>
					</math>
				</h3></td>
				<td><h1 style="color: red">&nbsp;=</h1></td>
			</tr>
		</table>
	</div>							
	
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h3 id="mixto">
							
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_42 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_f" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_42 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_f" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_42 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_f" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h3></td>
				</tr>
			</table>
		</div>
	</div>
	
   	 	<div align="right">
			<button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
		</div>
</div>