<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">Al multiplicar o dividir el numerador y el denominador de una fracción por el mismo número, obtienes una fracción equivalente. Usa las flechas para aumentar el número y observa lo que sucede en la representación gráfica de la fracción que resulta.</p>
	<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="disminuir_18()" type="button" class="btn btn-info"><</button>
		<button id="valor" type="button" class="btn">1</button>
		<button onclick="incrementar_18()" type="button" class="btn btn-info">></button>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos.png" />
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<br />
			<h1 id="fraccion_mathjax"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>7</mn></mfrac></math></h1>
		</div>
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img id="fraccion" width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x1.png" />
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<p align="justify">¿Qué sucede, al multiplicar por un número mayor que uno, con el número de partes en la que está dividido el entero?</p>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Aumenta</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Disminuye</label>
		</div>
		<p align="justify">¿Qué sucede, al multiplicar por un número mayor que uno, con el número de partes sombreadas?</p>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Aumenta</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Disminuye</label>
		</div>
	</div>
</div>
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
