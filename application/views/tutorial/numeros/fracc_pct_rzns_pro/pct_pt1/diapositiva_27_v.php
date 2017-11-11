<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Completa la tabla según el número de espacios ocupados que indica la barra. ¿A qué porcentaje equivale? El 100% indica el número de espacios en el estacionamiento.</p>
	<div>
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<img style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e.png" />
		</div>
		<div class="col-xs-12 col-sm-8 col-lg-8">
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
						<td>2</td>
					</tr>
					<tr>
						<td>Número de espacios ocupados</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Número de espacios disponibles</td>
						<td><input style="text-align: center" size="5" type="text" id="parking_ea"></td>
					</tr>
					<tr>
						<td>Fracción de espacios ocupados</td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_eb"></td>
					</tr>
					<tr>
						<td>Fracción de espacios disponibles</td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_ec"></td>
					</tr>
					<tr>
						<td>Porcentaje de espacios ocupados</td>
						<td><input style="text-align: center" size="5" type="text" id="parking_ed"> %</td>
					</tr>
					<tr>
						<td>Porcentaje de espacios disponibles</td>
						<td><input style="text-align: center" size="5" type="text" id="parking_ee"> %</td>
					</tr>
				</tbody>
			</table>
			<button onclick="validar_27()" type="button" class="btn btn-success">Validar</button>
		</div>
	</div>
</div>