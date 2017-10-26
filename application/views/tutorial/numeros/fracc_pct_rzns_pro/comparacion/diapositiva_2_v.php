<script>
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
	<p align="justify">Cuando las fracciones tienen el mismo denominador, es fácil compararlas.</p>
	<p align="justify">Por ejemplo si tienes <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>5</mn></mfrac></math> y 	<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>5</mn></mfrac></math>, ¿cúal es mayor? En ambos casos estamos comparando <u>quintos</u>.</p>
	<p align="justify">Selecciona el botón adecuado para indicar si la fraccion de la izquierda es menor menor (<), mayor (>) o igual (=) que la fracción de la derecha.</p>
	<br />
	<h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>8</mn></mfrac><mo>&#xA0;</mo><mo>?</mo><mo>&#xA0;</mo><mfrac><mn>5</mn><mn>8</mn></mfrac></math></h1>
	<br />
	 <div class="btn-group" id="opciones">
	 	<button onclick="error()" type="button" class="btn btn-info"><</button>
	 	<button onclick="error()" type="button" class="btn btn-info">=</button>
	 	<button   onclick="correcto()" type="button" class="btn btn-info">></button>
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