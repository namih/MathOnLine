<script type="text/javascript" charset="utf-8">
	
	var i = 1;
	
	function validar() {
		var numerador = document.getElementById('numerador').value;
		var denominador = document.getElementById('denominador').value;
		console.log(numerador);
		console.log(denominador);
		if (numerador != "" && denominador != "") {
			if (numerador == 1 && denominador == 2) {
				$('#correcta').show();
				$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
					$("#correcta").slideUp(500);
				});
			} else {
				$('#error').show();
				$("#error").fadeTo(2000, 500).slideUp(500, function(){
					$("#error").slideUp(500);
				});
			}
		}
	}
	
	function incrementar () {
		console.log(i);
		switch (i) {
			case 1:
				document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor").innerHTML = "2";
				i++;
				break;
			case 2:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor").innerHTML = "3";
				i++;
				break;
			case 3:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor").innerHTML = "4";
				i++;
				break;
			case 4:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor").innerHTML = "5";
				i++;
				break;
			case 5:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor").innerHTML = "6";
				i++;
				break;
			case 6:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor").innerHTML = "7";
				i++;
				break;
			case 7:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor").innerHTML = "8";
				i++;
				break;
			case 8:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor").innerHTML = "9";
				i++;
				break;
			case 9:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
				document.getElementById("valor").innerHTML = "10";
				i++;
				break;
		}
	}
	
	function disminuir () {
		console.log(i);
		switch (i) {
			case 10:
				document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor").innerHTML = "9";
				i--;
				break;
			case 9:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor").innerHTML = "8";
				i--;
				break;
			case 8:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor").innerHTML = "7";
				i--;
				break;
			case 7:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor").innerHTML = "6";
				i--;
				break;
			case 6:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor").innerHTML = "5";
				i--;
				break;
			case 5:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor").innerHTML = "4";
				i--;
				break;
			case 4:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor").innerHTML = "3";
				i--;
				break;
			case 3:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor").innerHTML = "2";
				i--;
				break;
			case 2:
				document.getElementById("baguette").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
				document.getElementById("valor").innerHTML = "1";
				i--;
				break;
		}
	}
</script>

<div class="container-fluid">
	<p align="justify">Equipo 1</p>
	<p align="justify">Utiliza las flechas para dividir la baguette entre el número de partes iguales que creas necesarias. Después, escribe la fracción correspondiente que le toca a cada uno.</p>
	<p align="justify">Todos deben recibir la misma cantidad.</p>
	<br>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-6 col-sm-6 col-lg-6">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir()" type="button" class="btn btn-info"><</button>
				<button id="valor" type="button" class="btn">1</button>
				<button onclick="incrementar()" type="button" class="btn btn-info">></button>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-lg-6">
			<img id="baguette" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
			<br />
			<div class="col-xs-12 col-sm-12 col-lg-12">
				<table>
					<tbody>
						<tr>
							<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
							<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	<br />
	<p align="justify">A cada uno le toca <input onchange="validar()" size="1" type="text" id="numerador"> / <input onchange="validar()" size="1" type="text" id="denominador"> de baguette</p>
	<p align="justify">Si este ejercicio te resulta dificil, necesitas repasar la representación de fracciones.</p>
	 <br />
	 <br />		
	 <div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 </div>
	 <div id="error" style="display: none" class="alert alert-warning">
	 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 </div>
</div>
