 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	<p align="justify">Cuando tenemos fracciones con diferente denominador, lo que hacemos es convertirlas en fracciones equivalentes en las que el denominador sea igual.
                           Utiliza las flechas para encontrar fracciones equivalentes para <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math> y para que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>6</mn></mfrac></math> tengan el mismo denominador.</p>
    <div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_cuarto_blue.png"/></td>
				    <td align="center"><h1>-</h1></td>
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_sexto_green.png"/></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><img class="img-responsive"  id="correcto" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/interrogacion.png"/></td> 
				  </tr>
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math></h1></td>
				    <td align="center"><h1>-</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>6</mn></mfrac></math></h1></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><h1 style="color: red">?</h1></td>
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td>
				    	<h1 id="frac1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn id="">4</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_33_a ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_33_a ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1>&nbsp;-&nbsp;</h1><br /></td>
				    <td>
				    	<h1 id="frac2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_33_b ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_33_b ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><h1 id="res1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn id="numa">1</mn><mn id="dena">4</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>&nbsp;&nbsp;-&nbsp;&nbsp;</h1><br /></td>
				    <td><h1 id="res2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>6</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1><br /></td>
				    <td><h1 >
				    	<math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="mismo_denominador_33 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
										</annotation-xml>
									</semantics>
								</mi>
								<mi>
									<semantics>
										<annotation-xml encoding="application/xhtml+xml">
											<input onchange="mismo_denominador_33 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
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
                      
