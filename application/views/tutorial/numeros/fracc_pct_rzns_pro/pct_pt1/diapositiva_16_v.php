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
	
	function validar() {
		var porcentaje = document.getElementById('porcentaje').value;
		if (porcentaje == 82) {
			document.getElementById('resultado').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>82</mn><mo>%</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>82</mn><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn><mo>.</mo><mn>82</mn></math>';
			correcto();
		} else {
			error();
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Escribe el número decimal como porcentaje.</p>
	<img width="50%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_82.png" />
	<h3 id="resultado"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>82</mn><mo>%</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mo>?</mo><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn><mo>.</mo><mo>?</mo></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="porcentaje"></h3>	
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>