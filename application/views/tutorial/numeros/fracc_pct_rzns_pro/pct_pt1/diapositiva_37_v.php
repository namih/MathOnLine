<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Si sabemos que el estacionamiento E3 está lleno en un 60%, ¿Cuántos lugares ocupados debe tener otro estacionamiento, E6, para estar lleno a la misma capacidad, si en total tiene 80 lugares? Usa las flechas para sombrear la barra de la derecha y llena la tabla correspondiente.</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th></th>
					<th>E3</th>
					<th>E6</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Número de espacios</td>
					<td>40</td>
					<td>80</td>
				</tr>
				<tr>
					<td>Número de espacios ocupados</td>
					<td>24</td>
					<td><input style="text-align: center" size="5" type="text" id="a_e6"></td>
				</tr>
				<tr>
					<td>Número de espacios disponibles</td>
					<td>16</td>
					<td><input style="text-align: center" size="5" type="text" id="b_e6"></td>
				</tr>
				<tr>
					<td>Fracción de espacios ocupados</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>24</mn><mn>40</mn></mfrac></math></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="c_e6"></td>
				</tr>
				<tr>
					<td>Fracción de espacios disponibles</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>40</mn></mfrac></math></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="d_e6"></td>
				</tr>
				<tr>
					<td>Porcentaje de espacios ocupados</td>
					<td>60%</td>
					<td>60%</td>
				</tr>
			</tbody>
		</table>
		<button onclick="validar_37()" type="button" class="btn btn-success">Validar</button>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_blue_a.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<img id="parking" style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_percent.png" />
			
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_parking()" type="button" class="btn btn-info"><</button>
				<button id="porcentaje" type="button" class="btn">0</button>
				<button onclick="incrementar_parking()" type="button" class="btn btn-info">></button>
			</div>
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