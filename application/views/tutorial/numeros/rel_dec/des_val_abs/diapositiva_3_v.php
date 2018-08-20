<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/des_val_abs.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<div class="container-fluid">

		<div id="first" class=" col-lg-12 col-md-12  col-xs-12">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">Resuelve la siguiente desigualdad:</p>
				<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn><mo>.</mo><mn>31</mn></mrow></mfenced><mo>&lt;</mo><mn>5</mn><mo>.</mo><mn>71</mn></math><p>
				<table>
						<tr align="center">

							<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>(</mo></math> <mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="intervalo_3_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;,&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="intervalo_3_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo></math></h4></td>
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
				<p align="left">Resuelve la siguiente desigualdad:</p>
				<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>0</mn><mo>.</mo><mn>13</mn></mrow></mfenced><mo>&lt;</mo><mn>5</mn><mo>.</mo><mn>39</mn></math><p>
				<table>
						<tr align="center">

							<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>(</mo></math> <mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="intervalo_3_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_c" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;,&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="intervalo_3_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_d" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo></math></h4></td>
						</tr>
				</table>
			</div>

			<div id="recta_b" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" style="display:none">

			</div>
			<div align="right">
				 <button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
			</div>
		</div>

		<div id="third" style="display:none" class=" col-lg-12 col-md-12  col-xs-12">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">Resuelve la siguiente desigualdad:</p>
				<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>0</mn><mo>.</mo><mn>31</mn></mrow></mfenced><mo>&lt;</mo><mn>6</mn><mo>.</mo><mn>12</mn></math><p>
				<table>
						<tr align="center">

							<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>(</mo></math> <mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="intervalo_3_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_e" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;,&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="intervalo_3_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_f" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo></math></h4></td>
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
