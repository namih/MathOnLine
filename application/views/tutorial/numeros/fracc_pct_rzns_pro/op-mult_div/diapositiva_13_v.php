 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify">Para encontrar el resultado de multiplicar <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xD7;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math>, usa las flechas para dividir el cuadrado de manera que se represente la fracción <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> en la base y la fracción <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> en la altura.</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_uno.png"/></td>
				<td><h1 id="numero"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>1</mn></mfrac></math></h1></td>
				
				<td>&nbsp;&nbsp;&nbsp;<div class="btn-group-vertical">
						<button onclick="incrementar_9 ()" type="button" class="btn btn-info">+</button>
						<button onclick="decrementar_9 ()" type="button" class="btn btn-info">-</button>
					</div></td>
				
				<td><img class="img-responsive"  id="bien" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png"/></td>
			</tr>
		</table>
	</div>
	<div style="margin-bottom: 20px"  class=" col-lg-8 col-md-8 col-xs-8">
		<table>
			<tr align="justify">
				<td><h1 id="fraction"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>1</mn></mfrac></math></h1></td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="btn-group">
						<button onclick="incrementar_9 ()" type="button" class="btn btn-info">+</button>
						<button onclick="decrementar_9 ()" type="button" class="btn btn-info">-</button>
					</div>&nbsp;&nbsp;&nbsp;</td>
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