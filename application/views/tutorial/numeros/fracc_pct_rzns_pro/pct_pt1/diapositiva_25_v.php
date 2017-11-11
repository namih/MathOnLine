<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-lg-12">
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-4 col-lg-4">
		  	<p>E1</p>
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e3.png" />
		  </div>
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-8 col-lg-8">
		  	<p>E2</p>
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e4.png" />
		  </div>
		</div>
		<p align="justify">Completa los letreros que informan a los conductores sobre la disponibilidad de cada estacionamiento:</p>
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th></th>
						<th>E3</th>
						<th>E4</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Número de espacios</td>
						<td><input style="text-align: center" size="5" type="text" id="a_e1"></td>
						<td><input style="text-align: center" size="5" type="text" id="a_e2"></td>
					</tr>
					<tr>
						<td>Número de espacios ocupados</td>
						<td><input style="text-align: center" size="5" type="text" id="b_e1"></td>
						<td><input style="text-align: center" size="5" type="text" id="b_e2"></td>
					</tr>
					<tr>
						<td>Número de espacios disponibles</td>
						<td><input style="text-align: center" size="5" type="text" id="c_e1"></td>
						<td><input style="text-align: center" size="5" type="text" id="c_e2"></td>
					</tr>
					<tr>
						<td>Fracción de espacios ocupados</td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="d_e1"></td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="d_e2"></td>
					</tr>
					<tr>
						<td>Fracción de espacios disponibles</td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="e_e1"></td>
						<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="e_e2"></td>
					</tr>
				</tbody>
			</table>
			<button onclick="validar_25()" type="button" class="btn btn-success">Validar</button>
		</div>
		<p align="justify">¿Cuál crees que está más lleno?</p>
		<div align="justify" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">E3</label>
			</div>
			<div class="radio">
				<label><input onclick="correcto()" type="radio" name="optradio">E4</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">Iguales</label>
			</div>
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