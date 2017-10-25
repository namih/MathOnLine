<script type="text/javascript" charset="utf-8">
	
	var ia = 1;
	var ib = 1;
	var ic = 1;
	var id = 1;
	
	function validar() {
		var numerador = document.getElementById('numerador').value;
		var denominador = document.getElementById('denominador').value;
		console.log(numerador);
		console.log(denominador);
		if (numerador != "" && denominador != "") {
			if (numerador == 4 && denominador == 6) {
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
	
	function incrementar_a () {
		switch (ia) {
			case 1:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_a").innerHTML = "2";
				ia++;
				break;
			case 2:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_a").innerHTML = "3";
				ia++;
				break;
			case 3:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_a").innerHTML = "4";
				ia++;
				break;
			case 4:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_a").innerHTML = "5";
				ia++;
				break;
			case 5:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_a").innerHTML = "6";
				ia++;
				break;
			case 6:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_a").innerHTML = "7";
				ia++;
				break;
			case 7:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_a").innerHTML = "8";
				ia++;
				break;
			case 8:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_a").innerHTML = "9";
				ia++;
				break;
			case 9:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
				document.getElementById("valor_a").innerHTML = "10";
				ia++;
				break;
		}
	}
	
	function disminuir_a () {
		switch (ia) {
			case 10:
				document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_a").innerHTML = "9";
				ia--;
				break;
			case 9:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_a").innerHTML = "8";
				ia--;
				break;
			case 8:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_a").innerHTML = "7";
				ia--;
				break;
			case 7:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_a").innerHTML = "6";
				ia--;
				break;
			case 6:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_a").innerHTML = "5";
				ia--;
				break;
			case 5:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_a").innerHTML = "4";
				ia--;
				break;
			case 4:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_a").innerHTML = "3";
				ia--;
				break;
			case 3:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_a").innerHTML = "2";
				ia--;
				break;
			case 2:
				document.getElementById("baguette_a").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
				document.getElementById("valor_a").innerHTML = "1";
				ia--;
				break;
		}
	}
	
	function incrementar_b () {
		switch (ib) {
			case 1:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_b").innerHTML = "2";
				ib++;
				break;
			case 2:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_b").innerHTML = "3";
				ib++;
				break;
			case 3:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_b").innerHTML = "4";
				ib++;
				break;
			case 4:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_b").innerHTML = "5";
				ib++;
				break;
			case 5:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_b").innerHTML = "6";
				ib++;
				break;
			case 6:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_b").innerHTML = "7";
				ib++;
				break;
			case 7:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_b").innerHTML = "8";
				ib++;
				break;
			case 8:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_b").innerHTML = "9";
				ib++;
				break;
			case 9:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
				document.getElementById("valor_b").innerHTML = "10";
				ib++;
				break;
		}
	}
	
	function disminuir_b () {
		switch (ib) {
			case 10:
				document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_b").innerHTML = "9";
				ib--;
				break;
			case 9:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_b").innerHTML = "8";
				ib--;
				break;
			case 8:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_b").innerHTML = "7";
				ib--;
				break;
			case 7:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_b").innerHTML = "6";
				ib--;
				break;
			case 6:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_b").innerHTML = "5";
				ib--;
				break;
			case 5:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_b").innerHTML = "4";
				ib--;
				break;
			case 4:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_b").innerHTML = "3";
				ib--;
				break;
			case 3:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_b").innerHTML = "2";
				ib--;
				break;
			case 2:
				document.getElementById("baguette_b").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
				document.getElementById("valor_b").innerHTML = "1";
				ib--;
				break;
		}
	}
	
	function incrementar_c () {
		switch (ic) {
			case 1:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_c").innerHTML = "2";
				ic++;
				break;
			case 2:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_c").innerHTML = "3";
				ic++;
				break;
			case 3:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_c").innerHTML = "4";
				ic++;
				break;
			case 4:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_c").innerHTML = "5";
				ic++;
				break;
			case 5:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_c").innerHTML = "6";
				ic++;
				break;
			case 6:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_c").innerHTML = "7";
				ic++;
				break;
			case 7:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_c").innerHTML = "8";
				ic++;
				break;
			case 8:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_c").innerHTML = "9";
				ic++;
				break;
			case 9:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
				document.getElementById("valor_c").innerHTML = "10";
				ic++;
				break;
		}
	}
	
	function disminuir_c () {
		switch (ic) {
			case 10:
				document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_c").innerHTML = "9";
				ic--;
				break;
			case 9:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_c").innerHTML = "8";
				ic--;
				break;
			case 8:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_c").innerHTML = "7";
				ic--;
				break;
			case 7:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_c").innerHTML = "6";
				ic--;
				break;
			case 6:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_c").innerHTML = "5";
				ic--;
				break;
			case 5:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_c").innerHTML = "4";
				ic--;
				break;
			case 4:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_c").innerHTML = "3";
				ic--;
				break;
			case 3:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_c").innerHTML = "2";
				ic--;
				break;
			case 2:
				document.getElementById("baguette_c").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
				document.getElementById("valor_c").innerHTML = "1";
				ic--;
				break;
		}
	}
	
	function incrementar_d () {
		switch (id) {
			case 1:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_d").innerHTML = "2";
				id++;
				break;
			case 2:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_d").innerHTML = "3";
				id++;
				break;
			case 3:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_d").innerHTML = "4";
				id++;
				break;
			case 4:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_d").innerHTML = "5";
				id++;
				break;
			case 5:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_d").innerHTML = "6";
				id++;
				break;
			case 6:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_d").innerHTML = "7";
				id++;
				break;
			case 7:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_d").innerHTML = "8";
				id++;
				break;
			case 8:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_d").innerHTML = "9";
				id++;
				break;
			case 9:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
				document.getElementById("valor_d").innerHTML = "10";
				id++;
				break;
		}
	}
	
	function disminuir_d () {
		switch (id) {
			case 10:
				document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
				document.getElementById("valor_d").innerHTML = "9";
				id--;
				break;
			case 9:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
				document.getElementById("valor_d").innerHTML = "8";
				id--;
				break;
			case 8:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
				document.getElementById("valor_d").innerHTML = "7";
				id--;
				break;
			case 7:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
				document.getElementById("valor_d").innerHTML = "6";
				id--;
				break;
			case 6:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
				document.getElementById("valor_d").innerHTML = "5";
				id--;
				break;
			case 5:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
				document.getElementById("valor_d").innerHTML = "4";
				id--;
				break;
			case 4:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
				document.getElementById("valor_d").innerHTML = "3";
				id--;
				break;
			case 3:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
				document.getElementById("valor_d").innerHTML = "2";
				id--;
				break;
			case 2:
				document.getElementById("baguette_d").src = "<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
				document.getElementById("valor_d").innerHTML = "1";
				id--;
				break;
		}
	}
</script>

<div class="container-fluid">
	<p align="justify">Equipo 4</p>
	<p align="justify">Utiliza las flechas para dividir la baguette entre el número de partes iguales que creas necesarias. Después, escribe la fracción correspondiente que le toca a cada uno.</p>
	<p align="justify">Todos deben recibir la misma cantidad.</p>
	<br>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_a()" type="button" class="btn btn-info"><</button>
				<button id="valor_a" type="button" class="btn">1</button>
				<button onclick="incrementar_a()" type="button" class="btn btn-info">></button>
			</div>
			<br />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_b()" type="button" class="btn btn-warning"><</button>
				<button id="valor_b" type="button" class="btn">1</button>
				<button onclick="incrementar_b()" type="button" class="btn btn-warning">></button>
			</div>
			<br />
			<br />
			<img id="baguette_b" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_c()" type="button" class="btn btn-danger"><</button>
				<button id="valor_c" type="button" class="btn">1</button>
				<button onclick="incrementar_c()" type="button" class="btn btn-danger">></button>
			</div>
			<br />
			<br />
			<img id="baguette_c" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_d()" type="button" class="btn btn-success"><</button>
				<button id="valor_d" type="button" class="btn">1</button>
				<button onclick="incrementar_d()" type="button" class="btn btn-success">></button>
			</div>
			<br />
			<br />
			<img id="baguette_d" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<table>
				<tbody>
					<tr>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div>
		<p align="justify">A cada uno le toca <input onchange="validar()" size="1" type="text" id="numerador"> / <input onchange="validar()" size="1" type="text" id="denominador"> de baguette</p>
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
