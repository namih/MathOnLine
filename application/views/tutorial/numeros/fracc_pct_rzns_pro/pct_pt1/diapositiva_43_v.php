<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Los estacionamientos E10 al E15 pertenecen a la misma compañía. Los gerentes quieren decidir cuáles cerra y cuáles ampliar. Observa en la tabla la situación promedio en cada estacionamiento y completa:</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<table class="table table-striped">
			<thead>
				<tr>
					<th></th>
					<th>E10</th>
					<th>E11</th>
					<th>E12</th>
					<th>E13</th>
					<th>E14</th>
					<th>E15</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Número de espacios</td>
					<td>50</td>
					<td>60</td>
					<td>30</td>
					<td>80</td>
					<td>90</td>
					<td>70</td>
				</tr>
				<tr>
					<td>Número de espacios ocupados</td>
					<td>30</td>
					<td>30</td>
					<td>10</td>
					<td>60</td>
					<td>60</td>
					<td>40</td>
				</tr>
				<tr>
					<td>Número de espacios disponibles</td>
					<td><input style="text-align: center" size="5" type="text" id="parking_a"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_b"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_c"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_d"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_e"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_f"></td>
				</tr>
			</tbody>
		</table>
		<button onclick="validar_43()" type="button" class="btn btn-success">Validar</button>
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