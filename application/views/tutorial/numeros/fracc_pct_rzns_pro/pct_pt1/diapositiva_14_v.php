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
	
	function validar () {
		var porcentaje = document.getElementById('porcentaje').value;
		if (porcentaje == 52) {
			document.getElementById('resultado').innerHTML = ' Pablo: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>52</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>52</mn><mn>100</mn></mfrac><mo>=</mo><mn>52</mn><mo>%</mo></math>';
			correcto();
		} else {
			error();
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Escribe la inforamción de Pablo (0.52 tiros) como porcentaje. Para ello, observa que es posible escribir 0.52 como una fracción con denominador 100.</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_40.png" />
			<br />
			<p>Gune: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>40</mn><mo>%</mo><mo>=</mo><mfrac><mn>40</mn><mn>100</mn></mfrac></math></p>
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<img id="player_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_52.png" />
			<br />
			<p id="resultado">Pablo: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>52</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>52</mn><mn>100</mn></mfrac><mo>=</mo><mo>?</mo><mo>%</mo></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="porcentaje"></p>
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

