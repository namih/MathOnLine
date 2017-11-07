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
		if (porcentaje == 66.6) {
			correcto();
		} else {
			error();
		};
	}
	function validar2 () {
		var porcentaje = document.getElementById('porcentaje2').value;
		if (porcentaje == 66.6) {
			document.getElementById('resultado').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mo>66.6</mo><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>66.6</mo><mo>&#xA0;</mo><mo>%</mo></math>';
			correcto();
		} else {
			error();
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Observa que, para encontrar el porcentaje equivalente a cualquier fracción, lo que hacemos es igualar dos razones obteniendo asi una proporción directa:</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>=</mo><mfrac><mi>x</mi><mn>100</mn></mfrac></math></p>
	<p align="justify">Para encontrar el término que falta (x), podemos usar la propiedad de la proporcionalidad o de la regla de tres. Si no recuerdas estos procedimientos consulta el tutorial de Proporcionaldiad directa. Utiliza las propiedades de la proporcionalidad, obtenemos la siguiente igualdad:</p>
	<p class="col-xs-6 col-sm-6 col-lg-6"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn><mo>(</mo><mn>100</mn><mo>)</mo></math></p>
	<p class="col-xs-6 col-sm-6 col-lg-6"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo><mfrac><mrow><mn>2</mn><mo>(</mo><mn>100</mn><mo>)</mo></mrow><mn>3</mn></mfrac></math></p>
	<p align="justify">Resuelve para obtener el porcentaje</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>=</mo><mfrac><mrow><mn>2</mn><mo>(</mo><mn>100</mn><mo>)</mo></mrow><mn>3</mn></mfrac><mo>=</mo></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="porcentaje"></p>
	<p align="justify">Entonces:</p>
	<p id="resultado"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mo>?</mo><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>?</mo><mo>&#xA0;</mo><mo>%</mo></math> <input placeholder="?" style="text-align: center" onchange="validar2()" size="1" type="text" id="porcentaje2"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>