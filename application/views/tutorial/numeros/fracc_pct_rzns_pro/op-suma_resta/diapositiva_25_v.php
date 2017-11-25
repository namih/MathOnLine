 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
		<p align="justify">VirtualBox_WinXP_15_05_2017_12_17_39:¿Cómo escribirías el número <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>12</mn><mfrac><mn>3</mn><mn>4</mn></mfrac></math> como fracción?</p>
		<p>¿Cuántos cuartos hay en un entero? fracción</p>
		<p>¿Cuántos cuartos hay en doce enteros? fracción</p>
		 <p>¿Cuántos cuartos hay en total en <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>12</mn><mfrac><mn>3</mn><mn>4</mn></mfrac></math>?fracción</p>
		<p>Observa que para escribir el número mixto como fracción podemos sumar las partes correspondientes a los enteros y la fracción que forma el número mixto (<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math>). Para obtener las
          partes correspondientes podemos multiplicar el número de enteros (12) por el número de partes que hay en un entero (<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>4</mn></mfrac></math>) .</p> 
		<!--<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_tercio.png"/></td>
				    <td align="center"><h1>+</h1></td>
				    <td><img class="img-responsive" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_medio_green.png"/></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><h1 style="color: red">?</h1></td> 
				  </tr>
				  <tr align="center">
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
				    <td align="center"><h1>+</h1></td>
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1></td>
				    <td align="center"><h1>=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td align="center"><h1 style="color: red">?</h1></td>
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td>
				    	<h1 id="frac1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_5_a ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_5_a ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1>&nbsp;+&nbsp;</h1><br /></td>
				    <td>
				    	<h1 id="frac2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_5_b ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_5_b ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><h1 id="res1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>+</h1><br /></td>
				    <td><h1 id="res2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1><br /></td>
				  </tr>
				  
				</table>
			</div>
	
			
				<!-- <div class=" col-lg-4 col-md-4  col-xs-12">
					<div class=" col-lg-12 col-md-12  col-xs-12">
						<img class="img-responsive" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_tercio.png"/>
					</div>
					<div class=" col-lg-12 col-md-12  col-xs-12">
						<h1 style="color: blue">&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math>&nbsp;&nbsp;=</h1>
					</div>
				</div>
				<div class=" col-lg-4 col-md-4  col-xs-12">
					<div class=" col-lg-12 col-md-12  col-xs-12">
						<img class="img-responsive" style="float: left" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_medio_green.png"/><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+</h1>
					</div>
					<div class=" col-lg-12 col-md-12  col-xs-12">
						<h1 style="color: green">&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;=</h1>
					</div>					
				</div>
				<div  class=" col-lg-4 col-md-4  col-xs-12">
					<div class=" col-lg-12 col-md-12  col-xs-12">
						<img class="img-responsive" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_octavos.png"/>
					</div>
					<div class=" col-lg-12 col-md-12  col-xs-12">
						<h1><math xmlns="http://www.w3.org/1998/Math/MathML">
								<mfrac>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" />
											</annotation-xml>
										</semantics>
									</mi>
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input onchange="" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" />
											</annotation-xml>
										</semantics>
									</mi>
								</mfrac>
							</math></h1>
					</div> 
				</div>	 -->	

</div>