 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	<div id="first">
		<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes que tengan el mismo denominador.</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
			<table>
				<tr align="center">
				   <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/"/></td>
				   <td align="center"><h1 style="color: red">-</h1></td>
				   <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/"/></td>
				   <td align="center"><h1 style="color: red">=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				   <td align="center"><img class="img-responsive"  id="correcto" width="15%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td> 
				</tr>
				<tr align="center">
				   <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>5</mn></mfrac></math></h1></td>
				   <td align="center"><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				   <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math></h1></td>
				   <td align="center"><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				   <td align="center"><img class="img-responsive"  id="correcto_1" width="15%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td>
				</tr>
			</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
					<tr align="center">
						<td>
				    		<h1 id="frac1" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac></math></h1>
				    		<div class="btn-group" id="opciones">
								<button onclick="decrementar_37_a ()" type="button" class="btn btn-info"><</button>
								<button onclick="incrementar_37_a ()" type="button" class="btn btn-info">></button>
							</div>					
				    	</td>
				    	<td align="center"><h1>&nbsp;-&nbsp;</h1><br /></td>
				    	<td>
				    		<h1 id="frac2" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac></math></h1>
				    		<div class="btn-group" id="opciones">
								<button onclick="decrementar_37_b ()" type="button" class="btn btn-info"><</button>
								<button onclick="incrementar_37_b ()" type="button" class="btn btn-info">></button>
							</div>					
				    	</td>
				    	<td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    	<td><h1 id="res1" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>5</mn></mfrac></math></h1><br /></td>
				    	<td align="center"><h1 style="color: red">&nbsp;&nbsp;-&nbsp;&nbsp;</h1><br /></td>
				    	<td><h1 id="res2" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac></math></h1><br /></td>
				    	<td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1><br /></td>
				    	<td><h1 >
				    		<math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="mismo_denominador_37 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="mismo_denominador_37 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
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
		<div align="right">
			<button type="button" class="btn btn-success" onclick="mostrar_segundo()">Más ejercicios</button>
		</div>
	</div>
	
	<div id="second" style="display: none">
		<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes que tengan el mismo denominador.</p>
	
    	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/"/></td>
				    <td align="center"><h1 style="color: red">-</h1></td>
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/"/></td>
				    <td align="center"><h1 style="color: red">=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><img class="img-responsive"  id="correcto_uno" width="15%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td> 
				  </tr>
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">-</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><img class="img-responsive"  id="correcto_1_uno" width="15%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td>
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td>
				    	<h1 id="frac1_uno" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_37_uno_a ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_37_uno_a ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1 style="color: red">&nbsp;-&nbsp;</h1><br /></td>
				    <td>
				    	<h1 id="frac2_uno" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_37_uno_b ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_37_uno_b ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><h1 id="res1_uno" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;-&nbsp;&nbsp;</h1><br /></td>
				    <td><h1 id="res2_uno" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1><br /></td>
				    <td><h1 >
				    	<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="mismo_denominador_uno_37 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_uno" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="mismo_denominador_uno_37 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_uno" placeholder="0" />
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
	 <div align="right">
		<button type="button" class="btn btn-success" onclick="mostrar_tercero()">Más ejercicios</button>
   	 </div>
   </div>
   <div id="third" style="display: none">
   		<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes que tengan el mismo denominador.</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/"/></td>
				    <td align="center"><h1 style="color: red">-</h1></td>
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/"/></td>
				    <td align="center"><h1 style="color: red">=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><img class="img-responsive"  id="correcto_dos" width="15%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td> 
				  </tr>
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>8</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">-</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><img class="img-responsive"  id="correcto_1_dos" width="15%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td>
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td>
				    	<h1 id="frac1_dos" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>8</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_37_dos_a ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_37_dos_a ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1 style="color: red">&nbsp;-&nbsp;</h1><br /></td>
				    <td>
				    	<h1 id="frac2_dos" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_37_dos_b ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_37_dos_b ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><h1 id="res1_dos" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>8</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;-&nbsp;&nbsp;</h1><br /></td>
				    <td><h1 id="res2_dos" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1><br /></td>
				    <td><h1 >
				    	<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="mismo_denominador_dos_37 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador_dos" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="mismo_denominador_dos_37 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador_dos" placeholder="0" />
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
</div>


	

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>