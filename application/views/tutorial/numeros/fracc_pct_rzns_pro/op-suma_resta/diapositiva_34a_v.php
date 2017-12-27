 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	<p align="justify">Resta las fracciones convirtiéndolas en fracciones con denominador común, es decir, con el mismo denominador.</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
			<table>
				 
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>6</mn></mfrac></math></h1></td>
				    <td align="center"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math></h1></td>
				    <td align="center"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><h1 style="color: red">?</h1></td>
				  </tr>
				  <tr align="center">
				    <td><h1 >
				    	<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="correcto_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_a" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="correcto_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_a" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
							</mfrac>
						</math>
					</h1></td>
				    <td align="center"><h1>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 >
				    	<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="correcto_aa ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_b" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="correcto_aa ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_b" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
							</mfrac>
						</math>
					</h1></td>
				    <td align="center"><h1>&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 >
				    	<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="correcto_aaa ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_c" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="correcto_aaa ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_c" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
							</mfrac>
						</math>
					</h1></td>
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