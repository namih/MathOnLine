 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<p align="left">¿Qué sucede si tenemos que dividir una fracción entre otra fracción?. Imagina que debemos dividir <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xF7;</mo><mfrac><mn>1</mn><mn>4</mn></mfrac></math>. Esto equivale a encontrar cuántas veces cabe <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math> dentro de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>.</p>
		<table>
			<tr align="center">
				<td><img id="telar" width="40%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuadro_1_4.png"/></td>
				<td><img id="telar" width="40%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cuadro_1_2.png"/></td>
			</tr>
		</table>
		<br />
		<div align="left" >
		<li>¿Cuántas veces cabe <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math> en <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>?
		<h3> <annotation-xml encoding="application/xhtml+xml">
							<input onchange="fraccion_44()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero" placeholder="0" />
				</annotation-xml></semantics></mi></math></h3></li>
			</div>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>