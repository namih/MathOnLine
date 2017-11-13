<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">El estacionamiento E5 tiene ocupado un 20% de sus lugares a las 10 hrs. A las 23 hrs. tiene ocupado el 5% ¿Cuántos lugares están ocupados a las 23 hrs. si a las 10 hrs. están ocupados 28 lugares? ¿Cuántos lugares hay en el estacionamiento? Utiliza las flechas para sombrear el 5% en la barra de la derecha.</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_green_d.png" />
			<p>20%</p>
			<br />
			<p>28 lugares ocupados.</p>
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<img id="parking" style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_percent.png" />
			<p>5%</p>
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_parking()" type="button" class="btn btn-info"><</button>
				<button id="porcentaje" type="button" class="btn">0</button>
				<button onclick="incrementar_parking()" type="button" class="btn btn-info">></button>
			</div>
			<br />
			<br />
			<p><input placeholder="?" style="text-align: center" onchange="validar_36_a()" size="5" type="text" id="ocupados"> lugares ocupados.</p>
		</div>
	</div>
	<p align="justify">La capacidad del estacionamiento es <input placeholder="?" style="text-align: center" onchange="validar_36_b()" size="5" type="text" id="capacidad"> lugares.</p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>