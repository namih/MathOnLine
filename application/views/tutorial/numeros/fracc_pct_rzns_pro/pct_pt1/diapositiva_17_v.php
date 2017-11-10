<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Como te habrás dado cuenta, la misma información puede expresarse en forma de porcentaje, decimal, fracción o razón. La siguien tabla muestra las puntuaciones para 5 jugadores, expresadas de distinta manera. Completa lo que falta.</p>
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Jugador</th>
					<th>Tiros a gol</th>
					<th>Tiros</th>
					<th>Goles/Tiros</th>
					<th>Decimal</th>
					<th>%</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Gune</td>
					<td>6</td>
					<td><input  style="text-align: center" size="5" type="text" id="gune_tiros"></td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="gune_goles"></td>
					<td><input  style="text-align: center" size="5" type="text" id="gune_decimal"></td>
					<td>40%</td>
				</tr>
				<tr>
					<td>Hilario</td>
					<td>3</td>
					<td>10</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="hilario_goles"></td>
					<td><input  style="text-align: center" size="5" type="text" id="hilario_decimal"></td>
					<td><input  style="text-align: center" size="5" type="text" id="hilario_pct">%</td>
				</tr>
				<tr>
					<td>Pablo</td>
					<td><input  style="text-align: center" size="5" type="text" id="pablo_tiros_gol"></td>
					<td>25</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="pablo_goles"></td>
					<td>0.52</td>
					<td><input  style="text-align: center" size="5" type="text" id="pablo_pct">%</td>
				</tr>
				<tr>
					<td>Mercurio</td>
					<td><input  style="text-align: center" size="5" type="text" id="mercurio_tiros_gol"></td>
					<td><input  style="text-align: center" size="5" type="text" id="mercurio_tiros"></td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>14</mn></mfrac></math></td>
					<td><input  style="text-align: center" size="5" type="text" id="mercurio_decimal"></td>
					<td><input  style="text-align: center" size="5" type="text" id="mercurio_pct">%</td>
				</tr>
				<tr>
					<td>Iván</td>
					<td><input  style="text-align: center" size="5" type="text" id="ivan_tiros_gol"></td>
					<td>20</td>
					<td><input placeholder="a/b" style="text-align: center" size="5" type="text" id="ivan_goles"></td>
					<td><input  style="text-align: center" size="5" type="text" id="ivan_decimal"></td>
					<td>35%</td>
				</tr>
			</tbody>
		</table>
		<button onclick="validar_17()" type="button" class="btn btn-success">Validar</button>
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