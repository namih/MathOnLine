<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
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
					<td>15</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>15</mn></mfrac></math></td>
					<td>0.4</td>
					<td>40</td>
				</tr>
				<tr>
					<td>Hilario</td>
					<td>3</td>
					<td>10</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>10</mn></mfrac></math></td>
					<td>0.3</td>
					<td>30%</td>
				</tr>
				<tr>
					<td>Pablo</td>
					<td>13</td>
					<td>25</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>25</mn></mfrac></math></td>
					<td>0.52</td>
					<td>52%</td>
				</tr>
				<tr>
					<td>Mercurio</td>
					<td>4</td>
					<td>14</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>14</mn></mfrac></math></td>
					<td>0.286</td>
					<td>28.60%</td>
				</tr>
				<tr>
					<td>Iván</td>
					<td>7</td>
					<td>20</td>
					<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>20</mn></mfrac></math></td>
					<td>0.35</td>
					<td>35%</td>
				</tr>
			</tbody>
		</table>
		<p align="justify">Según esta información. ¿Quién es el mejor jugador?</p>
		<div align="justify" class="col-xs-12 col-sm-12 col-lg-12">
		  <div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Gume</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Hilario</label>
		</div>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Pablo</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Mercurio</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Iván</label>
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