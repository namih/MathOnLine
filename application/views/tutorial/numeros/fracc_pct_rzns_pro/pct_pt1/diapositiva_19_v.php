<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
		<p align="justify">Un jugador cuyos tiros hacia la portería son TODOS tiros a gol, tendría una puntuación de:</p>
		<div align="justify" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">a) 10%</label>
			</div>
			<div class="radio">
				<label><input onclick="correcto()" type="radio" name="optradio">b) 100%</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">c) 0%</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">d) 1%</label>
			</div
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