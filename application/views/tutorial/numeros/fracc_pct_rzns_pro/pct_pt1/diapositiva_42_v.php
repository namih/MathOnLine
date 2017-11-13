<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">¿Qué porcentaje es? Completa la tabla según lo que indica la barra. El 100% indica el número de espacios en el estacionamiento:</p>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_green_e.png" />
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<table class="table table-striped">
			<thead>
				<tr>
					<th></th>
					<th>E</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Número de espacios</td>
					<td>30</td>
				</tr>
				<tr>
					<td>Número de espacios ocupados</td>
					<td>5</td>
				</tr>
				<tr>
					<td>Número de espacios disponibles</td>
					<td><input style="text-align: center" size="5" type="text" id="parking_a"></td>
				</tr>
				<tr>
					<td>Fracción de espacios ocupados</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_b"></td>
				</tr>
				<tr>
					<td>Fracción de espacios disponibles</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_c"></td>
				</tr>
				<tr>
					<td>Porcentaje de espacios ocupados</td>
					<td><input style="text-align: center" size="5" type="text" id="parking_d"> %</td>
				</tr>
				<tr>
					<td>Porcentaje de espacios disponibles</td>
					<td><input style="text-align: center" size="5" type="text" id="parking_e"> %</td>
				</tr>
			</tbody>
		</table>
		<button onclick="validar_42()" type="button" class="btn btn-success">Validar</button>
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