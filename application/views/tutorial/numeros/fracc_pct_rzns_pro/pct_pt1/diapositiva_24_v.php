<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
		<p align="justify">Observa los siguientes estacionamientos E1 y E2. Las celdas rojas indican lugares ocupados y las blancas lugares desocupados.</p>
		<div class="col-xs-12 col-sm-12 col-lg-12">
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-4 col-lg-4">
		  	<p>E3</p>
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e3.png" />
		  </div>
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-8 col-lg-8">
		  	<p>E4</p>
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e4.png" />
		  </div>
		</div>
		<p align="justify">¿Cuál crees que está más lleno?</p>
		<div align="justify" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">E3</label>
			</div>
			<div class="radio">
				<label><input onclick="correcto()" type="radio" name="optradio">E4</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">Iguales</label>
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