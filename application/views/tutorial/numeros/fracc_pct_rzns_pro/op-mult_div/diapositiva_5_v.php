 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify">Observa que el número es mayor que un entero. Escribe el resultado como un número mixto, la respuesta debe estar reducida a su mínima expresión:</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>5</mn><mo>&#xD7;</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1></td>
				<td><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="fraccion_mixta_5 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mfrac>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_5 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="fraccion_mixta_5 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac></math></h1></td>
			</tr>
		</table>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>