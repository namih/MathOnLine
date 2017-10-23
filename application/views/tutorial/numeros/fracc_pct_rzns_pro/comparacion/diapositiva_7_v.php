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
	
	function fraction_left () {
		var x = document.getElementById('var_x').value;
		var num_x = x * 1;
		var den_x = x * 5;
		document.getElementById('equation_l').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>'+x+'</mi><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mi>'+x+'</mi><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>'+num_x+'</mi><mi>'+den_x+'</mi></mfrac></math>';
	}
	function fraction_right () {
		var y = document.getElementById('var_y').value;
		var num_y = y * 2;
		var den_y = y * 4;
		document.getElementById('equation_r').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>'+num_y+'</mi><mi>'+den_y+'</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mi>'+y+'</mi></mstyle><mstyle displaystyle="true"><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mi>'+y+'</mi></mstyle></mfrac></math>';
	}
</script>
<div class="container-fluid">
	<p align="justify">Por último veamos qué sucede cuando las fracciones que estamos comparando tienen diferente numerador y diferende denominador.</p>
	<p align="justify">Para comparar las fracciones, conviértelas en fracciones equivalentes con el mismo denominador de manera que las partes en las que cada entero está divido sean del mismo tamaño.</p> 
	<p align="justify">Después, selecciona el botón adecuado para indicar si la fracción de la izquierda es menor (<), mayor (>) o igual (=) que la fracción de la derecha.</p>
	<br />
	<h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>5</mn></mfrac><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>?</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mfrac><mn>2</mn><mn>4</mn></mfrac></math></h1>
	<br />
	<div class="col-xs-6 col-sm-6 col-lg-6">
	 	<p id="equation_l" ><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>1</mn><mn>5</mn></mfrac></math></p>
	 	<input onchange="fraction_left()" type="number" class="form-control" placeholder="X" id="var_x">
	 </div>
	 <div class="col-xs-6 col-sm-6 col-lg-6">
	 	<p id="equation_r"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mstyle><mstyle displaystyle="true"><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mstyle></mfrac></math></p>
	 	<input onchange="fraction_right()" type="number" class="form-control" placeholder="Y" id="var_y">
	 </div>
	<br />
	<br />
	<br />
	<br />
	<br />
	 <div class="btn-group" id="opciones">
	 	<button onclick="correcto()" type="button" class="btn btn-info"><</button>
	 	<button onclick="error()" type="button" class="btn btn-info">=</button>
	 	<button onclick="error()" type="button" class="btn btn-info">></button>
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