<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Sabemos también que, de cada 10 tiros que tira Hilario hacia la portería, 3 son tiros a gol. ¿Es mejor Hilario que Gume (quien tiene 40%)? Utiliza las flechas para sombrear la parte correspondiente a Hilario, suponiendo que el rectángulo representa el total de tiros hacia la porteria (100%)</p>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_40.png" />
		<br />
		<p>Gune: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>40</mn><mo>%</mo><mo>=</mo><mfrac><mn>40</mn><mn>100</mn></mfrac></math></p>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img id="player_a"  class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green.png" />
		<br />
		<div class="btn-group" id="opciones">
			<button onclick="disminuir_5()" type="button" class="btn btn-info"><</button>
			<button id="valor_a" type="button" class="btn">0</button>
			<button onclick="incrementar_5()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<p>Hilario: 3 de cada <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>10</mn><mo>=</mo><mfrac><mn>3</mn><mn>10</mn></mfrac></math></p>
	</div>
</div>