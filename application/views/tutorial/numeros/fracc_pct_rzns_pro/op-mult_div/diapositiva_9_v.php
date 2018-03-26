 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="left">¿Cómo se multiplica <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac><mo>&#xD7;</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math>?</p>
	<p align="left">Ahora, utiliza las flechas para dividir el cuadrado, horizontalmente, en partes iguales para representar la fracción <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>:</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<table>
			<tr align="center">
				<td><img class="img-responsive" id="cuadro" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/iv_tres.png"/></td>
				<td><div class="btn-group-vertical">
					<button onclick="incrementar_9 ()" type="button" class="btn btn-info">+</button>
					<button onclick="decrementar_9 ()" type="button" class="btn btn-info">-</button>
				</div>&nbsp;&nbsp;&nbsp;</td>
				<td><h1 id="numero"> 1</h1></td>
				<td><img class="img-responsive"  id="bien" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/incorrecto.png"/></td>
			</tr>
		</table>
	</div>	
	<div style="margin-bottom: 20px"  class=" col-lg-8 col-md-8 col-xs-8">
		<table>
			<tr align="justify">
				<td><h1 id="fraction"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
			</tr>
		</table>
		
	</div>
</div>

