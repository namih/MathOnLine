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
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x2.png";
				document.getElementById("valor").innerHTML = "2";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
				i++;
				break;
			case 2:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x3.png";
				document.getElementById("valor").innerHTML = "3";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
				i++;
				break;
			case 3:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x4.png";
				document.getElementById("valor").innerHTML = "4";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
				i++;
				break;
			case 4:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x5.png";
				document.getElementById("valor").innerHTML = "5";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
				i++;
				break;
			case 5:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x6.png";
				document.getElementById("valor").innerHTML = "6";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
				i++;
				break;
			case 6:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x7.png";
				document.getElementById("valor").innerHTML = "7";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';
				i++;
				break;
			case 7:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x8.png";
				document.getElementById("valor").innerHTML = "8";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
				i++;
				break;
			case 8:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x9.png";
				document.getElementById("valor").innerHTML = "9";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>18</mn><mn>27</mn></mfrac></math>';
				i++;
				break;
			case 9:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x10.png";
				document.getElementById("valor").innerHTML = "10";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>20</mn><mn>30</mn></mfrac></math>';
				i++;
				break;
		}
	}
	
	function disminuir() {
		console.log(i);
		switch (i) {
			case 10:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x9.png";
				document.getElementById("valor").innerHTML = "9";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>18</mn><mn>27</mn></mfrac></math>';
				i--;
				break;
			case 9:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x8.png";
				document.getElementById("valor").innerHTML = "8";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
				i--;
				break;
			case 8:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x7.png";
				document.getElementById("valor").innerHTML = "7";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';
				i--;
				break;
			case 7:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x6.png";
				document.getElementById("valor").innerHTML = "6";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
				i--;
				break;
			case 6:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x5.png";
				document.getElementById("valor").innerHTML = "5";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
				i--;
				break;
			case 5:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x4.png";
				document.getElementById("valor").innerHTML = "4";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
				i--;
				break;
			case 4:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x3.png";
				document.getElementById("valor").innerHTML = "3";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
				i--;
				break;
			case 3:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x2.png";
				document.getElementById("valor").innerHTML = "2";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
				i--;
				break;
			case 2:
				document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x1.png";
				document.getElementById("valor").innerHTML = "1";
				document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
				i--;
				break;
			
		}
	}
</script>
<div class="container-fluid">
	<p align="justify">Utiliza las flechas para encontrar fracciones equivalentes a <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></p>
	<div class="btn-group" id="opciones" class="col-xs-12 col-sm-12 col-lg-12">
		<button onclick="disminuir()" type="button" class="btn btn-info"><</button>
		<button id="valor" type="button" class="btn">1</button>
		<button onclick="incrementar()" type="button" class="btn btn-info">></button>
	</div>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios.png" />
		</div>
		<div class="col-xs-12 col-sm-6 col-lg-6">
			<br />
			<h1 id="fraccion_mathjax"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1>
		</div>
		<div class="col-xs-12 col-sm-3 col-lg-3">
			<img id="fraccion" width="65%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x1.png" />
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
