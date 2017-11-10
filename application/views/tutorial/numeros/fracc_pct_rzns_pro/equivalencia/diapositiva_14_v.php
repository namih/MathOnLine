<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">¿Son equivalentes las dos fracciones? Puedes arrastrar la figura de la derecha hacia la izquierda</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-6 col-sm-6 col-lg-6">
			<img width="35%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_medio.png" />
			<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h4>
		</div>
		<div style="margin-bottom: 20px" class="col-xs-6 col-sm-6 col-lg-6">
			<img width="35%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_sextos.png" />
			<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>6</mn></mfrac></math></h4>
		</div>
	</div>
	<div>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Si son equivanetes</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">No son equivalentes</label>
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
</div>
