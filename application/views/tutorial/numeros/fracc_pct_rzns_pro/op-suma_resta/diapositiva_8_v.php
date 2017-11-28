<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
		<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes que tengan  el mismo denominador. Después, escribe el resultado de la suma.</p>
		
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>6</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>+</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><h1 style="color: red">?</h1></td> 
				  </tr>
				  <tr align="center">
				    <td><h1 id="frac1" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_8_a ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_8_a ()" type="button" class="btn btn-info">></button>
						</div></td>
				    <td align="center"><h1>&nbsp;+&nbsp;</h1><br /></td>
				    <td><h1 id="frac2" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_8_b ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_8_b ()" type="button" class="btn btn-info">></button>
						</div></td>
				    <td align="center"><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><h1 style="color: blue" id="res1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>6</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>+</h1><br /></td>
				    <td><h1 style="color: green" id="res2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1><br /></td>
				    
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>6</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>+</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td>
						<h1>
				<math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_8 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_8 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
					</mfrac>
				</math></h1>
					</td>
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