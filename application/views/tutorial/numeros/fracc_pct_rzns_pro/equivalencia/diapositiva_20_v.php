<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes a <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></p>
	<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="disminuir_20()" type="button" class="btn btn-info"><</button>
		<button id="valor" type="button" class="btn">1</button>
		<button onclick="incrementar_20()" type="button" class="btn btn-info">></button>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios.png" />
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<br />
			<h1 id="fraccion_mathjax"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1>
		</div>
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img id="fraccion" width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x1.png" />
		</div>
	</div>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
