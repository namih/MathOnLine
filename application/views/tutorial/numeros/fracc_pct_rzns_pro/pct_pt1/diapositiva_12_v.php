<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Un tercer jugador de fútbol, Pablo, tiene una puntuación de 0.52 en tiros a gol. ¿Es mejor que Gume?</p>
	<p align="justify">Sombrea, en el rectangulo de la derecha, la parte correspondiente a Pablo</p>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_40.png" />
		<br />
		<p>Gune: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>40</mn><mo>%</mo><mo>=</mo><mfrac><mn>40</mn><mn>100</mn></mfrac></math></p>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img id="player_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent.png" />
		<br />
		<div class="btn-group" id="opciones">
			<button onclick="disminuir_12()" type="button" class="btn btn-info"><</button>
			<button id="valor_a" type="button" class="btn">0.00</button>
			<button onclick="incrementar_12()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<p>Pablo: 0.52</p>
	</div>
</div>