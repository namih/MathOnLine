<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">En la siguiente tabla tenemos los resultados de distintos grupos de alumnos. Completa la información que falta:</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Grupo</th>
						<th>Alumnos</th>
						<th>Aprobados</th>
						<th>Fracción de aprovados</th>
						<th>Porcentaje de aprovados</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>A</td>
						<td>43</td>
						<td>38</td>
						<td>0.883</td>
						<td><input style="text-align: center" size="5" type="text" id="grupo_a"></td>
					</tr>
					<tr>
						<td>B</td>
						<td>55</td>
						<td>49</td>
						<td>0.891</td>
						<td><input style="text-align: center" size="5" type="text" id="grupo_b"></td>
					</tr>
					<tr>
						<td>C</td>
						<td>56</td>
						<td>50</td>
						<td>0.893</td>
						<td><input style="text-align: center" size="5" type="text" id="grupo_c"></td>
					</tr>
					<tr>
						<td>D</td>
						<td>48</td>
						<td>37</td>
						<td>0.771</td>
						<td><input style="text-align: center" size="5" type="text" id="grupo_d"></td>
					</tr>
					<tr>
						<td>E</td>
						<td>52</td>
						<td>39</td>
						<td>0.75</td>
						<td><input style="text-align: center" size="5" type="text" id="grupo_e"></td>
					</tr>
				</tbody>
			</table>
			<button onclick="validar_3()" type="button" class="btn btn-success">Validar</button>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<p align="justify">¿Qué grupo tiene mejor aprovechamiento?</p>
			<div align="justify" class="radio">
				<label><input onclick="error()" type="radio" name="optradio">A</label>
			</div>
			<div align="justify" class="radio">
				<label><input onclick="error()" type="radio" name="optradio">B</label>
			</div>
			<div align="justify" class="radio">
				<label><input onclick="correcto()" type="radio" name="optradio">C</label>
			</div>
			<div align="justify" class="radio">
				<label><input onclick="error()" type="radio" name="optradio">D</label>
			</div>
			<div align="justify" class="radio">
				<label><input onclick="error()" type="radio" name="optradio">E</label>
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