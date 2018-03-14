<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
	<p align="justify">Escribe la fracción como un número mixto. Para ello, divide el numerador entre el denominador y encuentra el número de enteros que forman la fracción. Después, utilizando el residuo, es decir, lo que sobra en la división, encuentra la fracción que acompaña a los enteros.</p>
	<div id="first">
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>3</mn></mfrac></math></h1></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>3</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td align="center "><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1><input onchange="decimal_18 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="5" id="decimal" placeholder="0.0" /></h1></td>
					<td><h5 style="color: red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOTA:</b></h5><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usar 3 cifras decimales.</h5></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>3</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td align="center "><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h2>
				           <math xmlns="http://www.w3.org/1998/Math/MathML">
				              <mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="fraccion_mixta_18 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
							<mfrac>
								<mi><semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="fraccion_mixta_18 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
									</annotation-xml>
									</semantics>
								</mi>
								<mi><semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_18 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
							</mfrac></math></h2></td>
							
				</tr>
			</table>
		</div>
	</div>
	<div align="right">
			<button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
	</div>
</div>	
	
	<div id="second" style="display: none">
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>3</mn></mfrac></math></h1></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>3</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td align="center "><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1><input onchange="decimal_18_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="5" id="decimal_uno" placeholder="0.0" /></h1></td>
					<td><h5 style="color: red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOTA:</b></h5><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usar 3 cifras decimales.</h5></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>3</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td align="center "><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h2>
				           <math xmlns="http://www.w3.org/1998/Math/MathML">
				              <mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="fraccion_mixta_18_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_uno" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
							<mfrac>
								<mi><semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="fraccion_mixta_18_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_uno" placeholder="0" />
									</annotation-xml>
									</semantics>
								</mi>
								<mi><semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_18_uno ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_uno" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
							</mfrac></math></h2></td>
							
					</tr>
				</table>
			</div>
		</div>
		<div align="right">
			<button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
		</div>
	</div>
	<div id="third" style="display: none">
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>6</mn></mfrac></math></h1></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>6</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td align="center "><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1><input onchange="decimal_18_dos ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="5" id="decimal_dos" placeholder="0.000" /></h1></td>
					<td><h5 style="color: red"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOTA:</b></h5><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usar 3 cifras decimales.</h5></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: red"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>6</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td align="center "><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h2>
				           <math xmlns="http://www.w3.org/1998/Math/MathML">
				              <mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="fraccion_mixta_18_dos ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_dos" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
							<mfrac>
								<mi><semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="fraccion_mixta_18_dos ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_dos" placeholder="0" />
									</annotation-xml>
									</semantics>
								</mi>
								<mi><semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_18_dos ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_dos" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
							</mfrac></math></h2></td>
							
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>


<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>