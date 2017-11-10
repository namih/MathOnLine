<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Basándose en la información de la tabla, utiliza las flechas para llenar las barras de manera que reflejen la parte llena de cada estacionamiento.</p>
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th></th>
						<th>E1</th>
						<th>E2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Número de espacios</td>
						<td>40</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Número de espacios ocupados</td>
						<td>30</td>
						<td>40</td>
					</tr>
					<tr>
						<td>Número de espacios disponibles</td>
						<td>10</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Fracción de espacios ocupados</td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>30</mn><mn>40</mn></mfrac></math></td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>40</mn><mn>50</mn></mfrac></math></td>
					</tr>
					<tr>
						<td>Fracción de espacios disponibles</td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>40</mn></mfrac></math></td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>50</mn></mfrac></math></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-12">
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
		  	<div class="btn-group" id="opciones">
				<button onclick="disminuir_a_23()" type="button" class="btn btn-primary"><</button>
				<button id="valor_a" type="button" class="btn">0%</button>
				<button onclick="incrementar_a_23()" type="button" class="btn btn-primary">></button>
			</div>
			<br />
			<br />
		  	<img id="percent_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_clean.png" />
		  </div>
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
		  	<div class="btn-group" id="opciones">
				<button onclick="disminuir_b_23()" type="button" class="btn btn-warning"><</button>
				<button id="valor_b" type="button" class="btn">0%</button>
				<button onclick="incrementar_b_23()" type="button" class="btn btn-warning">></button>
			</div>
			<br />
			<br />
		  	<img id="percent_b" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_clean.png" />
		  </div>
		</div>
		<p align="justify">¿Qué porcentaje está ocupado en cada estacionamiento?</p>
		<h3>E1: <input placeholder="?" style="text-align: center" onchange="validar_23()" size="5" type="text" id="parking_e1"> %</h3>
		<h3>E2: <input placeholder="?" style="text-align: center" onchange="validar_23()" size="5" type="text" id="parking_e2"> %</h3>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>