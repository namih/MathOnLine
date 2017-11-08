<script type="text/javascript" charset="utf-8">

	var ia = 0;
	var ib = 0;
	
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
		var e1 = document.getElementById('parking_e1').value;
		var e2 = document.getElementById('parking_e2').value;
		
		if (e1 !="" && e2 !="") {
			if (e1 == 75 && e2 == 80) {
				correcto();
			} else{
				error();
			};
		};
	}
	
	function incrementar_a () {
		switch (ia) {
			case 0:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_5.png";
				document.getElementById("valor_a").innerHTML = "5%";
				ia++;
				break;
			case 1:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_10.png";
				document.getElementById("valor_a").innerHTML = "10%";
				ia++;
				break;
			case 2:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_15.png";
				document.getElementById("valor_a").innerHTML = "15%";
				ia++;
				break;
			case 3:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_20.png";
				document.getElementById("valor_a").innerHTML = "20%";
				ia++;
				break;
			case 4:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_25.png";
				document.getElementById("valor_a").innerHTML = "25%";
				ia++;
				break;
			case 5:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_30.png";
				document.getElementById("valor_a").innerHTML = "30%";
				ia++;
				break;
			case 6:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_35.png";
				document.getElementById("valor_a").innerHTML = "35%";
				ia++;
				break;
			case 7:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_40.png";
				document.getElementById("valor_a").innerHTML = "40%";
				ia++;
				break;
			case 8:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_45.png";
				document.getElementById("valor_a").innerHTML = "45%";
				ia++;
				break;
			case 9:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_50.png";
				document.getElementById("valor_a").innerHTML = "50%";
				ia++;
				break;
			case 10:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_55.png";
				document.getElementById("valor_a").innerHTML = "55%";
				ia++;
				break;
			case 11:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_60.png";
				document.getElementById("valor_a").innerHTML = "60%";
				ia++;
				break;
			case 12:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_65.png";
				document.getElementById("valor_a").innerHTML = "65%";
				ia++;
				break;
			case 13:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_70.png";
				document.getElementById("valor_a").innerHTML = "70%";
				ia++;
				break;
			case 14:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_75.png";
				document.getElementById("valor_a").innerHTML = "75%";
				ia++;
				break;
			case 15:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_80.png";
				document.getElementById("valor_a").innerHTML = "80%";
				ia++;
				break;
			case 16:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_85.png";
				document.getElementById("valor_a").innerHTML = "85%";
				ia++;
				break;
			case 17:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_90.png";
				document.getElementById("valor_a").innerHTML = "90%";
				ia++;
				break;
			case 18:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_95.png";
				document.getElementById("valor_a").innerHTML = "95%";
				ia++;
				break;
			case 19:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_100.png";
				document.getElementById("valor_a").innerHTML = "100%";
				ia++;
				break;
		}
	}
	
	function disminuir_a () {
		switch (ia) {
			case 1:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_clean.png";
				document.getElementById("valor_a").innerHTML = "0%";
				ia--;
				break;
			case 2:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_5.png";
				document.getElementById("valor_a").innerHTML = "5%";
				ia--;
				break;
			case 3:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_10.png";
				document.getElementById("valor_a").innerHTML = "10%";
				ia--;
				break;
			case 4:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_15.png";
				document.getElementById("valor_a").innerHTML = "15%";
				ia--;
				break;
			case 5:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_20.png";
				document.getElementById("valor_a").innerHTML = "20%";
				ia--;
				break;
			case 6:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_25.png";
				document.getElementById("valor_a").innerHTML = "25%";
				ia--;
				break;
			case 7:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_30.png";
				document.getElementById("valor_a").innerHTML = "30%";
				ia--;
				break;
			case 8:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_35.png";
				document.getElementById("valor_a").innerHTML = "35%";
				ia--;
				break;
			case 9:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_40.png";
				document.getElementById("valor_a").innerHTML = "40%";
				ia--;
				break;
			case 10:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_45.png";
				document.getElementById("valor_a").innerHTML = "45%";
				ia--;
				break;
			case 11:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_50.png";
				document.getElementById("valor_a").innerHTML = "50%";
				ia--;
				break;
			case 12:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_55.png";
				document.getElementById("valor_a").innerHTML = "55%";
				ia--;
				break;
			case 13:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_60.png";
				document.getElementById("valor_a").innerHTML = "60%";
				ia--;
				break;
			case 14:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_65.png";
				document.getElementById("valor_a").innerHTML = "65%";
				ia--;
				break;
			case 15:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_70.png";
				document.getElementById("valor_a").innerHTML = "70%";
				ia--;
				break;
			case 16:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_75.png";
				document.getElementById("valor_a").innerHTML = "75%";
				ia--;
				break;
			case 17:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_80.png";
				document.getElementById("valor_a").innerHTML = "80%";
				ia--;
				break;
			case 18:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_85.png";
				document.getElementById("valor_a").innerHTML = "85%";
				ia--;
				break;
			case 19:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_90.png";
				document.getElementById("valor_a").innerHTML = "90%";
				ia--;
				break;
			case 20:
				document.getElementById("percent_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_blue_95.png";
				document.getElementById("valor_a").innerHTML = "95%";
				ia--;
				break;
		}
	}
	
	function incrementar_b () {
		switch (ib) {
			case 0:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_5.png";
				document.getElementById("valor_b").innerHTML = "5%";
				ib++;
				break;
			case 1:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_10.png";
				document.getElementById("valor_b").innerHTML = "10%";
				ib++;
				break;
			case 2:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_15.png";
				document.getElementById("valor_b").innerHTML = "15%";
				ib++;
				break;
			case 3:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_20.png";
				document.getElementById("valor_b").innerHTML = "20%";
				ib++;
				break;
			case 4:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_25.png";
				document.getElementById("valor_b").innerHTML = "25%";
				ib++;
				break;
			case 5:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_30.png";
				document.getElementById("valor_b").innerHTML = "30%";
				ib++;
				break;
			case 6:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_35.png";
				document.getElementById("valor_b").innerHTML = "35%";
				ib++;
				break;
			case 7:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_40.png";
				document.getElementById("valor_b").innerHTML = "40%";
				ib++;
				break;
			case 8:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_45.png";
				document.getElementById("valor_b").innerHTML = "45%";
				ib++;
				break;
			case 9:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_50.png";
				document.getElementById("valor_b").innerHTML = "50%";
				ib++;
				break;
			case 10:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_55.png";
				document.getElementById("valor_b").innerHTML = "55%";
				ib++;
				break;
			case 11:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_60.png";
				document.getElementById("valor_b").innerHTML = "60%";
				ib++;
				break;
			case 12:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_65.png";
				document.getElementById("valor_b").innerHTML = "65%";
				ib++;
				break;
			case 13:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_70.png";
				document.getElementById("valor_b").innerHTML = "70%";
				ib++;
				break;
			case 14:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_75.png";
				document.getElementById("valor_b").innerHTML = "75%";
				ib++;
				break;
			case 15:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_80.png";
				document.getElementById("valor_b").innerHTML = "80%";
				ib++;
				break;
			case 16:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_85.png";
				document.getElementById("valor_b").innerHTML = "85%";
				ib++;
				break;
			case 17:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_90.png";
				document.getElementById("valor_b").innerHTML = "90%";
				ib++;
				break;
			case 18:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_95.png";
				document.getElementById("valor_b").innerHTML = "95%";
				ib++;
				break;
			case 19:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_100.png";
				document.getElementById("valor_b").innerHTML = "100%";
				ib++;
				break;
		}
	}
	
	function disminuir_b () {
		switch (ib) {
			case 1:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_clean.png";
				document.getElementById("valor_b").innerHTML = "0%";
				ib--;
				break;
			case 2:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_5.png";
				document.getElementById("valor_b").innerHTML = "5%";
				ib--;
				break;
			case 3:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_10.png";
				document.getElementById("valor_b").innerHTML = "10%";
				ib--;
				break;
			case 4:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_15.png";
				document.getElementById("valor_b").innerHTML = "15%";
				ib--;
				break;
			case 5:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_20.png";
				document.getElementById("valor_b").innerHTML = "20%";
				ib--;
				break;
			case 6:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_25.png";
				document.getElementById("valor_b").innerHTML = "25%";
				ib--;
				break;
			case 7:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_30.png";
				document.getElementById("valor_b").innerHTML = "30%";
				ib--;
				break;
			case 8:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_35.png";
				document.getElementById("valor_b").innerHTML = "35%";
				ib--;
				break;
			case 9:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_40.png";
				document.getElementById("valor_b").innerHTML = "40%";
				ib--;
				break;
			case 10:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_45.png";
				document.getElementById("valor_b").innerHTML = "45%";
				ib--;
				break;
			case 11:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_50.png";
				document.getElementById("valor_b").innerHTML = "50%";
				ib--;
				break;
			case 12:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_55.png";
				document.getElementById("valor_b").innerHTML = "55%";
				ib--;
				break;
			case 13:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_60.png";
				document.getElementById("valor_b").innerHTML = "60%";
				ib--;
				break;
			case 14:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_65.png";
				document.getElementById("valor_b").innerHTML = "65%";
				ib--;
				break;
			case 15:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_70.png";
				document.getElementById("valor_b").innerHTML = "70%";
				ib--;
				break;
			case 16:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_75.png";
				document.getElementById("valor_b").innerHTML = "75%";
				ib--;
				break;
			case 17:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_80.png";
				document.getElementById("valor_b").innerHTML = "80%";
				ib--;
				break;
			case 18:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_85.png";
				document.getElementById("valor_b").innerHTML = "85%";
				ib--;
				break;
			case 19:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_90.png";
				document.getElementById("valor_b").innerHTML = "90%";
				ib--;
				break;
			case 20:
				document.getElementById("percent_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_orange_95.png";
				document.getElementById("valor_b").innerHTML = "95%";
				ib--;
				break;
		}
	}
</script>
<div class="container-fluid">
	<p align="justify">Basándose en la información de la tabla, utiliza las flechas para llenar las barras de manera que reflejen la parte llena de cada estacionamiento.</p>
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th></th>
						<th>E1</th>
						<th>E2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Número de espacios</td>
						<td>40</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Número de espacios ocupados</td>
						<td>30</td>
						<td>40</td>
					</tr>
					<tr>
						<td>Número de espacios disponibles</td>
						<td>10</td>
						<td>10</td>
					</tr>
					<tr>
						<td>Fracción de espacios ocupados</td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>30</mn><mn>40</mn></mfrac></math></td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>40</mn><mn>50</mn></mfrac></math></td>
					</tr>
					<tr>
						<td>Fracción de espacios disponibles</td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>40</mn></mfrac></math></td>
						<td><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>50</mn></mfrac></math></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xs-12 col-sm-12 col-lg-12">
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
		  	<div class="btn-group" id="opciones">
				<button onclick="disminuir_a()" type="button" class="btn btn-primary"><</button>
				<button id="valor_a" type="button" class="btn">0%</button>
				<button onclick="incrementar_a()" type="button" class="btn btn-primary">></button>
			</div>
			<br />
			<br />
		  	<img id="percent_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_clean.png" />
		  </div>
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
		  	<div class="btn-group" id="opciones">
				<button onclick="disminuir_b()" type="button" class="btn btn-warning"><</button>
				<button id="valor_b" type="button" class="btn">0%</button>
				<button onclick="incrementar_b()" type="button" class="btn btn-warning">></button>
			</div>
			<br />
			<br />
		  	<img id="percent_b" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_clean.png" />
		  </div>
		</div>
		<p align="justify">¿Qué porcentaje está ocupado en cada estacionamiento?</p>
		<h3>E1: <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="parking_e1"> %</h3>
		<h3>E2: <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="parking_e2"> %</h3>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>