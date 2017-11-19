<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">Pablo pesa 40% más que Tere. ¿Es cierto que Tere pesa 40% menos que Pablo?</p>
	<div align="justify" class="radio">
		<label><input onclick="error()" type="radio" name="optradio">Si</label>
	</div>
	<div align="justify" class="radio">
		<label><input onclick="correcto()" type="radio" name="optradio">No</label>
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