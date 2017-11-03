<script type="text/javascript" charset="utf-8">
	function correcto() {
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
	}
	
	function error() {
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
	}
</script>
<div class="container-fluid">
	<p align="justify">Arrastra el rectangulo izquierdo y colocalo sobre el derecho para compararlos:</p>
	<br />
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_40.png" />
			<br />
			<p>Gune: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>40</mn><mo>%</mo><mo>=</mo><mfrac><mn>40</mn><mn>100</mn></mfrac></math></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img id="player_a"  class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_30.png" />
			<br />
			<p>Hilario: 3 de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>10</mn><mo>=</mo><mfrac><mn>3</mn><mn>10</mn></mfrac></math></p>
		</div>
	</div>
	<p align="justify">¿Quién es mejor?</p>
	<div class="radio">
		<label><input onclick="correcto()" type="radio" name="optradio">Gume</label>
	</div>
	<div class="radio">
		<label><input onclick="error()" type="radio" name="optradio">Hilario</label>
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