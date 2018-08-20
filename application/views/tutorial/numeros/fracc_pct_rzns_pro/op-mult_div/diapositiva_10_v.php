 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify"> Observa la figura:</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_1_6.png"/></td>
				<td><h1 id="numero" align="left"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1></td>
			</tr>
		</table>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
			<tr align="center">
				<td><h1 id="numero"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
			</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
			<tr align="center">
				<td><p align="left">Recuerda que el área de cualquier rectángulo (incluyendo el cuadrado) se obtiene multiplicando su base por su altura. ¿Cuál es el área del cuadrado original?<h6><math xmlns="http://www.w3.org/1998/Math/MathML">
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="entero_10()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi></h6></p>
				<td></td>
			</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><p align="left">¿Qué fracción representa el área del rectángulo azul con respecto al área del cuadrado original?
							<h6><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="fraccion_10 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input onchange="fraccion_10()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math>
							</h6></p>
					
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