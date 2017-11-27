<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
		<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes que tengan el mismo denominador. Una vez que lo consigas, arrastra la imagen de la izquierda para sobre poner la pieza azul sobre la verde y comprobar que son del mismo tamaño.</p>
		
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				    <td><img class="img-responsive" id="quince_v" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_azul.png"/></td>
				    <td><h1 style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">+</h1></td> 
				    <td><h1 style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>5</mn></mfrac></math></h1></td>
				    <td><img class="img-responsive" id="quince_h" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuatro_quintos_verde.png"/></td>
				    </tr>
				 </table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td>
				    	<h1 id="frac1" style="color: blue"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_6_a ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_6_a ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1>&nbsp;+&nbsp;</h1><br /></td>
				    <td>
				    	<h1 id="frac2" style="color: green"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_6_b ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_6_b ()" type="button" class="btn btn-info">></button>
						</div>					
				    </td>
				    <td align="center"><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><h1 style="color: blue" id="res1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>+</h1><br /></td>
				    <td><h1 style="color: green" id="res2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>5</mn></mfrac></math></h1><br /></td>
				    <td align="center"><h1>&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    
				    <td align="center"><h1 style="color: red" id="rest"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>?</mo><mn>15</mn></mfrac></math></h1></td>
				    	
				  </tr>
				  
				</table>
			</div>
	  </div>
</div>