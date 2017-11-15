<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">El grupo A tiene 43 alumnos de los cuales 38 aprobaron un examen.</p>
	<p align="justify">El grupo B tiene 55 alumnos y 49 aprobaron el mismo examen.</p>
	<p align="justify">Escribe el porcentaje de alumnos que aprobaron el examen en cada grupo</p>
	<p align="justify">A: <input onchange="validar_2_a()" style="text-align: center" size="5" type="text" id="grupo_a"> %</p>
	<p align="justify">B: <input onchange="validar_2_b()" style="text-align: center" size="5" type="text" id="grupo_b"> %</p>
	<p align="justify">NOTA: La respuesta debes debes de encontrarla con calculadora, redondeando a 2 lugares decimales</p>
	<p align="justify">¿Qué grupo tiene mejor aprovechamiento?</p>
	<div align="justify" class="radio">
		<label><input onclick="error()" type="radio" name="optradio">A</label>
	</div>
	<div align="justify" class="radio">
		<label><input onclick="correcto()" type="radio" name="optradio">B</label>
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