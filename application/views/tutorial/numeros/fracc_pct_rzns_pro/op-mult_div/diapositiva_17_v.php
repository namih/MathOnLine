 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify"> Cuando tenemos que multiplicar un número mixto por una fracción, podemos convertir el número mixto en una fracción y luego hacer la multiplicación. ¿Cómo se convierte el número mixto <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mfrac><mn>3</mn><mn>4</mn></mfrac></math> en una fracción?
	Observa el siguiente ejemplo:
</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuadrado_vacio.png"/></td>
				<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuadrado_vacio.png"/></td>
				<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuadrado_vacio.png"/></td>
				<td><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuadrado_cuartos.png"/></td>
			</tr>
		</table>
		<br />
		<br />
		<p align="left">Si dividieras los cuatro cuadrados en cuartos, ¿cuántos cuartos habría en total? <math xmlns="http://www.w3.org/1998/Math/MathML"><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="numero_17_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero_a" placeholder="0" />
			</annotation-xml></semantics></mi></math></p>
		<p align="left"> la fracción mixta <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mfrac><mn>3</mn><mn>4</mn></mfrac></math>, ¿cuántos cuartos hay en tres enteros? <math xmlns="http://www.w3.org/1998/Math/MathML"><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="numero_17_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero_b" placeholder="0" />
			</annotation-xml></semantics></mi></math></p>
			
		<p align="left">¿Cuántos  cuartos hay en total en <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mfrac><mn>3</mn><mn>4</mn></mfrac></math>? <annotation-xml encoding="application/xhtml+xml">
					<input onchange="numero_17_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero_c" placeholder="0" />
		</annotation-xml></semantics></mi></math></p>
		<p align="left"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mfrac><mn>3</mn><mn>4</mn></mfrac><mo>=</mo></math> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="fraccion_17 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input onchange="fraccion_17 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math></p>
		
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>