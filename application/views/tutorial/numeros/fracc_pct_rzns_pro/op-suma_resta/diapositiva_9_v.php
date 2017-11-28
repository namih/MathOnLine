<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
		<p align="justify">Observa que las dos fracciones tienen distinto denominador. Encuentra fracciones equivalentes a cada una, con un denominador común, para que se puedan sumar.</p>
		
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><img class="img-responsive" id="mitad" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_medio_blue.png"/></td>
				    <td align="center"><h1>+</h1></td>
				    <td><img class="img-responsive" id="siete" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_septimos_green.png"/></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				  </tr>
				  <tr align="center">
				    <td><h1 style="color: blue" id="res1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1></td>
				    <td align="center"><h1>&nbsp;+&nbsp;</h1></td>
				    
				    <td><h1 style="color: green" id="res1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math></h1></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td>
						<h1>
				<math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_9_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_9_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
					</mfrac>
				</math></h1>
					</td>
				    <td align="center"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td>
						<h1>
				<math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_9_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_9_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
					</mfrac>
				</math></h1>
					</td>
				    <td align="center"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td>
						<h1>
				<math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_9_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c" placeholder="0"  />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_9_c ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c" placeholder="0"  />
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
