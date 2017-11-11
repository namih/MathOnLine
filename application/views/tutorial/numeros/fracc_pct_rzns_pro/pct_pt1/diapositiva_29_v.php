<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">El estacionamiento E tiene el 25% de sus espacios ocupados. Si hay 80 lugares. ¿Cuántos se encuentran ocupados? Completa según indica la barra.</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-4 col-lg-4">
			<img style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e25.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-8 col-lg-8">
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
						<td><input style="text-align: center" size="5" type="text" id="parking_ea"></td>
					</tr>
					<tr>
						<td>Número de espacios ocupados</td>
						<td><input style="text-align: center" size="5" type="text" id="parking_eb"></td>
					</tr>
					<tr>
						<td>Número de espacios disponibles</td>
						<td><input style="text-align: center" size="5" type="text" id="parking_ec"></td>
					</tr>
					<tr>
						<td>Fracción de espacios ocupados</td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_ed"></td>
					</tr>
					<tr>
						<td>Fracción de espacios disponibles</td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_ee"></td>
					</tr>
					<tr>
						<td>Porcentaje de espacios ocupados</td>
						<td>25%</td>
					</tr>
					<tr>
						<td>Porcentaje de espacios disponibles</td>
						<td><input style="text-align: center" size="5" type="text" id="parking_ef"> %</td>
					</tr>
				</tbody>
			</table>
			<button onclick="validar_29()" type="button" class="btn btn-success">Validar</button>
		</div>
	</div>
	<p align="justify">Observa que el 25% es equivalente a <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math></p>
</div>