<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/int_val_abs.js"></script>

<div class="container-fluid">
	<div id="first" class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify">Efectúa la siguiente operación:</p>
			<table>
					<tr align="center">
						<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mo>-</mo><mn>1</mn><mo>-</mo><mn>10</mn></mrow></mfenced><mfenced open="|" close="|"><mrow><mo>-</mo><mn>10</mn><mo>+</mo><mn>9</mn></mrow></mfenced><mo>+</mo><mn>3</mn><mo>-</mo><mn>2</mn><mfenced open="|" close="|"><mrow><mn>7</mn><mo>+</mo><mn>18</mn></mrow></mfenced></math></h3></td>
						<td><h3 style="color:red">&nbsp;&nbsp;=&nbsp;&nbsp;</h3></td>
						<td><h3><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="operacion_10_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="result_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h3></td>
					</tr>
			</table>
		 </div>
		 <div align="right">
 			<button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
 		 </div>
		</div>

		<div id="second" style="display:none" class=" col-lg-12 col-md-12  col-xs-12">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="justify">Efectúa la siguiente operación:</p>
				<table>
						<tr align="center">
							<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>5</mn><mo>+</mo><mn>7</mn></mrow></mfenced><mfenced open="|" close="|"><mrow><mn>9</mn><mo>+</mo><mn>3</mn></mrow></mfenced><mo>-</mo><mn>3</mn><mo>+</mo><mn>4</mn><mfenced open="|" close="|"><mrow><mn>6</mn><mo>+</mo><mn>11</mn></mrow></mfenced></math></h3></td>
							<td><h3 style="color:red">&nbsp;&nbsp;=&nbsp;&nbsp;</h3></td>
							<td><h3><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="operacion_10_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="result_b" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h3></td>
						</tr>
				</table>
			 </div>
			 <div align="right">
	 				<button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
	 		 </div>
		</div>

		<div id="third" style="display:none" class=" col-lg-12 col-md-12  col-xs-12">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="justify">Efectúa la siguiente operación:</p>
				<table>
						<tr align="center">
							<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>8</mn><mo>+</mo><mn>2</mn></mrow></mfenced><mfenced open="|" close="|"><mrow><mn>4</mn><mo>-</mo><mn>3</mn></mrow></mfenced><mo>+</mo><mn>9</mn><mo>+</mo><mn>4</mn><mfenced open="|" close="|"><mrow><mo>-</mo><mn>7</mn><mo>+</mo><mn>8</mn></mrow></mfenced></math></h3></td>
							<td><h3 style="color:red">&nbsp;&nbsp;=&nbsp;&nbsp;</h3></td>
							<td><h3><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="operacion_10_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="result_c" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h3></td>
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
