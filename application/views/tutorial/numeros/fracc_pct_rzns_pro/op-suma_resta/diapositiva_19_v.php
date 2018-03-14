 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
	<p align="justify">Ahora sí podemos contestar la pregunta del problema de las latas con agua. Si la lata de Manuel está llena <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math> y la de Roberto está llena hasta <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>, ¿cabe el agua de ambas en una sola lata?. Para responder, suma las fracciones convirtiéndolas en fracciones con común denominador, es decir, con el mismo denominador.</p>
	<div class=" col-lg-12 col-md-12  col-xs-12">
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1><math  xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
					<td><img width="20%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/lata_un_tercio.png"  /></td>
					<td><img width="20%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/lata_un_medio.png"  /></td>
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1></td>
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1 style="color: blue"><math  xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1></td>
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
								</mfrac>
							</math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1>
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
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
								</mfrac>
							</math></h1></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h1>
							<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_19_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_19_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac>
							</math></h1></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>	