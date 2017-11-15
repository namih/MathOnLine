<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">Supongamos que Tere pesa 60 kilos.</p>
	<p align="justify">Si Pablo pesa 40% más, ¿Cuánto pesa Pablo? <input onchange="validar_17_a()" style="text-align: center" size="5" type="text" id="peso_pablo"> Kg.</p>
	<p align="justify">Calcula ahora el 40% del peso de Pablo: <input onchange="validar_17_b()" style="text-align: center" size="5" type="text" id="porcentaje_pablo"> Kg.</p>
	<p align="justify">Resta esta cantidad al peso de Pablo, para calcular el peso de Tere si fuera 40% menos que el de Pablo <input onchange="validar_17_c()" style="text-align: center" size="5" type="text" id="peso_tere"> Kg.</p>
	<p align="justify">¿Es cierto que Tere pesa 40% menos que Pablo?</p>
	<div align="justify" class="radio">
		<label><input onclick="error()" type="radio" name="optradio">Si</label>
	</div>
	<div align="justify" class="radio">
		<label><input onclick="correcto()" type="radio" name="optradio">No</label>
	</div>
	<p align="justify">Observa que, el 40% no se toma con respecto al mismo número y por lo tanto las cantidades no coinciden.</p>
</div>
<br />
<br />
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>