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
		var operacion = document.getElementById("operacion").value;
		var incognita = document.getElementById('incognita').value;
		
		if (operacion == 1) {
			var numerador = 3*incognita;
			var denominador = 4*incognita;
			document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
		};
		if (operacion == 2) {
			var numerador = 3/incognita;
			var denominador = 4/incognita;
			document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
		};
		
	}
	
	function operacion () {
		var operacion = document.getElementById("operacion").value;
		console.log(operacion);
		if (operacion == 0) {
			document.getElementById("mostrar").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#x2299;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#x2299;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita">';
		};
		if (operacion == 1) {
			document.getElementById("mostrar").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita">';
		};
		if (operacion == 2) {
			document.getElementById("mostrar").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xF7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xF7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita">';
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Decide si las fracciones son equivalentes. Encuentra, si existe, el número por el cual se pueden multiplicar o dividir el numerador y denominador de una fracción para obtener la otra. Puedes probar con varios números antes de decidir.</p>
	 <div class="form-group col-xs-12 col-sm-6 col-lg-6">
	 	<label for="sel1">Quiero:</label>
	 	<select onchange="operacion()" id="operacion" class="form-control">
	 		<option value="0">Seleccione</option>
	 		<option value="1">Multiplicar</option>
	 		<option value="2">Dividir</option>
	 	</select>
	 </div>
	 <div class="col-xs-12 col-sm-12 col-lg-12">
	 	<h1 id="mostrar"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#x2299;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#x2299;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita"></h1>
		<h1 id="resultado"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>?</mo><mo>?</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math></h1>
		<p align="justify">¿Son equivalentes las fracciones?</p>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Si</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">No</label>
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
