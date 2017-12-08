<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
	<p align="justify">Escribe la fracción como un número mixto. Para ello, divide el numerador entre el denominador y encuentra el número de enteros que forman la fracción. Después, utilizando el residuo, es decir, lo que sobra en la división, encuentra la fracción que acompaña a los enteros.</p>
		
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
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<button type="button" onclick="" class="btn btn-primary" disabled >Más ejercicios</button>
		</div>
	</div>
</div>


<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>