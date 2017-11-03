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
		if (porcentaje == 50) {
			document.getElementById('resultado').innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mo>50</mo><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>50</mo><mo>&#xA0;</mo><mo>%</mo></math>';
			correcto();
		} else {
			error();
		};
	}
	
	var i = 1;
	
	function incrementar () {
	 console.log(i);
		switch (i) {
			case 0:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_10_20.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>20</mn></mfrac></math>';
				i++;
				break;
			case 1:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_20_40.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>20</mn><mn>40</mn></mfrac></math>';
				i++;
				break;
			case 2:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_30_60.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>30</mn><mn>60</mn></mfrac></math>';
				i++;
				break;
			case 3:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_40_80.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>40</mn><mn>80</mn></mfrac></math>';
				i++;
				break;
			case 4:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_50_100.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>50</mn><mn>100</mn></mfrac></math>';
				i++;
				break;
			case 5:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_60_120.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>60</mn><mn>120</mn></mfrac></math>';
				i++;
				break;
			case 6:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_70_140.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>70</mn><mn>140</mn></mfrac></math>';
				i++;
				break;
			case 7:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_80_160.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>80</mn><mn>160</mn></mfrac></math>';
				i++;
				break;
			case 8:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_90_180.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>90</mn><mn>180</mn></mfrac></math>';
				i++;
				break;
			case 9:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_100_200.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>100</mn><mn>200</mn></mfrac></math>';
				i++;
				break;
			}
	}
	
	function disminuir () {
	 console.log(i);
		switch (i) {
			case 1:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_1_2.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math>';
				i--;
				break;
			case 2:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_10_20.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>20</mn></mfrac></math>';
				i--;
				break;
			case 3:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_20_40.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>20</mn><mn>40</mn></mfrac></math>';
				i--;
				break;
			case 4:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_30_60.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>30</mn><mn>60</mn></mfrac></math>';
				i--;
				break;
			case 5:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_20_40.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>20</mn><mn>40</mn></mfrac></math>';
				i--;
				break;
			case 6:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_50_100.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>50</mn><mn>100</mn></mfrac></math>';
				i--;
				break;
			case 7:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_60_120.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>60</mn><mn>120</mn></mfrac></math>';
				i--;
				break;
			case 8:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_70_140.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>70</mn><mn>140</mn></mfrac></math>';
				i--;
				break;
			case 9:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_80_160.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>80</mn><mn>160</mn></mfrac></math>';
				i--;
				break;
			case 10:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_90_180.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>90</mn><mn>180</mn></mfrac></math>';
				i--;
				break;
			}
		}
</script>
<div class="container-fluid">
	<p align="justify">Escribe la fracción como porcentaje. Para ello, utiliza las flechas parar encontrar una fracción equivalente a la fracción dada, con denominador 100. Observa como cambia la representación gráfica. Si no recuerda lo que es una fracción equivalente, consulta el tutorial de Equivalencia.</p>
	<br />
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<h3 id="fraccion"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h3>
		<div class="btn-group" id="opciones">
			<button onclick="disminuir()" type="button" class="btn btn-info"><</button>
			<button onclick="incrementar()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<img id="player_a" width="50%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_1_2.png" />
	</div>
	<div>
	  <h3 id="resultado" align="justify"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mo>?</mo><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>?</mo><mo>&#xA0;</mo><mo>%</mo></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="porcentaje"></h3>
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