 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify">Encuentra el resultado de la multiplicación multiplicando los numeradores y los denominadores:</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math></h3></td>
				<td><h1 style="color: red">&nbsp;&nbsp;x&nbsp;&nbsp;</h1></td>
				<td><h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h3></td>
				<td><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi><semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onchange="fraccion_16 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
				</annotation-xml></semantics></mi>
				<mi><semantics>
					<annotation-xml encoding="application/xhtml+xml">
						<input onchange="fraccion_16 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
					</annotation-xml></semantics></mi></mfrac></math></h1></td>
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