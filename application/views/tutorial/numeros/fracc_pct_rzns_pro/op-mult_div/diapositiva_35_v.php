 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify"> Encuentra el resultado de la división. Multiplica “cruzado” el denominador de la fracción por el divisor.</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>5</mn></mfrac></math></h3></td>
						<td><h1 style="color: red">&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xF7;</mo></math>&nbsp;&nbsp;</h1></td>
						<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn></math></h3></td>
						<td><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
						<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="fraccion_35 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
							</annotation-xml></semantics></mi>
							<mi><semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_35 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
								</annotation-xml></semantics></mi></mfrac></math></h3></td>
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