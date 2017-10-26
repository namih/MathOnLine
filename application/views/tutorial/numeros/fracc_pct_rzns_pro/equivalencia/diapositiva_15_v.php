<script type="text/javascript" charset="utf-8">
	var i = 0;
	
	var correcta;
	
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
	
	function incrementar () {
		console.log(i);
		switch (i) {
			case 0:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_1.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 1:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_2.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 2:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_3.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 3:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_4.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 4:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_5.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 5:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_6.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 6:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_7.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 7:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_8.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 8:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_9.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>21</mn></mfrac></math>';
				correcta = true;
				i++;
				break;
			case 9:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_10.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 10:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_11.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 11:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_12.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 12:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_13.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 13:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_14.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 14:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_15.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 15:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_16.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 16:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_17.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>17</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 17:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_18.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 18:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_19.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>19</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 19:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_20.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
			case 20:
				document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_21.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>21</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i++;
				break;
		}
	}
	
	function disminuir () {
		console.log(i);
		switch (i) {
			case 21:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_20.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 20:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_19.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>19</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 19:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_18.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 18:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_17.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>17</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 17:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_16.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 16:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_15.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 15:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_14.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 14:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_13.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 13:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_12.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 12:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_11.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 11:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_10.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 10:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_9.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>21</mn></mfrac></math>'
				correcta = true;
				i--;
				break;
			case 9:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_8.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 8:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_7.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 7:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_6.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 6:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_5.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 5:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_4.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 4:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_3.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 3:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_2.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 2:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_1.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
			case 1:
				document.getElementById("veintiuno").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno.png";
				document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math>'
				correcta = false;
				i--;
				break;
		}
	}
	function verificar () {
		if (correcta == true) {
			document.getElementById("desigualdad").innerHTML = ' = ';
			$('#correcta').show();
			$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
				$("#correcta").slideUp(500);
			});
		} else{
			document.getElementById("desigualdad").innerHTML = '>';
			$('#error').show();
			$("#error").fadeTo(2000, 500).slideUp(500, function(){
				$("#error").slideUp(500);
			});
		};
	}
</script>
<div class="container-fluid">
	<p align="justify">Encuentra la fracción equivalente a <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math>. Puedes arrastrar la figura de la derecha hacia la izquierda.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-6 col-sm-6 col-lg-6">
			<img width="35%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_septimos.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-6 col-sm-6 col-lg-6">
			<img id="veintiuno" width="35%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno.png" />
			<div class="btn-group" id="opciones">
				<button onclick="disminuir()" type="button" class="btn btn-warning"><</button>
				<button onclick="incrementar()" type="button" class="btn btn-warning">></button>
			</div>
		</div>
	</div>
	<div>
		<h3 style="display: inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math></h3><h3 id="desigualdad" style="display: inline"> > </h3><h3 id="fraccion" style="display: inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math></h3></p>
		<button onclick="verificar()" type="button" class="btn btn-success">Verificar</button>
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
