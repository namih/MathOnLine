<script type="text/javascript" charset="utf-8">
	var i = 0;
	
	function incrementar () {
	 console.log(i);
		switch (i) {
			case 0:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_10.png";
				document.getElementById("valor_a").innerHTML = "1";
				i++;
				break;
			case 1:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_20.png";
				document.getElementById("valor_a").innerHTML = "2";
				i++;
				break;
			case 2:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_30.png";
				document.getElementById("valor_a").innerHTML = "3";
				i++;
				break;
			case 3:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_40.png";
				document.getElementById("valor_a").innerHTML = "4";
				i++;
				break;
			case 4:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_50.png";
				document.getElementById("valor_a").innerHTML = "5";
				i++;
				break;
			case 5:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_60.png";
				document.getElementById("valor_a").innerHTML = "6";
				i++;
				break;
			case 6:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_70.png";
				document.getElementById("valor_a").innerHTML = "7";
				i++;
				break;
			case 7:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_80.png";
				document.getElementById("valor_a").innerHTML = "8";
				i++;
				break;
			case 8:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_90.png";
				document.getElementById("valor_a").innerHTML = "9";
				i++;
				break;
			case 9:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_100.png";
				document.getElementById("valor_a").innerHTML = "10";
				i++;
				break;
			}
	}
	
	function disminuir () {
	 console.log(i);
		switch (i) {
			case 1:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green.png";
				document.getElementById("valor_a").innerHTML = "0";
				i--;
				break;
			case 2:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_10.png";
				document.getElementById("valor_a").innerHTML = "1";
				i--;
				break;
			case 3:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_20.png";
				document.getElementById("valor_a").innerHTML = "2";
				i--;
				break;
			case 4:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_30.png";
				document.getElementById("valor_a").innerHTML = "3";
				i--;
				break;
			case 5:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_40.png";
				document.getElementById("valor_a").innerHTML = "4";
				i--;
				break;
			case 6:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_50.png";
				document.getElementById("valor_a").innerHTML = "5";
				i--;
				break;
			case 7:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_60.png";
				document.getElementById("valor_a").innerHTML = "6";
				i--;
				break;
			case 8:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_70.png";
				document.getElementById("valor_a").innerHTML = "7";
				i--;
				break;
			case 9:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_80.png";
				document.getElementById("valor_a").innerHTML = "8";
				i--;
				break;
			case 10:
				document.getElementById("player_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green_90.png";
				document.getElementById("valor_a").innerHTML = "9";
				i--;
				break;
			}
		}
</script>
<div class="container-fluid">
	<p align="justify">Sabemos también que, de cada 10 tiros que tira Hilario hacia la portería, 3 son tiros a gol. ¿Es mejor Hilario que Gume (quien tiene 40%)? Utiliza las flechas para sombrear la parte correspondiente a Hilario, suponiendo que el rectángulo representa el total de tiros hacia la porteria (100%)</p>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_40.png" />
		<br />
		<p>Gune: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>40</mn><mo>%</mo><mo>=</mo><mfrac><mn>40</mn><mn>100</mn></mfrac></math></p>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-6">
		<img id="player_a"  class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_green.png" />
		<br />
		<div class="btn-group" id="opciones">
			<button onclick="disminuir()" type="button" class="btn btn-info"><</button>
			<button id="valor_a" type="button" class="btn">0</button>
			<button onclick="incrementar()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<p>Hilario: 3 de cada <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>10</mn><mo>=</mo><mfrac><mn>3</mn><mn>10</mn></mfrac></math></p>
	</div>
</div>