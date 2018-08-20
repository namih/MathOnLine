 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify"> Observa la figura:</p>
	<div align="left" style="margin-bottom: 20px"  class=" col-lg-8 col-md-8 col-xs-8">
		<table>
			<tr align="justify">
				<td><h5 id="numero"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></td>
				<td><p align="justify"> <img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/combinada_cuartos.png"/></p></td>
			</tr>
		</table>
	</div>
	<div align="left" style="margin-bottom: 20px"  class=" col-lg-8 col-md-8 col-xs-8">
		<table>
			<tr align="left">
				<td><h5 id="fraction" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h5></td>
			</tr>
		</table>
	</div>
	<div align="left" style="margin-bottom: 20px"  class=" col-lg-8 col-md-8 col-xs-8">
		<li>Área del cuadrado: 
			<h5><math xmlns="http://www.w3.org/1998/Math/MathML"><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="numero_14 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero" placeholder="0" />
				</annotation-xml></semantics></mi></h5>
		</li>
			 
		<li>¿Qué fracción del área del cuadrado es el área del cuadrado azul? <h5><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math></h5></li>
		
		<li>¿Cuál es el área del cuadrado azul? 
			<h5><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math></h5></li> 
		
		<li>Área del cuadrado azul = base x altura = <h5><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math>x<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_d" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_d" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math>=<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_e" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input onchange="fraccion_14 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_e" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math> </h5></li>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>