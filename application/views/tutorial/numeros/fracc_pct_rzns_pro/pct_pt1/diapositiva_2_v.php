<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">¿Comó podemos comparar entonces a dos goleadores? Supongamos que nos dicen que un goleador, Gume, tiene un 40% de tiros a gol, mientras que otro, Rogelio, tiene el 35%. Utiliza las flechas para sombrear la parte correspondiente al porcentaje de cada jugador en los rectángulos, suponiendo que el rectángulo representa el total de tiros hacia la portería y el porcentaje representa los tiro a gol.</p>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<div class="btn-group" id="opciones">
			<button onclick="disminuir_a_2()" type="button" class="btn btn-info"><</button>
			<button id="valor_a" type="button" class="btn">0</button>
			<button onclick="incrementar_a_2()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<img id="player_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent.png" />
		<p>Gume: 40%</p>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<div class="btn-group" id="opciones">
			<button onclick="disminuir_b_2()" type="button" class="btn btn-info"><</button>
			<button id="valor_b" type="button" class="btn">0</button>
			<button onclick="incrementar_b_2()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<img id="player_b" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent.png" />
		<p>Rogelio: 35%</p>
	</div>
	<p align="justify">¿Quién es el mejor jugador de acuerdo a esta información?</p>
	<div class="radio">
		<label><input onclick="correcto()" type="radio" name="optradio">Gume</label>
	</div>
	<div class="radio">
		<label><input onclick="error()" type="radio" name="optradio">Rogelio</label>
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