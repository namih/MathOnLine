<script type="text/javascript" charset="utf-8">
	var i = 1;
		
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
		
	function incrementar() {
		console.log(i);
		switch (i) {
			case 1:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x2.png";
				document.getElementById("valor").innerHTML = "2";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>14</mn></mfrac></math>';
				i++;
				break;
			case 2:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x3.png";
				document.getElementById("valor").innerHTML = "3";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';
				i++;
				break;
			case 3:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x4.png";
				document.getElementById("valor").innerHTML = "4";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math>';
				i++;
				break;
			case 4:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x5.png";
				document.getElementById("valor").innerHTML = "5";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>35</mn></mfrac></math>';
				i++;
				break;
			case 5:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x6.png";
				document.getElementById("valor").innerHTML = "6";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>42</mn></mfrac></math>';
				i++;
				break;
			case 6:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x7.png";
				document.getElementById("valor").innerHTML = "7";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>49</mn></mfrac></math>';
				i++;
				break;
		}
	}
	
	function disminuir() {
		console.log(i);
		switch (i) {
			case 7:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x6.png";
				document.getElementById("valor").innerHTML = "6";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>42</mn></mfrac></math>';
				i--;
				break;
			case 6:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x5.png";
				document.getElementById("valor").innerHTML = "5";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>35</mn></mfrac></math>';
				i--;
				break;
			case 5:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x4.png";
				document.getElementById("valor").innerHTML = "4";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math>';
				i--;
				break;
			case 4:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x3.png";
				document.getElementById("valor").innerHTML = "3";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';
				i--;
				break;
			case 3:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x2.png";
				document.getElementById("valor").innerHTML = "2";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>14</mn></mfrac></math>';
				i--;
				break;
			case 2:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x1.png";
				document.getElementById("valor").innerHTML = "1";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>7</mn></mfrac></math>';
				i--;
				break;
		}
	}
</script>
<div class="container-fluid">
	<p align="justify">Al multiplicar o dividir el numerador y el denominador de una fracción por el mismo número, obtienes una fracción equivalente. Usa las flechas para aumentar el número y observa lo que sucede en la representación gráfica de la fracción que resulta.</p>
	<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="disminuir()" type="button" class="btn btn-info"><</button>
		<button id="valor" type="button" class="btn">1</button>
		<button onclick="incrementar()" type="button" class="btn btn-info">></button>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos.png" />
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<br />
			<h1 id="fraccion_mathjax"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>7</mn></mfrac></math></h1>
		</div>
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img id="fraccion" width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x1.png" />
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<p align="justify">¿Qué sucede, al multiplicar por un número mayor que uno, con el número de partes en la que está dividido el entero?</p>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Aumenta</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Disminuye</label>
		</div>
		<p align="justify">¿Qué sucede, al multiplicar por un número mayor que uno, con el número de partes sombreadas?</p>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">Aumenta</label>
		</div>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Disminuye</label>
		</div>
	</div>
</div>
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>
