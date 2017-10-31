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
		var incognita = document.getElementById('incognita').value;
		var numerador = 3*incognita;
		var denominador = 4*incognita;
		document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
	}
</script>
<div class="container-fluid">
	<p align="justify">Decide si las fracciones son equivalentes. Encuentra, si existe, el número por el cual se pueden multiplicar el numerador y denominador de una fracción para obtener la otra. Puedes probar con varios números antes de decidir.</p>
	<h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita"></h1>
	<h1 id="resultado"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>?</mo><mo>?</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math></h1>
	<p align="justify">¿Son equivalentes las fracciones?</p>
	<div class="radio">
		<label><input onclick="error()" type="radio" name="optradio">Si</label>
	</div>
	<div class="radio">
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
