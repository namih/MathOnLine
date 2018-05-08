<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/ec_val_abs.js"></script>

<div class="container-fluid">
	<div id="first" class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">Resuelvela siguiente ecuación: </p>
				<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>p</mi><mo>-</mo><mn>5</mn></mrow></mfenced><mo>=</mo><mn>19</mn></math></p>
				<table>
						<tr align="center">
							<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>=</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&gt;</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
						</tr>
					</table>
			</div>

			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<table>
					<tr align="center">
						<p align="left">y</p>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>=</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_c" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>p</mi><mo>&gt;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_4_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_d" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
				</table>
			</div>
		<div align="right">
		 <button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
		</div>
	</div>

	<div id="second" style="display:none" class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">Resuelvela siguiente ecuación: </p>
				<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>9</mn></mrow></mfenced><mo>=</mo><mn>20</mn></math></p>
				<table>
						<tr align="center">
							<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_e" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&gt;</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_f" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
						</tr>
					</table>
			</div>

			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<table>
					<tr align="center">
						<p align="left">y</p>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_g" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&gt;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_2_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_h" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
					</tr>
				</table>
			</div>
		<div align="right">
			 <button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
		</div>
	</div>

	<div id="third" style="display:none"  class=" col-lg-12 col-md-12  col-xs-12">
		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<p align="left">Resuelvela siguiente ecuación: </p>
				<p align="center"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>y</mi><mo>+</mo><mn>2</mn></mrow></mfenced><mo>=</mo><mn>3</mn></math></p>
				<table>
						<tr align="center">
							<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_i" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&gt;</mo></math></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><h4><mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_j" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi></h4></td>
						</tr>
					</table>
			</div>

			<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
				<table>
					<tr align="center">
						<p align="left">y</p>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_k" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&gt;</mo></math></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="resultado_2_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_l" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi></h4></td>
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
