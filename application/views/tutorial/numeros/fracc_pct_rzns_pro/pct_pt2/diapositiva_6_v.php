<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">La población de un país aumentó en un 150% en 40 años. Supongamos que inicialmente la población era de 520,000 personas, ¿Cuánta gente habría en el país despés de los 40 años?</p>
	<p align="justify">Usa las flechas para aumentar el tamaño del rectangulo de la derecha y representar la población final</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_a.png" />
			<p>Población inicial</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img id="poblacion_img" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_a.png" />
			<p>Población final</p>
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_6()" type="button" class="btn btn-info"><</button>
				<button id="valor_a" type="button" class="btn">0%</button>
				<button onclick="incrementar_6()" type="button" class="btn btn-info">></button>
			</div>
		</div>
	</div>
	<p align="justify">¿Cuántas veces aumentó la población? <input onchange="validar_6_a()" style="text-align: center" size="5" type="text" id="poblacion_veces"> veces.</p>
	<p align="justify">¿Cuál es la población del país después de los 40 años? <input onchange="validar_6_b()" style="text-align: center" size="10" type="text" id="poblacion_cantidad"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>