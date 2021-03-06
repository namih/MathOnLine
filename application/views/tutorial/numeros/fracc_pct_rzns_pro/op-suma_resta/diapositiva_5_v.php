<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
		<p align="justify">Cuando tenemos fracciones con diferente denominador, lo que hacemos es convertirlas en fracciones equivalentes en las que el denominador sea igual. Utiliza las flechas para encontrar fracciones equivalentes para que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> que tengan el mismo denominador.</p>
		
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
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
	  </div>		
</div>