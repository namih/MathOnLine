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
		var numerador = document.getElementById('numerador').value;
		var denominador = document.getElementById('denominador').value;
		if (porcentaje == 45 && numerador == 9 && denominador == 20) {
			document.getElementById('resultado').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>45</mn><mo>%</mo><mo>=</mo><mfrac><mn>45</mn><mn>100</mn></mfrac><mo>=</mo><mfrac><mn>9</mn><mn>20</mn></mfrac></math>';
			correcto();
		} else {
			error();
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Escribe el porcentaje como fracción. Simplifica cuando sea posible</p>
	<h3 id="resultado"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>45</mn><mo>%</mo><mo>=</mo><mfrac><mo>?</mo><mn>100</mn></mfrac><mo>=</mo><mfrac><mrow><mi>N</mi><mi>u</mi><mi>m</mi></mrow><mrow><mi>D</mi><mi>e</mi><mi>n</mi></mrow></mfrac></math></h3>
	<p align="justify">Escribe los valores en sus respectivos lugares:</p>
	<p><input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="porcentaje">   <input placeholder="Num" style="text-align: center" onchange="validar()" size="1" type="text" id="numerador">   <input placeholder="Den" style="text-align: center" onchange="validar()" size="1" type="text" id="denominador"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>