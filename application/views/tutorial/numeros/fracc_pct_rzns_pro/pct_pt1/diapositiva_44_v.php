<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Completa la tabla con los valores que faltan</p>
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
				<tr>
					<td>Fracción de espacios ocupados</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_g"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_h"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_i"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_j"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_k"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_l"></td>
				</tr>
				<tr>
					<td>Fracción de espacios disponibles</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_m"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_n"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_o"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_p"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_p"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="parking_r"></td>
				</tr>
				<tr>
					<td>Porcentaje de espacios ocupados</td>
					<td><input style="text-align: center" size="5" type="text" id="parking_s"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_t"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_u"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_v"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_w"></td>
					<td><input style="text-align: center" size="5" type="text" id="parking_x"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<p align="justify">¿Cuáles estacionamientos deben cerrar si los gerentes quieren que mínimo haya el 60% de ocupación en los mismos?</p>
	<div align="justify" class="checkbox">
		<label><input onchange="visualizar()" id="e10" type="checkbox" value="">E10</label> <span id="e10_span" style="display: none" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	</div>
	<div align="justify" class="checkbox">
		<label><input onchange="visualizar()" id="e11" type="checkbox" value="">E11</label> <span id="e11_span" style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
	</div>
	<div align="justify" class="checkbox">
		<label><input onchange="visualizar()" id="e12" type="checkbox" value="">E12</label> <span id="e12_span" style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
	</div>
	<div align="justify" class="checkbox">
		<label><input onchange="visualizar()" id="e13" type="checkbox" value="">E13</label> <span id="e13_span" style="display: none" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	</div>
	<div align="justify" class="checkbox">
		<label><input onchange="visualizar()" id="e14" type="checkbox" value="">E14</label> <span id="e14_span" style="display: none" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	</div>
	<div align="justify" class="checkbox">
		<label><input onchange="visualizar()" id="e15" type="checkbox" value="">E15</label> <span id="e15_span" style="display: none" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
	</div>
	<button onclick="validar_44()" type="button" class="btn btn-success">Validar</button>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>