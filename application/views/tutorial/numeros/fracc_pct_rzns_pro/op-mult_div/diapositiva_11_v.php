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
					<td><p align="left">El área del rectángulo azul es la sexta parte del área del cuadrado.Como el área del 	cuadrado es igual a 1, esto quiere decir que el ´área del rectángulo azul es igual a :
						<h6><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_11_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
							</annotation-xml></semantics></mi>
						<mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_11_a()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
							</annotation-xml></semantics></mi></mfrac></math>
					</h6></p></td>
				
				</tr>
			</table>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify">Por otro lado, el área del rectángulo azul se calcula multiplicando su base (<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>) por su altura (<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>) y como acabamos de calcular esta área, podemos concluir que:</p>
			<table>
				<tr align="center">
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac><mo>&#xD7;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h5>área del rectángulo azul</h5></td>
					<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
					<td><h6><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_11_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
							</annotation-xml></semantics></mi>
							<mi><semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_11_b()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
								</annotation-xml></semantics></mi></mfrac></math>
							</h6></td>
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