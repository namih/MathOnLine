<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/ec_val_abs.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<div class="container-fluid">
		<div id="first" class=" col-lg-12 col-md-12  col-xs-12">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12" id="uno">
					<p align="left">Usa lo que has aprendido de valor absoluto para resolver  ecuaciones con valor absoluto.</p>
					<p align="left">Resuelve la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo><mn>6</mn></math> siguiendo los pasos que a continuación se muestran.</p>
					<br></br>

					<p align="left">1. Analiza en primer lugar los valores que puede tomar el valor absoluto <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mn>1</mn></mrow></mfenced></math> de acuerdo al signo que puede tomar <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>+</mo><mn>1</mn></math>:</p>
					<table>
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo></math></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><span></span>
								<select id="opcion_a">
										<option value="0" id="r1"></a></option>
										<option value="1" id="r1">a</option>
										<option value="2" id="r2">b</option>

								</select></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>+</mo><mn>1</mn><mo>&#x2265;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#x2265;</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
					</table>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_a" >
					<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>a</mi><mo>+</mo><mn>1</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>+</mo><mn>1</mn></math>  </p>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="dos" style="display:none" >
					<p align="left">y</p>
					<table align="center">
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo></math></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><span></span>
								<select id="opcion_b">
										<option value="0" id="r1"></a></option>
										<option value="1" id="r1">a</option>
										<option value="2" id="r2">b</option>

								</select></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>+</mo><mn>1</mn><mo>&lt;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&lt;</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
					</table>
				</div>
				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_b" style="display:none" >
					<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>a</mi><mo>+</mo><mn>1</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>+</mo><mn>1</mn></math>  </p>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="tres" style="display:none" >
					<p align="left">2. Regresa a la ecuación, ahora sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#x2265;</mo><mo>-</mo><mn>1</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo><mi>a</mi><mo>+</mo><mn>1</mn><mo>=</mo><mn>6</mn></math>.</p>
					<p align="left">Resuelve la ecuación anterior, encuentra el valor de a:</p>
					<table align="center">
							<tr align="center">
								<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>=</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_c" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#x2265;</mo><mo>-</mo><mn>1</mn></math></td>
							</tr>
					</table>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="cuatro" style="display:none" >
					<p align="left">3. También sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&lt;</mo><mo>-</mo><mn>1</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>a</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo><mi>a</mi><mo>+</mo><mn>1</mn><mo>=</mo><mn>6</mn></math>.</p>
					<p align="left">Resuelve la ecuación anterior, encuentra el valor de a:</p>
					<table align="center">
							<tr align="center">
								<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>=</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_d ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_d" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&lt;</mo><mo>-</mo><mn>1</mn></math></td>
							</tr>
					</table>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="cinco" style="display:none" >
					<p align="left">4. Has encontrado dos valores que satisfacen la ecuación dada.</p>
					<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>=</mo><mn>5</mn></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>=</mo><mo>-</mo><mn>7</mn></math></p>
				</div>

				<div align="center"  class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" >
					<button id="informacion_a"  type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" disabled><strong>NOTA: </strong></button>

					 <!-- Modal -->
					 <div class="modal fade" id="myModal" role="dialog">
						 <div class="modal-dialog">

							 <!-- Modal content-->
							 <div class="modal-content">
								 <div class="modal-header">
									 <button type="button" class="close" data-dismiss="modal">&times;</button>

								 </div>
								 <div class="modal-body">
									 <p>Los puntos en color azul representan los operandos, los puntos verdes representan los resultados. Además, puedes hacer zoom a la recta dando click sobre la misma.</p>
								 </div>
								 <div class="modal-footer">
									 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								 </div>
							 </div>

						 </div>
					 </div>
				</div>


				<div id="recta_a" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" style="display:none">

				</div>
			<div align="right">
			 <button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
			</div>
		</div>

		<div id="second" style="display:none" class=" col-lg-12 col-md-12  col-xs-12">
			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12" id="seis">
				<p align="left">Usa lo que has aprendido de valor absoluto para resolver  ecuaciones con valor absoluto.</p>
				<p align="left">Resuelve la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo><mn>10</mn></math> siguiendo los pasos que a continuación se muestran.</p>
				<br></br>

			<p align="left">1. Analiza en primer lugar los valores que puede tomar el valor absoluto <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>+</mo><mn>1</mn></mrow></mfenced></math> de acuerdo al signo que puede tomar <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>+</mo><mn>1</mn></math>:</p>
			<table>
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo></math></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><span></span>
						<select id="opcion_c">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1">a</option>
								<option value="2" id="r2">b</option>

						</select></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>+</mo><mn>1</mn><mo>&#x2265;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&#x2265;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_1_e ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_e" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
			</table>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_c" >
			<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>p</mi><mo>+</mo><mn>1</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>+</mo><mn>1</mn></math>  </p>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="siete" style="display:none" >
			<p align="left">y</p>
			<table align="center">
					<tr align="center">
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo></math></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><span></span>
						<select id="opcion_d">
								<option value="0" id="r1"></a></option>
								<option value="1" id="r1">a</option>
								<option value="2" id="r2">b</option>

						</select></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>+</mo><mn>1</mn><mo>&lt;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&lt;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_1_f ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_f" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
			</table>
		</div>
		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_d" style="display:none" >
			<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>p</mi><mo>+</mo><mn>1</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>+</mo><mn>1</mn></math>  </p>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="ocho" style="display:none" >
			<p align="left">2. Regresa a la ecuación, ahora sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&#x2265;</mo><mo>-</mo><mn>1</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo><mi>p</mi><mo>+</mo><mn>1</mn><mo>=</mo><mn>10</mn></math>.</p>
			<p align="left">Resuelve la ecuación anterior, encuentra el valor de a:</p>
			<table align="center">
					<tr align="center">
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>=</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_1_g ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_g" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&#x2265;</mo><mo>-</mo><mn>1</mn></math></td>
					</tr>
			</table>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="nueve" style="display:none" >
			<p align="left">3. También sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&lt;</mo><mo>-</mo><mn>1</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>+</mo><mn>1</mn></mrow></mfenced><mo>=</mo><mi>p</mi><mo>+</mo><mn>1</mn><mo>=</mo><mn>p</mn></math>.</p>
			<p align="left">Resuelve la ecuación anterior, encuentra el valor de a:</p>
			<table align="center">
					<tr align="center">
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>=</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_1_h ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_h" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&lt;</mo><mo>-</mo><mn>1</mn></math></td>
					</tr>
			</table>
		</div>

		<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="diez" style="display:none" >
			<p align="left">4. Has encontrado dos valores que satisfacen la ecuación dada.</p>
			<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>=</mo><mn>9</mn></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>=</mo><mo>-</mo><mn>11</mn></math></p>
		</div>

		<div align="center" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" >
			<button align="right" id="informacion_b" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" disabled><strong>NOTA: </strong></button>

			 <!-- Modal -->
			 <div class="modal fade" id="myModal" role="dialog">
				 <div class="modal-dialog">

					 <!-- Modal content-->
					 <div class="modal-content">
						 <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal">&times;</button>

						 </div>
						 <div class="modal-body">
							 <p>Los puntos en color azul representan los operandos, los puntos verdes representan los resultados. Además, puedes hacer zoom a la recta.</p>
						 </div>
						 <div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						 </div>
					 </div>

				 </div>
			 </div>
		 </div>


		<div id="recta_b" class=" col-lg-12 col-md-12 col-xs-12" style="margin-bottom: 20px" style="display:none">

		</div>
		<div align="right">
			 <button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
		</div>
	</div>

			<div id="third" style="display:none"  class=" col-lg-12 col-md-12  col-xs-12">

					<div  align="center" class=" col-lg-12 col-md-12  col-xs-12" id="once">
						<p align="left">Usa lo que has aprendido de valor absoluto para resolver  ecuaciones con valor absoluto.</p>
						<p align="left">Resuelve la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>b</mi><mo>+</mo><mn>6</mn></mrow></mfenced><mo>=</mo><mn>1</mn></math> siguiendo los pasos que a continuación se muestran.</p>
						<br></br>

					<p align="left">1. Analiza en primer lugar los valores que puede tomar el valor absoluto <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>b</mi><mo>+</mo><mn>6</mn></mrow></mfenced></math> de acuerdo al signo que puede tomar <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>+</mo><mn>6</mn></math>:</p>
					<table>
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>b</mi><mo>+</mo><mn>6</mn></mrow></mfenced><mo>=</mo></math></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><span></span>
								<select id="opcion_e">
										<option value="0" id="r1"></a></option>
										<option value="1" id="r1">a</option>
										<option value="2" id="r2">b</option>

								</select></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>+</mo><mn>6</mn><mo>&#x2265;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#x2265;</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_i ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_i" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
					</table>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_e" >
					<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>b</mi><mo>+</mo><mn>6</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>+</mo><mn>6</mn></math>  </p>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="doce" style="display:none" >
					<p align="left">y</p>
					<table align="center">
							<tr align="center">
								<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>b</mi><mo>+</mo><mn>6</mn></mrow></mfenced><mo>=</mo></math></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><span></span>
								<select id="opcion_f">
										<option value="0" id="r1"></a></option>
										<option value="1" id="r1">a</option>
										<option value="2" id="r2">b</option>

								</select></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>+</mo><mn>6</mn><mo>&lt;</mo><mn>0</mn></math>, es decir,  si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&lt;</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_j ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_j" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
							</tr>
					</table>
				</div>
				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="opciones_f" style="display:none" >
					<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mo>(</mo><mi>b</mi><mo>+</mo><mn>6</mn><mo>)</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>+</mo><mn>1</mn></math>  </p>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="trece" style="display:none" >
					<p align="left">2. Regresa a la ecuación, ahora sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#x2265;</mo><mo>-</mo><mn>6</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>b</mi><mo>+</mo><mn>6</mn></mrow></mfenced><mo>=</mo><mi>b</mi><mo>+</mo><mn>6</mn><mo>=</mo><mn>1</mn></math>.</p>
					<p align="left">Resuelve la ecuación anterior, encuentra el valor de a:</p>
					<table align="center">
							<tr align="center">
								<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>=</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_k ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_k" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#x2265;</mo><mo>-</mo><mn>6</mn></math></td>
							</tr>
					</table>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="catorce" style="display:none" >
					<p align="left">3. También sabes que si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&lt;</mo><mo>-</mo><mn>6</mn></math> entonces <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>b</mi><mo>+</mo><mn>6</mn></mrow></mfenced><mo>=</mo><mi>b</mi><mo>+</mo><mn>6</mn><mo>=</mo><mn>b</mn></math>.</p>
					<p align="left">Resuelve la ecuación anterior, encuentra el valor de a:</p>
					<table align="center">
							<tr align="center">
								<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>=</mo></math></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td><h4><mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="resultado_1_l ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_l" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h4></td>
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&lt;</mo><mo>-</mo><mn>1</mn></math></td>
							</tr>
					</table>
				</div>

				<div  align="left" class=" col-lg-12 col-md-12  col-xs-12" id="quince" style="display:none" >
					<p align="left">4. Has encontrado dos valores que satisfacen la ecuación dada.</p>
					<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>=</mo><mn>7</mn></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>=</mo><mo>-</mo><mn>7</mn></math></p>
				</div>
			</div>


</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>
