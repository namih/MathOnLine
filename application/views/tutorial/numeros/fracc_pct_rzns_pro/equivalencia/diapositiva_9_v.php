<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">¿Representan la misma cantidad de agua <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>10</mn></mfrac></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math> litros?</p>
	<p align="justify">Utiliza las flechas para dividir cada barra entre el número de partes iguales que indica cada fracción. La barra completa representa 1 litro.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_a_9()" type="button" class="btn btn-info"><</button>
				<button id="valor_a" type="button" class="btn">1</button>
				<button onclick="incrementar_a_9()" type="button" class="btn btn-info">></button>
			</div>
			<br />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
			<br />
			<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>10</mn></mfrac></math></h4>
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_b_9()" type="button" class="btn btn-warning"><</button>
				<button id="valor_b" type="button" class="btn">1</button>
				<button onclick="incrementar_b_9()" type="button" class="btn btn-warning">></button>
			</div>
			<br />
			<br />
			<img id="baguette_b" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
			<br />
			<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math></h4>
		</div>
	</div>
</div>
