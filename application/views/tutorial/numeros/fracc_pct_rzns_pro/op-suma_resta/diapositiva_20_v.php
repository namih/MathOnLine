 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
	<p align="justify">Suma las fracciones convirtiéndolas en fracciones con denominador común, es decir, con el mismo denominador. Simplifica tu resultado al máximo. Si el resultado que obtuviste es mayor a un entero, da clic  en el botón mixto y escribe los números correspondientes.</p>
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
					<td><h1>
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac>
							</math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1>
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_20_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac>
							</math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1>
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
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
								</mfrac>
							</math></h1></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<button type="button" onclick="" class="btn btn-primary" disabled >Más ejercicios</button>
			<button type="button" onclick="" class="btn btn-primary" disabled >Mixto</button>
		</div>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>	

